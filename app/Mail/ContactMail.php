<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $subject = 'Wiadomość z formularza kontaktowego';

        return $this->view('mails.contact')
            ->subject($subject)
            ->with([
                'data' => $this->data
            ]);
    }
}
