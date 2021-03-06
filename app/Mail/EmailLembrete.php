<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailLembrete extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $subject;
    public $informacoes;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $subject, $informacoes = "")
    {
        $this->user = $user;
        $this->subject = $subject;
        $this->informacoes = $informacoes;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $subject = 'Eventos - Lembrete de Evento';
        // return  $this->from('lmtsteste@gmail.com', 'Eventos - LMTS')
        //             ->subject($this->subject)
        //             ->view('emails.emailLembreteRevisor')
        //             ->with([
        //                 'user' => $this->user,
        //                 'info' => $this->informacoes,
                        
        //             ]);
        return  $this->from('lmtsteste@gmail.com', 'Easy')
                    ->subject($this->subject)
                    ->markdown('emails.emailLembreteRevisor')->with([
                        'user' => $this->user,
                        'info' => $this->informacoes,                   
                  ]);
    }
}
