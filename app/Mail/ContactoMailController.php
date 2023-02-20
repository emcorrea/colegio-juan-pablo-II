<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoMailController extends Mailable
{
    use Queueable, SerializesModels;
    private $nombre;
    private $email;
    private $asunto;
    private $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$email,$asunto,$mensaje)
    {
        $this->nombre   = $nombre;
        $this->email    = $email;
        $this->asunto   = $asunto;
        $this->mensaje  = $mensaje;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->asunto,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'web.menu.mails.contacto',
            with: [
                'nombre'    => $this->nombre,
                'email'     => $this->email,
                'mensaje'   => $this->mensaje
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
