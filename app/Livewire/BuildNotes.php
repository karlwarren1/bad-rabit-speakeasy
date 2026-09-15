<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Build Notes — internal — Bad Rabbit')]
class BuildNotes extends Component
{
    public array $stillNeeded = [
        'Logo vector — current wordmark is set in Archivo Black as a stand-in; the inverted-rabbit "A" is the whole device and needs the real artwork.',
        'Rabbit artwork for the character\'s occasional appearances elsewhere on the site.',
        'Remaining photography: harlequin-floor crop, column figures, ceiling, oxblood doors, room-full shot, and 3+ dedicated cocktail hero shots (the renderings on hand are used as atmosphere, not tied to specific drink names — see note below).',
        'Cocktail/mocktail name confirmation from Karl for each rendered image, per the Sept 2026 internal memo — do not guess from appearance.',
        'Remaining cocktail specs/prices, the bourbon pour list, and a separate snack menu.',
        'Hours, age policy, last call, parking, and accessibility copy.',
        'Domain and emails — badrabbitcincy.com is a stand-in.',
        'Private night pricing — minimums shown on Home are illustrative only.',
        'Reservation platform integration for the "Reserve" action tile.',
        'Capacity, both entrances, the legal entity name, the Instagram handle, and open roles — the handoff brief marks these as already finalized, but their values were not included in the text handed to this build. Carry over from the prior artifact version if available.',
    ];

    public function render()
    {
        return view('livewire.build-notes');
    }
}
