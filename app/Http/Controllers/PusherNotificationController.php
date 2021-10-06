<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Pusher\Pusher;
Use Auth;

class PusherNotificationController extends Controller
{
    public function notification()
    {
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true
        );
        
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'), 
            $options
        );

        $data['avatar'] = "../../assets/img/theme/team-1.jpg";
        $data['date'] = "2 hrs atrás";
        $data['name'] = Auth::user()->name;
        $data['link'] = "#test";
        $data['message'] = "1ocê tem um cliente agendado para as 10:30 AM de hoje.";
       
        $pusher->trigger('notify-'. md5(Auth::user()->id), 'App\\Events\\Notify', $data);
    }
}
