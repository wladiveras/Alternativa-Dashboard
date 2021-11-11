<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Session;
use View;
use Auth;

class OrderController extends Controller
{
    /**
     * ! index
     *
     * @return void
     */
    public function index()
    {
        if (!Session::has('session_order')) {

            return redirect('/');

        } else {
            $id = session('session_order');
            $token = session('session_token');
        
            $order = DB::table('alt_orders')
            ->where('order_id', '=', $id)
            ->first();

            $order_data = DB::table('alt_orders_data')
            ->where('order_id', '=', $id)
            ->OrderBy('id', 'desc')
            ->get();

            $card_front = DB::table('alt_cards')
            ->where('id', '=', $order->id_front)
            ->first();

            if ($order->id_back > 0) {
                $card_back = DB::table('alt_cards')
                ->where('id', '=', $order->id_back)
                ->first();
            }
           
            $shareData =
            [
                'title'      => 'Pedido nº '. $order->order_id,
                'order'      => $order,
                'order_data' => $order_data,
                'card_front' => $card_front,
                'card_back'  => $card_back ?? 0,
            ];

            if ($order->approved_at) {
                return
                view('orders.approved')
                ->with($shareData);
            }

            // if ($order->expire_at < Carbon::now()) {
            //     return
            //     view('orders.expired')
            //     ->with($shareData);
            // }

            return
            view('order')
            ->with($shareData);
        }
    }

    /**
     * ! renew
     *
     * @return void
     */
    public function renew()
    {
        $id = session('session_order');
        $token = session('session_token');
    
        if (!Session::has('session_order')) {
            return redirect('/');
        } else {
            $order = DB::table('alt_orders')
            ->where('order_id', '=', $id)
            ->first();

            if ($order->limit_count < $order->limit) {
                return redirect('/');
            }

            $order_data = DB::table('alt_orders_data')
            ->where('order_id', '=', $id)
            ->OrderBy('id', 'desc')
            ->get();

            $shareData =
            [
                'title'      => 'Pedido nº '. $order->order_id,
                'order'      => $order,
                'order_data' => $order_data,
            ];

            return
                view('orders.renew')
                ->with($shareData);
        }
    }

