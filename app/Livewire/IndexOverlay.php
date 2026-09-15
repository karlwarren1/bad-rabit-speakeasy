<?php

namespace App\Livewire;

use Livewire\Component;

/**
 * The site has no conventional nav bar. This component is the single
 * word ("Index") in the top bar that opens a full-screen overlay with
 * the real navigation behind it.
 */
class IndexOverlay extends Component
{
    public bool $open = false;

    public function toggle(): void
    {
        $this->open = ! $this->open;
    }

    public function close(): void
    {
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.index-overlay');
    }
}
