<div>
  {{-- HERO — full-width, full-bleed cover background (hero-clean.jpg) with a
         slightly dark scrim for legibility. The wordmark is the actual logo
         artwork (not live type); everything else on top is real, accessible
         CSS text. --}}
  <section
    class="hero-wrap"
    style="background-image: url('{{ asset('img/hero-clean.jpg') }}');"
  >
    <div class="hero-frame">

      <div class="hero-top">
        <p class="hero-tagline left">Good people drink bad things.</p>

        <img
          alt="Bad Rabbit — Bourbon Speakeasy, Cincinnati, Ohio"
          class="hero-logo"
          src="{{ asset('img/logo-lockup.png') }}"
        >

        <p class="hero-tagline right">Late nights taste better here.</p>
      </div>

      <div class="hero-ctas">
        <a
          class="btn-outline"
          href="#private-events"
        >Private Events</a>
        <a
          class="btn-outline"
          href="{{ route('menu') }}"
          wire:navigate
        >View the Menu</a>
      </div>
    </div>
  </section>

  {{-- EXPERIENCE — what Bad Rabbit actually is, told through the room itself.
         Rhythm: image-content, content-image, full-bleed image break, image-content —
         same alternating pattern as the outlawsimracing.com reference. --}}
  <div id="experience">
    <div class="experience-panel">
      <img
        alt="The bar at Bad Rabbit, lined with leather stools under crystal chandeliers, bottles stacked behind a gilded rabbit mural."
        class="reveal-img"
        src="{{ asset('img/hero-bar.jpg') }}"
      >
      <div class="experience-copy reveal">
        <p class="tag">The Room</p>
        <h3>A bar built for a crown he never earned.</h3>
        <p>Chandeliers, a harlequin floor, and a bourbon wall deep enough to lose an evening in. Every seat faces the
          rabbit — he's watching, mostly amused.</p>
      </div>
    </div>

    <div class="experience-panel reverse">
      <img
        alt="A rose-painted stairway leading down to Bad Rabbit's red door, marked Down the Rabbit Hole."
        class="reveal-img"
        src="{{ asset('img/stairwell.jpg') }}"
      >
      <div class="experience-copy reveal">
        <p class="tag">The Way In</p>
        <h3>There's no sign out front.</h3>
        <p>You find the door, take the stairs down past roses and a crowned rabbit in sunglasses, and land somewhere
          that doesn't exist upstairs. That's the point.</p>
      </div>
    </div>

    <div class="experience-full">
      <img
        alt="A cocktail glowing under candlelight on a marble table inside Bad Rabbit."
        class="reveal-img"
        src="{{ asset('img/cocktail-13.jpg') }}"
      >
      <p class="cap reveal">Late nights taste better here.</p>
    </div>

    <div class="experience-panel">
      <img
        alt="A plate of deviled eggs plated dark and close on marble, with a lit candle beside it."
        class="reveal-img"
        src="{{ asset('img/culinary-1.jpg') }}"
      >
      <div class="experience-copy reveal">
        <p class="tag">The Kitchen</p>
        <h3>Small plates, built for a long night.</h3>
        <p>Late-kitchen food meant to sit next to a cocktail, not compete with it — deviled eggs, crab poppers, wagyu
          sliders, all shot dark and close, the way the room actually feels.</p>
      </div>
    </div>
  </div>

  <div
    class="harlequin reveal-wipe"
    role="presentation"
  ></div>

  {{-- the four actions. everything else on this site supports these. --}}
  <div class="action-grid">
    @foreach ($actions as $i => $action)
      <a
        @if (str_starts_with($action['href'], '/')) wire:navigate @endif
        @if ($action['placeholder']) data-ph="{{ $action['placeholder'] }}" @endif
        class="action-tile reveal {{ $action['placeholder'] ? 'ph' : '' }}"
        href="{{ $action['href'] }}"
      >
        <span class="num">0{{ $i + 1 }}</span>
        <span class="label">
          {{ $action['label'] }}
          <span class="arrow">&rarr;</span>
        </span>
      </a>
    @endforeach
  </div>

  {{-- FIND US --}}
  <section
    class="section"
    id="find-us"
  >
    <div class="two-col">
      <div>
        <img
          alt="The Bad Rabbit mascot — a rabbit wearing a gold crown, aviator sunglasses, and a burgundy velvet bow tie."
          class="reveal-img"
          src="{{ asset('img/Bad Rabbit Rabbit.png') }}"
        >
      </div>
      <div class="reveal">
        <h2>Find the Rabbit</h2>
        <p class="lede">He doesn't announce himself. Look for the door on Montgomery Rd, and follow the stairs down.
        </p>
        <ul class="detail-list">
          <li
            class="reveal"
            style="--reveal-delay: 0s"
          ><span>Address</span><span>6112 Montgomery Rd, Cincinnati, OH 45213</span></li>
          <li
            class="reveal"
            style="--reveal-delay: 0.08s"
          ><span>Phone</span><span><a href="tel:+15138555467">(513) 855-5467</a></span></li>
          <li
            class="revea"
            style="--reveal-delay: 0.16s;align-items: center;"
          ><span>Hours</span><span
              class="ph"
              data-ph="hours not yet finalized"
              style="text-align: end;"
            >Sunday: 4pm - 11pm<br>
              Monday-Thursday: 4pm - 1am<br>
              Fri & Sat 4pm - 2am</span></li>
          <li
            class="reveal"
            style="--reveal-delay: 0.24s"
          ><span>Age policy</span><span
              class="ph"
              data-ph="age policy copy not yet finalized"
            >21 +</span></li>
        </ul>
      </div>
    </div>
  </section>

  <div
    class="harlequin reveal-wipe"
    role="presentation"
  ></div>

  {{-- PRIVATE EVENTS --}}
  <section
    class="section oxblood-band"
    id="private-events"
  >
    <div class="section-tight reveal">
      <h2>Plan a Private Night</h2>
      <p
        class="lede"
        style="color: var(--cream); opacity: .85;"
      >The room, the bar, the rabbit — to yourselves. Built for the kind of night people don't fully explain the next
        day.</p>
      <livewire:private-event-form />
    </div>
  </section>
</div>
