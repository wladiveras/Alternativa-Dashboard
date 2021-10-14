<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Request;
use View;
use Auth;

class ConsultController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function index($type, $id)
    {

        // Recupera os dados do ultimo log
        $tab_resume = DB::table('customers_tab')
        ->where('customer_id', '=', 1504)
        ->limit(5)
        ->OrderBy('id', 'desc')
        ->get();
    
        // Retorna as variaveis para a template
        View::share('type', $type);
        View::share('tab_resume', $tab_resume);

        // Retorna a template
        return view('consult')->with('title', 'Um pequeno titulo para a pagina');
    }

    // Função Post para buscar clientes atraves do INPUT da TopBar.
    public function customerTab(Request $request)
    {
        //Inicia o OBJETO
        $inputData = new \stdClass;

        // INPUT do TOPBAR
        $inputData->userid = Request::input('get-userid'); // ID do Consultor
        $inputData->customer = Request::input('get-customer'); // ID do Cliente(NO SISTEMA)
        $inputData->type = Request::input('get-type'); // O tipo de consulta(CPF, NOME, CELULAR)
        $inputData->date = Request::input('get-date'); // Data para a proxima consulta
        $inputData->comment = Request::input('get-comment'); // Detalhamento da ligação
        $inputData->status = Request::input('get-status'); // Status da ligação (Cliente aceitou a proposta, vai ter saldo mês que vem, contrato fechado).
        $inputData->phone = Request::input('get-phone'); // Telefone que conseguiu falar com o cliente.
        $inputData->contact = Request::input('check-contact', 0); // Conseguiu contato?
        $inputData->margin = Request::input('check-margin', 0); // Verificou a margem?
        $inputData->call = Request::input('check-call', 0); // Conseguiu falar com o cliente?
        $inputData->interest = Request::input('check-interest', 0); // Cliente tinha interesse no produto?

        // Insere a tabulação no banco de dados
        DB::table('customers_tab')->insert([
            'user_id' => $inputData->userid,
            'customer_id' => $inputData->customer,
            'type' => $inputData->type,
            'phone' => $inputData->phone,
            'status' => $inputData->status,
            'resume' => $inputData->comment,
            'return_at' => $inputData->date,
            'created_at' => Carbon::now(),

            // Check List TAG
            'input1' => $inputData->contact,
            'input2' => $inputData->margin,
            'input3' => $inputData->call,
            'input4' => $inputData->interest,
        ]);

        // Atualiza o log de consultas para liberar uma nova consulta
        DB::table('customers_log')
            ->where('user_id', $inputData->userid)
            ->where('checked', '=', 0)
            ->update(
                ['checked' => 1]
            );

        return redirect()->action([HomeController::class, 'index'])
            ->with('alert-type', 'toaster')
            ->with('alert-title', 'Tabução Concluida')
            ->with('alert-response', 'Olá, <b>' . Auth::user()->name . '</b>, as informações foram registrados com sucesso.');
    }
}
