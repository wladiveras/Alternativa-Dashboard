<?php
namespace App\Helper;

use App\Models\User;
use Illuminate\Support\Facades\DB;

// Helper responsavel pelo sistema de notificação em tempo real
class WladiVeras
{
    // Notificação em tempo real na TOPBAR
    public static function NotifyData($userID)
    {
        //Recupera os dados do ultimo log
        $LastLog = DB::table('notification')
            ->where('receiver_id', '=', $userID)
            ->limit(5)
            ->get();

        return $LastLog;
    }

    public static function User($userID)
    {
        $data = DB::table('users')
            ->where('id', '=', $userID)
            ->first();

        return $data;
    }

    //Transform a image in base64
    public static function Base64($file)
    {
        return base64_encode($file);
        
    }

    //@Calcula uma porcentagem
    public static function Percent($valor, $total, $type = 1)
    {
        // Função de porcentagem: N é X% de N
        if ($type == 1) {
            return number_format(($valor * 100) / $total, 2, '.', ' ');
        }

        // Função de porcentagem: Quanto é X% de N?
        if ($type == 2) {
            return number_format(($valor / 100) * $total, 2, '.', ' ');
        }

        //  Função de porcentagem: N é N% de X
        if ($type == 3) {
            return number_format(($valor / $total) * 100, 2, '.', ' ');
        }
    }

//@ Função para formatar a data
    public static function timeset($datetime, $full = false)
    {
        $now = new \DateTime;
        $ago = new \DateTime($datetime);
        $tosub = new \DateInterval('PT0H'); //add

        $ago->add($tosub);
        $diff = $now->diff($ago);
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'ano',
            'm' => 'mes',
            'w' => 'semana',
            'd' => 'dia',
            'h' => 'hora',
            'i' => 'minuto',
            's' => 'segundo',
        );

        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) {
            $string = array_slice($string, 0, 1);
        }

        return $string ? implode(', ', $string) . " Atrás" : " Agora mesmo";
    }

    //@ Função para formatar minutos para horas
    public static function hourset($mins, $type = 0)
    {
        $hours = intval(str_pad(floor($mins / 60), 2, "0", STR_PAD_LEFT));
        $mins = intval(str_pad($mins % 60, 2, "0", STR_PAD_LEFT));

        if ($type == 1) {
            $text_minute = 'M';
            $text_hour = 'H';
        } else {
            if ($mins > '1') {
                $text_minute = 'minutos';
            } else {
                $text_minute = 'minuto';
            }

            if ($hours > '1') {
                $text_hour = 'horas';
            } else {
                $text_hour = 'hora';
            }
        }

        return $days . ' ' . $hours . ' ' . $text_hour . ' ' . $mins . ' ' . $text_minute;
    }

    public static function minuteset($minutes)
    {
        if ($minutes <= 0) {
            return '0 horas 0 minutos';
        } else {
            return sprintf("%02d", floor($minutes / 60)) . ' horas ' . sprintf("%02d", str_pad(($minutes % 60), 2, "0", STR_PAD_LEFT)) . " minutos";
        }
    }

}
