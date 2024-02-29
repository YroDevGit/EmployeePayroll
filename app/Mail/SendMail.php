<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $fullname;
    public $password;
    public $username;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $fullname, $username, $password)
    {
        $this->data = $data;
        $this->fullname = $fullname;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Activation email',
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = url('/');

        return $this->view('email')
                    ->with([
                        'data' => $this->data,
                        'fullname' => $this->fullname,
                        'username' => $this->username,
                        'password' => $this->password,
                        'url' => $url
                    ]);
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
