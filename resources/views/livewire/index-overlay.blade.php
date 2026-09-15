<div x-data>
  <button
    aria-controls="site-index"
    aria-expanded="@js($open)"
    aria-label="{{ $open ? 'Close menu' : 'Open menu' }}"
    class="hamburger {{ $open ? 'is-open' : '' }}"
    type="button"
    wire:click="toggle"
  >
    <span></span><span></span><span></span>
  </button>

  <div
    aria-label="Site index"
    aria-modal="true"
    class="index-overlay"
    id="site-index"
    role="dialog"
    style="display: none;"
    x-show="$wire.open"
    x-transition:enter-end="idx-enter-end"
    x-transition:enter-start="idx-enter-start"
    x-transition:enter="idx-enter"
    x-transition:leave-end="idx-leave-end"
    x-transition:leave-start="idx-leave-start"
    x-transition:leave="idx-leave"
  >
    <nav>
      <a
        @click="$wire.close()"
        href="{{ route('home') }}"
        wire:navigate
      ><span class="idx-num">01</span>Home</a>
      <a
        @click="$wire.close()"
        href="{{ route('menu') }}"
        wire:navigate
      ><span class="idx-num">02</span>The Cocktails</a>
      <a
        @click="$wire.close()"
        href="{{ route('home') }}#experience"
        wire:navigate
      ><span class="idx-num">03</span>Experience</a>
      <a
        @click="$wire.close()"
        href="{{ route('home') }}#find-us"
        wire:navigate
      ><span class="idx-num">04</span>Find Us</a>
      <a
        @click="$wire.close()"
        href="{{ route('home') }}#private-events"
        wire:navigate
      ><span class="idx-num">05</span>Private Events</a>
    </nav>

    <div class="foot">
      <p class="sub">6112 Montgomery Rd &middot; Cincinnati, Ohio 45213 &middot; (513) 855-5467</p>
      <button
        class="linklike ph-toggle"
        id="phToggle"
        type="button"
      >Highlight placeholders</button>
    </div>
  </div>
</div>
