<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationMail extends Mailable
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
        $subject = 'Rezerwacja: ' . $this->data['date'] . ' ilość osób: ' . $this->data['people'];
        return $this->view('mails.reservation')
            ->subject($subject)
            ->with([
                'data' => $this->data
            ]);
    }
}
