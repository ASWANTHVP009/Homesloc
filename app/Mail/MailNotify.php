<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    private $data = [];

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
    // public function build()
    // {
    //     return $this->from('info@homesloc.com', 'Test')->subject($this->data['subject'])->view('contact')->with('data', $this->data);
    // }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'HomesLoc Contact',
        );
    }

    /**
     * Get the message content definition.
     */


    public function content(): Content
    {
        $data = $this->data;
        return new Content(
            view: 'mailnotify',
            with: [
                'name' => $data['name'],
                'email' => $data['email'],
                'body' => $data['body'],
            ],

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
