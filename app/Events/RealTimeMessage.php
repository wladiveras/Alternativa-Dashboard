<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

//  Envia mensagem em tempo real
/*
Exemplo de uso
    >> 
    
    //JS
     
    Sintax: Echo.channel('events').listen('RealTimeMessage', (e) => console.log('RealTimeMessage: ' + e.message));

    //PHP 
    event(new App\Events\RealTimeMessage('Hello World'));


*/
 

class RealTimeMessage implements ShouldBroadcast
{
    use SerializesModels;

    public string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function broadcastOn(): Channel
    {
        return new PrivateChannel('events');
    }




}