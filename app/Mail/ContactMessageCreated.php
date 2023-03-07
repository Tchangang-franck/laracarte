<?php

namespace App\Mail;
use App\Models\message;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use Illuminate\Mail\Mailables\Address;

class ContactMessageCreated extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $msg;

    /**
     * Create a new message instance.
     */
    public function __construct( message $msg)
    {
        $this->msg=$msg;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
           
            // $this->from($this->$msg->email,$this->$msg->name)
            subject: 'Contact Message Created',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
         
        return new Content(
            markdown: 'email.message.created',
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
