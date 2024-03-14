<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public $user ;

    public function __construct($user)
    {
        //
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->from('no-reply@diarioprogramador.com', 'Sistema Automatizado de Envio de Notificaciones')
                     ->subject('Registro de un nuevo usuario')
                     ->view('emails.new-user', ['usuario' => $this->user]);
        return $mail;
    }
}
