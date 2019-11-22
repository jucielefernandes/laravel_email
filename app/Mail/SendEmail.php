<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    // public $destino;
    public $nome;
    public $assunto;
    public $descricao;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome,$assunto,$descricao)
    {
        // $this->destino = $destino;
        $this->nome = $nome;
        $this->assunto = $assunto;
        $this->descricao = $descricao;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.name')
                    ->subject('Este é um e-mail de teste!')
                    ->from('laravel@teste.com');
    }
}
