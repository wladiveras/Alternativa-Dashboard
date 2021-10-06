<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Response;
use Wladi;

class NotifyController extends Controller
{
    // Notificação da TOPBAR
    public function topbarNotification($userID, $limit)
    {
        // Retorna as informações disponiveis no banco de dados
        $database = DB::table('notification')
            ->where('receiver_id', '=', $userID)
            ->where('checked', '=', 0)
            ->limit(5)
            ->OrderBy('id', 'desc')
            ->get();

        $viewed = DB::table('notification')
            ->where('receiver_id', '=', $userID)
            ->where('checked', '=', 0)
            ->limit(5)
            ->OrderBy('id', 'desc')
            ->count();

        //Gera a variavel responsavel organizar os dados do usuario
        $data = null;

        // Trata os dados do cliente pra retorna as informações já higienizada.
        foreach ($database as $K => $R) 
        {
            $data[$K]['name'] = Wladi::User($R->sender_id)->name;
            $data[$K]['avatar'] = Wladi::User($R->sender_id)->avatar;
            $data[$K]['value'] = $R->value;
            $data[$K]['link'] = $R->link;
            $data[$K]['date'] = Wladi::timeset($R->date);
            $data[$K]['viewed'] = $R->checked;
        }

        // Retorna as informações a api
        return Response::json(['count' => $viewed, 'data' => $data]);

    }
}
