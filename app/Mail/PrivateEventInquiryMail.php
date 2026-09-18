<?php

namespace App\Mail;

use App\Models\PrivateEventInquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PrivateEventInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public PrivateEventInquiry $inquiry)
    {
    }

    public function build()
    {
        return $this
            ->subject('New Private Event Inquiry — ' . $this->inquiry->name)
            ->view('emails.private-event-inquiry');
    }
}
