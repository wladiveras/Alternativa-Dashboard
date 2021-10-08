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
    // Retorna a pagina de Pedidos
    public function index()
    {
        // Pega o o numero do pedido
        $id = session('session_order');
        $token = session('session_token');
        
        // Se não existe sessão
        if(!Session::has('session_order'))
        {
            // Direciona ao inicio
            return redirect('/');
        }

        // Caso exista a sessão
        else 
        {
            // Recupera as informações do pedido
            $order = DB::table('alt_orders')
            ->where('order_id', '=', $id)
            ->first();

            // Retorna as informações fornecidas do cliente ao formulario
            $order_data = DB::table('alt_orders_data')
            ->where('order_id', '=', $id)
            ->OrderBy('id', 'desc')
            ->get();

            //Recupera as informações do cartão da FRENTE
            $card_front = DB::table('alt_cards')
            ->where('id', '=', $order->id_front)
            ->first();

            // Retorna a variavel
            View::share('card_front', $card_front);

            //Recupera as informações do cartão do VERSO
            if($order->id_back > 0) 
            {
                $card_back = DB::table('alt_cards')
                ->where('id', '=', $order->id_back)
                ->first();

                // Retorna a variavel
                View::share('card_back', $card_back);
            }
           
            // Retorna as variaveis para a template
            View::share('order', $order);
            View::share('order_data', $order_data);
            
            //Caso tenha ja tenha aprovado
            if($order->approved_at)
            {
                return view('orders.approved')->with('title', 'Pedido nº '. $order->order_id);
            }

            //Caso a pagina ja tenha expirado
            if($order->expire_at < Carbon::now())
            {
                return view('orders.expired')->with('title', 'Pedido nº '. $order->order_id);
            }

            // Retorna a template
            return view('order')->with('title', 'Pedido nº '. $order->order_id);
        }
    }

    // Acessa o pedido
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
        foreach($orderQuery as $O)
        {
            $Logged = true;
            $order->id = $O->order_id;
            $order->tk = $O->token;
            $order->user = $O->username;
        }

        //Caso de error
        if(!$Logged) 
        {
            return redirect('/')
                ->with('alert-type', 'toaster')
                ->with('alert-title', 'Falha')
                ->with('alert-response', 'Não foi possivel identificar seu pedido');
        } 

        //Caso encontre o pedido
        else 
        {
            //Gen Session
            session(['session_order' => $order->id]);
            session(['session_token' => $order->tk]);

            // Direciona a pagina
            return redirect()->action([OrderController::class, 'index'])
                ->with('alert-type', 'toaster')
                ->with('alert-title', 'Pedido nº'. $order->id)
                ->with('alert-response', 'Olá <b>'. $order->user .'</b>. <br>Adicione as informações para gerar os cartões, ao finalizar verifique as informações e aprove para começar a produção.');
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

    //Aprovação da arte
    public function aprove(Request $request)
    {
        $id = $request->input('order-id');

        DB::table('alt_orders')
            ->where('order_id', $id)
            ->update(
                ['approved_at' => Carbon::now()
            ]);

        $order = 
        DB::table('alt_orders')
            ->where('order_id', '=', $id)
            ->first();

        //Send Email
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.approved',  ['order' => $order], function($message) use($order)
        {
            $message
                ->from('hi@wladi.com.br')
                ->to('wladinart@gmail.com', 'Alternativa')
                ->subject($order->username .': aprovou o pedido');
        });
      
        return redirect('/');
    }

    // Insere as informações no banco de dados
    public function insert(Request $request)
    {
        // Verifica se deve ignorar o avatar
        if($request->input('ignore-avatar') == 1)
        {
           $avatar = null;
        }

        // Se não ignorar, invoca o arquivo
        else 
        {
             // Valida o avatar
             $request->validate([
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            // Recupera os INPUT
            $input = $request->all();
            $avatar = null;

            //Verifica se existe a imagem define um nome e move para a pasta correta
            if ($file = $request->file('avatar')) 
            {
                //Cria um diretorio novo para o tipo de pedido
                $avatar = md5(date('YmdHis')). "." . $file->getClientOriginalExtension();
                $file->move('assets/media/users/'.$request->input('order-id').'/', $avatar);
            }
        }

        // Insere a tabulação no banco de dados
        $add_data = 
        DB::table('alt_orders_data')->insert([
            
            'order_id'     => $request->input('order-id'),
            'front_avatar' => $avatar,

            'front_input1' => $request->input('front-input-0'),
            'front_input2' => $request->input('front-input-1'),
            'front_input3' => $request->input('front-input-2'),
            'front_input4' => $request->input('front-input-3'),
            'front_input5' => $request->input('front-input-4'),
            'front_input6' => $request->input('front-input-5'),
            'front_input7' => $request->input('front-input-6'),
            'front_input8' => $request->input('front-input-7'),
            
            'back_input1' => $request->input('back-input-0'),
            'back_input2' => $request->input('back-input-1'),
            'back_input3' => $request->input('back-input-2'),
            'back_input4' => $request->input('back-input-3'),
            'back_input5' => $request->input('back-input-4'),
            'back_input6' => $request->input('back-input-5'),
            'back_input7' => $request->input('back-input-6'),
            'back_input8' => $request->input('back-input-7'),

            'created_at' => Carbon::now(),
        ]);

        // Atualiza a contagem de dados
        if($add_data)
        {
           DB::table('alt_orders')->where('order_id', $request->input('order-id'))->increment('limit_count');
        }
        

        //Retorna a pagina
        return redirect()->action([OrderController::class, 'index'])
            ->with('alert-type', 'toaster')
            ->with('alert-title', 'Adicionado')
            ->with('alert-response', 'As informações foram registradas com sucesso.');
    }

    // Função responsavel por deletar informações do banco de dados
    public function delete(Request $request)
    {
        // Deleta a informação do banco de dados
        DB::table('alt_orders_data')->where('id', '=', $request->itemid)->delete();
        DB::table('alt_orders')->where('order_id', $request->orderid)->decrement('limit_count');

        return redirect()->action([OrderController::class, 'index'])
        ->with('alert-type', 'toaster')
        ->with('alert-title', 'Excluido')
        ->with('alert-response', 'O item foi deletado com sucesso.');
    }
}
