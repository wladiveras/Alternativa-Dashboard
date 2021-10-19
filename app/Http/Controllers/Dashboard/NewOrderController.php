<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Madnest\Madzipper\Facades\Madzipper;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;
use App\Imports\OrdersImport;
use App\Models\User;
use Carbon\Carbon;
use View;
use Auth;

class NewOrderController extends Controller
{
    // Controlador da pagina principal
    public function index($front, $back)
    {
        View::share('front', $front);
        View::share('back', $back);

        return view('dashboard.order/order')->with('title', env('APP_DEV').' Dashboard');
    }

    // Adicionar novo pedido
    public function AddOrder(Request $request)
    {
        //Define as variaveis
        $card_front = null;
        $card_back = null;

        $files = $request->file('artwork');

        foreach ($files as $key => $file) {
            // Cria um diretorio novo para o tipo de pedido
            $art[$key] = md5($key.date('YmdHis')). "." . $file->getClientOriginalExtension();
            $file->move('assets/media/cards/uploads/'.$request->input('order_number').'/', $art[$key]);
        }

        // Insere as informações no banco de dados
        DB::table('alt_orders')->insert([
            'order_id'    => $request->input('order_number'),
            'order_link'  => $request->input('order_bling'),
            'salesman'    => Auth::user()->name,
            'username'    => $request->input('order_client'),
            'title'       => $request->input('order_name'),
            'description' => $request->input('order_desc'),
            'code'        => $request->input('order_code'),
            'coding'      => $request->input('order_code'),
            'prompt'      => $request->input('order_time'),
            'limit'       => $request->input('order_limit'),
            'id_front'    => $request->input('card-frontid'),
            'id_back'     => $request->input('card-backid') ?? 0,
            'card_front'  => $art[0]  ?? 0,
            'card_back'   => $art[1]  ?? 0,
            'token'       => $request->input('order_email'),
            'created_at' => Carbon::now(),
            'expire_at' => Carbon::now()->addDays(7),
        ]);
        
        return redirect()->action([DashboardController::class, 'index'])
        ->with('alert-type', 'success')
        ->with('alert-title', 'Ordem de Pedido #'.$request->input('order_number'))
        ->with('alert-response', 'Ordem de pedido criada com sucesso.<br>Email de acesso: <b>'.$request->input('order_email').'</b><br>Senha de Acesso: <b>'.$request->input('order_number').'</b>');
    }

    public function delOrder(Request $request)
    {
        File::deleteDirectory(public_path('/assets/media/cards/uploads/'.$request->orderid));
        File::deleteDirectory(public_path('/assets/media/users/'.$request->orderid));
        
        DB::table('alt_orders')
        ->where('order_id', '=', $request->orderid)
        ->delete();

        DB::table('alt_orders_data')
        ->where('order_id', '=', $request->orderid)
        ->delete();

        return redirect()->action([DashboardController::class, 'index'])
        ->with([
            'alert-type'     => 'toaster',
            'alert-title'    => 'Pedido deletado',
            'alert-response' => 'O pedido foi deletado com sucesso',
        ]);
    }

    // Download Orders Assets
    public function DownloadOrders($orderid)
    {
        $path = public_path('/assets/media/users/'.$orderid);
        $files = File::glob($path.'/*.{png,jpeg,jpg,gif}', GLOB_BRACE);
        $zip_name = '/'.$orderid.'_assets.zip';
        
        $zipper = new \Madnest\Madzipper\Madzipper;
        $zipper->make($path.$zip_name)->folder('assets_'.$orderid)->add($files);
        $zipper->close();

        
        return response()->download($path.$zip_name);
    }

    //Import orders data
    public function ImportOrders(Request $request)
    {
        Excel::import(new OrdersImport($request->orderid), $request->file('file')->store('temp'));
        return back();
    }

    public function endOrder(Request $request)
    {
        DB::table('alt_orders')
        ->where('order_id', $request->orderid)
        ->update([
            'ready_at' => Carbon::now(),
        ]);

        $order =
            DB::table('alt_orders')
            ->where('order_id', '=', $request->orderid)
            ->first();

 
        // Send Email
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);

        $beautymail->send('emails.finished', ['order' => $order], function ($message) use ($order) {
            $message
                ->from(env('MAIL_SENDER'))
                ->to($order->token, 'Alternativa')
                ->subject('Em Produção: seu pedido está sendo produzido');
        });
        
