<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdhesionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Elements d'Adhésion
     * @var array
    */
    public $adhesion_mail;

    /**
     * Create a new message instance.
     *
     * @return void
    */
    public function __construct(Array $adhesion_mail)
    {
        $this -> adhesion_mail = $adhesion_mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Demande d'Adhésion à la Communauté")
                    -> view('emails.adhesionmail');
    }
}