    public function renewRequest(Request $request)
    {
        File::cleanDirectory(public_path('/assets/media/users/'.$request->orderid));

        DB::table('alt_orders')
        ->where('order_id', $request->order_id)
        ->update([
            'description' => $request->description,
            'limit' => $request->amount,
            'limit_count' => 0,
            'renew_at' => Carbon::now(),
            'ready_at' => null,
            'approved_at' => null
        ]);

        DB::table('alt_orders_data')
        ->where('order_id', '=', $request->order_id)
        ->delete();
        
        $order =
            DB::table('alt_orders')
            ->where('order_id', '=', $request->order_id)
            ->first();

        //Send Email
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.renew', ['order' => $order], function ($message) {
            $message
                     ->from(env('MAIL_SENDER'))
                     ->to(env('MAIL_ALERT'), 'Alternativa')
                     ->subject('Recorrência: novo pedido');
        });

        return redirect()->action([OrderController::class, 'index'])
        ->with([
            'alert-type'     => 'toaster',
            'alert-title'    => 'Pedido recriado',
            'alert-response' => 'Um novo pedido foi iniciado com sucesso',
        ]);
    }

    // @info :: Acessa o pedido
    public function Access(Request $request)
    {
        //Busca os dados no banco de dados
        $orderQuery = DB::table('alt_orders')
        ->where('order_id', '=', $request->orderid)
        ->where('token', '=', $request->email)
        ->get();

        //Cria o Objeto
        $order = new \stdClass();
        $Logged = false;

        // Lista os objetos
        foreach ($orderQuery as $O) {
            $Logged = true;
            $order->id = $O->order_id;
            $order->tk = $O->token;
            $order->user = $O->username;
        }

        //Caso de error
        if (!$Logged) {
            return redirect('/')
                ->with('alert-type', 'toaster')
                ->with('alert-title', 'Falha')
                ->with('alert-response', 'Não foi possivel identificar seu pedido');
        }

        //Caso encontre o pedido
        else {
            //Gen Session
            session(['session_order' => $order->id]);
            session(['session_token' => $order->tk]);

            // Direciona a pagina
            return redirect()->action([OrderController::class, 'index'])
                ->with('alert-type', 'warning')
                ->with('alert-title', 'Atenção: No intuito de proteger seus dados, NÃO CEDA ESSE ACESSO A TERCEIROS.')
                ->with('alert-response', '<div style="text-align:left;font-size:13px">A confecção de Crachás e Carteirinhas corresponde a um procedimento sério e delicado por se tratar da utilização de dados sensíveis. É recorrente a utilização de CPFs, RGs, Pis, nomes de familiares, etc... Nesse sentido, a <b>AlternativaCard</b> têm um completo pacote de procedimentos no intuito de evitar o vazamento dos mesmos: fazemos a utilização de certificações digitais, serviços de CDN e muito mais.<br><br>Dispomos também de uma política interna de tratamento de dados que compreende: o tratamento centralizado de informações, a responsabilização civil/administrativa de todos os colaboradores responsáveis pelo tratamento, além do processo de descarte automático de dados sensíveis em até 30 dias após da finalização do pedido.<br><br>Contudo, nossa responsabilidade termina nesse sentido. A cessão dos dados de acesso a essa plataforma a terceiros foge de nossa zona de atuação.<br><br>Dessa forma, alertamos para que o preenchimento de dados seja feito APENAS por uma pessoa e que esta tenha o compromisso de não deixar esse acesso à disposição de terceiros.<br><br>Lembre-se que com os seus Dados criminosos podem cometer crimes que vão desde roubos à falsidade ideológica.<br></div>');
        }
    }

    // Desconecta
    public function Logout(Request $request)
    {
        $request->session()->forget('session_order');
        $request->session()->forget('session_token');

        // Direciona ao inicio
        return redirect('/');
    }

    // @info :: Aprovação da arte
    public function aprove(Request $request)
    {
        $id = $request->input('order-id');

        DB::table('alt_orders')
            ->where('order_id', $id)
            ->update(
                ['approved_at' => Carbon::now()
            ]
            );

        $order =
        DB::table('alt_orders')
            ->where('order_id', '=', $id)
            ->first();

        //Send Email
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.approved', ['order' => $order], function ($message) use ($order) {
            $message
                ->from(env('MAIL_SENDER'))
                ->to(env('MAIL_ALERT'), 'Alternativa')
                ->subject($order->username .': aprovou o pedido');
        });
      
        return redirect('/');
    }

    // @info :: Insere as informações no banco de dados
    public function insert(Request $request)
    {
        $front_input = null;
        $back_input = null;
        
        // Verifica se deve ignorar o avatar
        if ($request->input('ignore-avatar') == 1) {
            $avatar = null;
        }

        // Se não ignorar, invoca o arquivo
        else {
            // Valida o avatar
            $request->validate([
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $avatar = null;

            //Verifica se existe a imagem define um nome e move para a pasta correta
            if ($file = $request->file('avatar')) {
                $avatar = md5(date('YmdHis')). "." . $file->getClientOriginalExtension();
                $file->move('assets/media/users/'.$request->input('order-id').'/', $avatar);
            }
        }

        // Imagem propria do cliente
        if($request->input('only-front') == 1 || $request->input('only-back') == 1) {
            $arts = $request->file('arts');

            foreach ($arts as $key => $F) {
                $art[$key] = md5($key.date('YmdHis')). "." . $F->getClientOriginalExtension();
                $F->move('assets/media/users/'.$request->input('order-id').'/', $art[$key]);
            }
        }

        // Insere a tabulação no banco de dados
        $add_data =
        DB::table('alt_orders_data')
            ->insert(
                [
                'order_id'     => $request->input('order-id'),
                'front_avatar' => $avatar,
                'front_art'    => $art[0]  ?? null,
                'back_art'     => $art[1]  ?? null,

                'front_input1'  => $request->input('front-input-0'),
                'front_input2'  => $request->input('front-input-1'),
                'front_input3'  => $request->input('front-input-2'),
                'front_input4'  => $request->input('front-input-3'),
                'front_input5'  => $request->input('front-input-4'),
                'front_input6'  => $request->input('front-input-5'),
                'front_input7'  => $request->input('front-input-6'),
                'front_input8'  => $request->input('front-input-7'),
                'front_input9'  => $request->input('front-input-8'),
                'front_input10' => $request->input('front-input-9'),
                'front_input11' => $request->input('front-input-10'),
                'front_input12' => $request->input('front-input-11'),

                'back_input1'   => $request->input('back-input-0'),
                'back_input2'   => $request->input('back-input-1'),
                'back_input3'   => $request->input('back-input-2'),
                'back_input4'   => $request->input('back-input-3'),
                'back_input5'   => $request->input('back-input-4'),
                'back_input6'   => $request->input('back-input-5'),
                'back_input7'   => $request->input('back-input-6'),
                'back_input8'   => $request->input('back-input-7'),
                'back_input9'   => $request->input('back-input-8'),
                'back_input10'  => $request->input('back-input-9'),
                'back_input11'  => $request->input('back-input-10'),
                'back_input12'  => $request->input('back-input-11'),

                'created_at' => Carbon::now(),
                ]
            );

        // Atualiza a contagem de dados
        if ($add_data) {
            DB::table('alt_orders')
                ->where('order_id', $request
                ->input('order-id'))
                ->increment('limit_count');
        }
        
        //Retorna a pagina
        return redirect()->action([OrderController::class, 'index'])
            ->with('alert-type', 'toaster')
            ->with('alert-title', 'Adicionado')
            ->with('alert-response', 'As informações foram registradas com sucesso.');
    }

    // @info :: Função responsavel por deletar informações do banco de dados
    public function delete(Request $request)
    {
        // Deleta a informação do banco de dados
        DB::table('alt_orders_data')
            ->where('id', '=', $request->itemid)
            ->delete();

        DB::table('alt_orders')
            ->where('order_id', $request->orderid)
            ->decrement('limit_count');

        return redirect()
            ->action([OrderController::class, 'index'])
            ->with('alert-type', 'toaster')
            ->with('alert-title', 'Excluido')
            ->with('alert-response', 'O item foi deletado com sucesso.');
    }

    
    // @info :: Limpa todos os dados do servidor
    public function clear(Request $request)
    {
        // Clear all order data
        DB::table('alt_orders_data')
            ->where('order_id', '=', $request->orderid)
            ->delete();
        
        DB::table('alt_orders')
            ->where('order_id', $request->orderid)
            ->update([
                'limit_count' => 0
            ]);

        return redirect()->action([OrderController::class, 'index'])
            ->with('alert-type', 'toaster')
            ->with('alert-title', 'Dados excluidos')
            ->with('alert-response', 'As informações dos cartões foram excluidas do sistema.');
    }
}
