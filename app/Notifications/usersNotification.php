<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Notifications\Messages\BroadcastMessage;

//  Envia mensagem para um usuario cadastrado
/*
Exemplo de uso
    >> 
        
    Sintax: App.Private.User.{ID}

    Echo.private('App.Private.User.1')
        .notification((notification) => {
            console.log(notification.message);
        });

*/
 
class usersNotification extends Notification implements ShouldBroadcast
{

    public string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function via($notifiable): array
    {
        return ['broadcast'];
    }

    public function toBroadcast($notifiable): BroadcastMessage
    {
        return new BroadcastMessage([
            'message' => "$this->message (User $notifiable->id)"
        ]);
    }
}