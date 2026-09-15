<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Bad Rabbit — Bourbon Speakeasy — Cincinnati, Ohio')]
class Home extends Component
{
    /**
     * The four actions that are the site's only job, per the brief.
     * Reserve and Plan a Private Night don't have booking systems wired
     * up yet, so they're marked as placeholders (data-ph) until the
     * reservation platform and private-event pricing are finalized.
     */
    public array $actions = [
        [
            'label' => 'The Cocktails',
            'href' => '/menu',
            'placeholder' => null,
        ],
        [
            'label' => 'Find the Rabbit',
            'href' => '#find-us',
            'placeholder' => null,
        ],
        [
            'label' => 'Plan a Private Night',
            'href' => '#private-events',
            'placeholder' => 'private night pricing is illustrative only',
        ],
    ];

    public function render()
    {
        return view('livewire.home');
    }
}