        //
        return redirect()->action([DashboardController::class, 'index'])
        ->with('alert-type', 'toaster')
        ->with('alert-title', 'Finalizado')
        ->with('alert-response', 'Foi registrado a conclusão do pedido');
    }

    //Export Orders data
    public function ExportOrders($orderid)
    {
        $QueryOrders = DB::table('alt_orders_data')
        ->where('order_id', $orderid)
        ->OrderBy('id', 'desc')
        ->get();

        $avatar  = null;
        $front_1 = null;
        $front_2 = null;
        $front_3 = null;
        $front_4 = null;
        $front_5 = null;
        $front_6 = null;
        $front_7 = null;
        $front_8 = null;
        $back_1 = null;
        $back_2 = null;
        $back_3 = null;
        $back_4 = null;
        $back_5 = null;
        $back_6 = null;
        $back_7 = null;
        $back_8 = null;

        foreach ($QueryOrders as $O) {
            if (!is_null($O->front_avatar)) {
                $avatar = '@PHOTO';
            }
            if (!is_null($O->front_input1)) {
                $front_1 = 'frente_1';
            }
            if (!is_null($O->front_input2)) {
                $front_2 = 'frente_2';
            }
            if (!is_null($O->front_input3)) {
                $front_3 = 'frente_3';
            }
            if (!is_null($O->front_input4)) {
                $front_4 = 'frente_4';
            }
            if (!is_null($O->front_input5)) {
                $front_5 = 'frente_5';
            }
            if (!is_null($O->front_input6)) {
                $front_6 = 'frente_6';
            }
            if (!is_null($O->front_input7)) {
                $front_7 = 'frente_7';
            }
            if (!is_null($O->front_input8)) {
                $front_8 = 'frente_8';
            }
            if (!is_null($O->back_input1)) {
                $back_1  = 'verso_1';
            }
            if (!is_null($O->back_input2)) {
                $back_2  = 'verso_2';
            }
            if (!is_null($O->back_input3)) {
                $back_3  = 'verso_3';
            }
            if (!is_null($O->back_input4)) {
                $back_4  = 'verso_4';
            }
            if (!is_null($O->back_input5)) {
                $back_5  = 'verso_5';
            }
            if (!is_null($O->back_input6)) {
                $back_6  = 'verso_6';
            }
            if (!is_null($O->back_input7)) {
                $back_7  = 'verso_7';
            }
            if (!is_null($O->back_input8)) {
                $back_8  = 'verso_8';
            }

            // Instancia a variavel
            $data[] =
                array(
                    (!is_null($avatar))  ? ($avatar)  : "" => (!is_null($O->front_avatar)) ? ($O->front_avatar) : "",
                    (!is_null($front_1)) ? ($front_1) : "" => (!is_null($O->front_input1)) ? ($O->front_input1) : "",
                    (!is_null($front_2)) ? ($front_2) : "" => (!is_null($O->front_input2)) ? ($O->front_input2) : "",
                    (!is_null($front_3)) ? ($front_3) : "" => (!is_null($O->front_input3)) ? ($O->front_input3) : "",
                    (!is_null($front_4)) ? ($front_4) : "" => (!is_null($O->front_input4)) ? ($O->front_input4) : "",
                    (!is_null($front_5)) ? ($front_5) : "" => (!is_null($O->front_input5)) ? ($O->front_input5) : "",
                    (!is_null($front_6)) ? ($front_6) : "" => (!is_null($O->front_input6)) ? ($O->front_input6) : "",
                    (!is_null($front_7)) ? ($front_7) : "" => (!is_null($O->front_input7)) ? ($O->front_input7) : "",
                    (!is_null($front_8)) ? ($front_8) : "" => (!is_null($O->front_input8)) ? ($O->front_input8) : "",
                    (!is_null($back_1))  ? ($back_1)  : "" => (!is_null($O->back_input1))  ? ($O->back_input1)  : "",
                    (!is_null($back_2))  ? ($back_2)  : "" => (!is_null($O->back_input2))  ? ($O->back_input2)  : "",
                    (!is_null($back_3))  ? ($back_3)  : "" => (!is_null($O->back_input3))  ? ($O->back_input3)  : "",
                    (!is_null($back_4))  ? ($back_4)  : "" => (!is_null($O->back_input4))  ? ($O->back_input4)  : "",
                    (!is_null($back_5))  ? ($back_5)  : "" => (!is_null($O->back_input5))  ? ($O->back_input5)  : "",
                    (!is_null($back_6))  ? ($back_6)  : "" => (!is_null($O->back_input6))  ? ($O->back_input6)  : "",
                    (!is_null($back_7))  ? ($back_7)  : "" => (!is_null($O->back_input7))  ? ($O->back_input7)  : "",
                    (!is_null($back_8))  ? ($back_8)  : "" => (!is_null($O->back_input8))  ? ($O->back_input8)  : "",
                );
        }


        
        
        return Excel::download(new OrdersExport($data), $orderid.'_export.csv');
    }

    // Busca as informações dos cartões da frente
    public function cardFront()
    {
        $QueryCards = DB::table('alt_cards')
        ->where('isBack', 0)
        ->OrderBy('id', 'desc')
        ->get();
        
        View::share('front_id', null);
        View::share('data__cards', $QueryCards);

        return view('dashboard.order/cards')->with('title', env('APP_DEV').' Dashboard');
    }

    // Busca as informações do cartão de tras.
    public function cardBack($frontid)
    {
        $QueryCards = DB::table('alt_cards')
        ->where('isBack', 1)
        ->OrderBy('id', 'desc')
        ->get();
        
        View::share('front_id', $frontid);
        View::share('data__cards', $QueryCards);

        return view('dashboard.order/cards')->with('title', env('APP_DEV').' Dashboard');
    }
}
