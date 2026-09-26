<div>
  <nav
    aria-label="Menu sections"
    class="menu-nav"
  >
    <a href="#libations">Libations</a>
    <a href="#provisions">Provisions</a>
    <a href="#spirits">Bourbons &amp; Whiskeys</a>
    <a href="#zero-proof">Zero Proof</a>
  </nav>

  <div class="menu-hero">
    <h1>The Menu</h1>
    <p class="voice-line">Late nights taste better here.</p>
  </div>

  {{-- LIBATIONS --}}
  <section
    class="menu-category"
    id="libations"
  >
    <h3>Libations</h3>
    <div class="drink-grid">
      @foreach ($cocktails as $drink)
        <div class="menu-item">
          <img
            alt="A Bad Rabbit cocktail, shot dark and close on marble."
            class="reveal-img"
            src="{{ asset('img/' . $drink['img']) }}"
          >
          <div class="menu-item-body reveal">
            <div class="row">
              <span class="name">{{ $drink['name'] }} <br><i
                  style="font-size: 12px;">{{ $drink['aka'] ?? '' }}</i></span>
              {{-- <span
                class="price ph"
                data-ph="price not in handoff"
              >$—</span> --}}
            </div>
            <p class="ingredients">{{ $drink['spec'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  {{-- ZERO PROOF --}}
  <section
    class="menu-category"
    id="zero-proof"
  >
    <h3>Mocktails</h3>
    <p
      class="sub"
      style="color: rgba(233,224,206,.7);"
    >Curious libations. No alibi required.</p>
    <div class="drink-grid">
      @foreach ($zeroProof as $drink)
        <div class="menu-item">
          <img
            alt="A Bad Rabbit zero-proof drink, shot dark and close on marble."
            class="reveal-img"
            src="{{ asset('img/' . $drink['img']) }}"
          >
          <div class="menu-item-body reveal">
            <div class="row">
              <span class="name">{{ $drink['name'] }}</span>
              {{-- <span
                class="price ph"
                data-ph="price not in handoff"
              >$—</span> --}}
            </div>
            <p
              class="ingredients"
              style="color: rgba(233,224,206,.65);"
            >{{ $drink['spec'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
    <p
      class="voice-line"
      style="margin-top: 2rem;"
    >Good people drink bad things. Sometimes without the booze.</p>
  </section>

  {{-- PROVISIONS --}}
  <section
    class="menu-category"
    id="provisions"
  >
    <h3>PROVISIONS</h3>
    <p class="sub">Small plates for late nights and good company.</p>
    <div class="drink-grid">
      @foreach ($provisions as $plate)
        <div class="menu-item">
          <img
            alt="A Bad Rabbit small plate, shot dark and close on marble."
            class="reveal-img"
            src="{{ asset('img/' . $plate['img']) }}"
          >
          <div class="menu-item-body reveal">
            <div class="row">
              <span class="name">{{ str($plate['name'])->title }}</span>
              {{-- <span
                class="price ph"
                data-ph="price not in handoff"
              >$—</span> --}}
            </div>
            <p class="ingredients">{{ $plate['spec'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
    <p
      class="gallery-note ph"
      data-ph="a separate snack menu is still needed per the handoff brief"
      style="text-align:left; margin-top:1.5rem;"
    >
      A separate bar snack menu is still in development.
    </p>
  </section>

  {{-- BOURBONS & WHISKEYS --}}
  <section
    class="menu-category"
    id="spirits"
  >
    <h3>Bourbons &amp; Whiskeys &amp; Beer</h3>
    <p class="sub">Rare finds. Bold pours. No regrets. <span
        class="ph"
        data-ph="pour sizes/pricing (the bourbon pour list) not in handoff"
      >Pour pricing available at the bar.</span></p>
    <div class="spirit-columns">
      @foreach ($spirits as $group => $list)
        <div>
          <h4>
            {{ $group }}
            @if ($group == 'WINE')
              <br><i style="font-size: 12px;">Charles Smith Collection</i>
            @endif
          </h4>

          <ul>
            @foreach ($list as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>
  </section>

  {{-- BOURBONS & WHISKEYS --}}
  <section
    class="menu-category"
    id="spirits"
  >
    <h3>BOURBON FLIGHTS</h3>
    <p class="sub">3 ea. 1 oz. pours</p>
    <div class="spirit-columns">
      @foreach ($bourbonFlights as $group => $list)
        <div>
          <h4>{{ $group }}</h4>
          <ul>
            @foreach ($list as $item)
              <li>{{ $item }}</li>
              @if ($group == 'RYE NOT')
                <i style="font-size: 12px;">Each selection is a rye whiskey</i>
              @endif
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>
  </section>

  {{-- COFFEE COCKTAILS --}}
  <section
    class="menu-category"
    id="spirits"
  >
    <h3>COFFEE COCKTAILS</h3>
    <div class="spirit-columns">
      @foreach ($coffeeCocktails as $group => $list)
        <div>
          <h4>{{ $group }}</h4>
          <ul>
            @foreach ($list as $item)
              <li>{{ $item }}</li>
              @if ($group == 'AFTER MIDNIGHT')
                <i style="font-size: 12px;">AKA “Te Hey Michelle”
                </i>
              @endif
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>
  </section>

  {{-- ABOUT US --}}
  <section
    class="section about-us"
    id="about-us"
  >
    <div
      class="about-flourish"
      role="presentation"
    ><span></span><span class="about-dot"></span><span></span></div>
    <h2 class="about-heading">About Us</h2>
    <div class="about-copy">
      <p>Bad Rabbit is a bourbon-forward speakeasy tucked beneath the streets of Cincinnati's Pleasant Ridge
        neighborhood. Hidden behind an unassuming entrance and down a rose-lined stairway, Bad Rabbit was created for
        late nights, good drinks, and even better company.</p>
      <p>Inside, crystal chandeliers, a harlequin floor, and an expansive bourbon collection set the scene for an
        intimate experience centered around thoughtfully crafted cocktails, an extensive whiskey selection, and small
        plates designed for nights as long as you want them.</p>
      <p>A little mysterious and intentionally unexpected, Bad Rabbit is the kind of place you have to know to
        find&mdash;and once you're in, you'll want to stay awhile.</p>
    </div>
    <p class="about-tagline">Good people drink bad things.</p>
  </section>
</div>
