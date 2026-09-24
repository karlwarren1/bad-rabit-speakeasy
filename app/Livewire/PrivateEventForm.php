<?php

namespace App\Livewire;

use App\Mail\PrivateEventInquiryMail;
use App\Models\PrivateEventInquiry;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class PrivateEventForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $message = '';

    /**
     * Honeypot: a field real visitors never see or fill in (hidden via CSS
     * in the blade), but bots that blindly fill every field will. If this
     * has anything in it, we quietly pretend to succeed without actually
     * saving or emailing anything.
     */
    public string $company = '';

    public bool $sent = false;

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'message' => ['required', 'string', 'max:2000'],
        ];
    }

    /** These three addresses get every submission. */
    protected array $recipients = [
        'chad.hart@epicb.com',
        'amanda.flood@agaveandrye.com',
        'gavin.mullen@agaveandrye.com',
        'lindsay.newberry@agaveandrye.com',
        'kailie.yeager@agaveandrye.com',
        'benjamin.wilson@tokyopie.com',
        // 'karlwarrengaas@gmail.com',
        // 'karl.gaas@agaveandrye.com',
    ];

    public function submit(): void
    {
        if (filled($this->company)) {
            // Honeypot tripped — silently "succeed" without doing anything.
            $this->sent = true;
            return;
        }

        $validated = $this->validate();

        $inquiry = PrivateEventInquiry::create($validated);

        Mail::to($this->recipients)->send(new PrivateEventInquiryMail($inquiry));

        $this->reset(['name', 'email', 'phone', 'message']);
        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.private-event-form');
    }
}
