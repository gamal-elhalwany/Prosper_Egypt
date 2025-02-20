<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Mail\Mailables\Attachment;

class CareersMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content;
    public $fromEmail;
    public $fromName;
    public $resumePath;

    /**
     * Create a new message instance.
     */
    public function __construct($content, $fromEmail, $fromName, $resumePath = null)
    {
        $this->content = $content;
        $this->resumePath = $resumePath;

        $this->fromEmail = $fromEmail;
        $this->fromName = $fromName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Careers Application",
            from: new Address($this->content['email']),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.careers-form',
            with: ['content' => $this->content],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        if ($this->resumePath) {
            $attachments[] = Attachment::fromPath($this->resumePath);
        }

        return $attachments;
    }
}
