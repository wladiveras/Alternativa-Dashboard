<?php
namespace App\Helper;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Pusher\Pusher;
use Request;
use Auth;

// Helper responsavel pelo sistema de notificação em tempo real
class NotifyHelper
{    
    // Notificação em tempo real na TOPBAR
    public static function TopbarNotify($userid) 
    {
        // OPÇÕES DE CONEXÃO
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true
        );

        // Configuração de conexão
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'), 
            $options
        );

        // Dados para retornar ao JS
        $data['avatar'] = "../../assets/img/theme/team-1.jpg";
        $data['date'] = "2 hrs atrás";
        $data['name'] = 'SISTEMA';
        $data['link'] = "#test";
        $data['message'] = "1ocê tem um cliente agendado para as 10:30 AM de hoje.";

        $pusher->trigger('notify-'. md5($userid), 'App\\Events\\Notify', $data);
    }
}