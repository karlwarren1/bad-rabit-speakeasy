<div>
  <nav
    aria-label="Menu sections"
    class="menu-nav"
    style=" margin-top: 2rem"
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
              <span class="name">{{ $drink['name'] }}</span>
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
          <h4>{{ $group }}</h4>
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
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>
  </section>
</div>
