<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta
      content="width=device-width, initial-scale=1"
      name="viewport"
    >
    <title>{{ $title ?? 'Bad Rabbit' }}</title>

    <link
      href="https://fonts.googleapis.com"
      rel="preconnect"
    >
    <link
      crossorigin
      href="https://fonts.gstatic.com"
      rel="preconnect"
    >
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700;900&family=Fraunces:ital,opsz@1,9..144&display=swap"
      rel="stylesheet"
    >

    {{-- Bootstrap 5 via CDN: grid + utilities only. Brand tokens in brand.css win on everything visual. --}}
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    >
    <link
      href="{{ asset('css/brand.css') }}"
      rel="stylesheet"
    >

    @livewireStyles
  </head>

  <body>

    {{-- brand watermark: the logo, faint and fixed, behind every page's
         content. Stays put while the page scrolls; each section's own
         background paints over it, so it only shows through in the gaps. --}}
    <div
      aria-hidden="true"
      class="brand-watermark"
    ></div>

    {{-- grain overlay: texture + age, no fake parchment --}}
    <svg
      class="grain"
      xmlns="http://www.w3.org/2000/svg"
    >
      <filter id="noise">
        <feTurbulence
          baseFrequency="0.85"
          numOctaves="2"
          stitchTiles="stitch"
          type="fractalNoise"
        />
      </filter>
      <rect
        filter="url(#noise)"
        height="100%"
        width="100%"
      />
    </svg>

    <div
      aria-hidden="true"
      class="scroll-progress"
      id="scrollProgress"
    ></div>

    <header class="topbar">
      <nav
        aria-label="Primary"
        class="nav-group"
      >
        <a
          href="{{ route('menu') }}"
          wire:navigate
        >Menu</a>
        <a
          href="{{ route('home') }}#experience"
          wire:navigate
        >Experience</a>
      </nav>
      <div class="topbar-right">
        <nav
          aria-label="Secondary"
          class="nav-group"
        >
          <a
            href="{{ route('home') }}#private-events"
            wire:navigate
          >Private Events</a>
          <a
            href="{{ route('home') }}#find-us"
            wire:navigate
          >Find Us</a>
        </nav>
        <livewire:index-overlay />
      </div>
    </header>

    <main>
      {{ $slot }}
    </main>

    <footer>
      <div>
        6112 Montgomery Rd &middot; Cincinnati, Ohio 45213<br>
        <a href="tel:+15138555467">(513) 855-5467</a>
      </div>
      <div>
        <a
          class="ph"
          data-ph="Instagram handle not in handoff"
          href="#"
        >Instagram</a> &middot;
        <a
          class="ph"
          data-ph="domain is a stand-in: badrabbitcincy.com"
          href="#"
        >badrabbitcincy.com</a>
      </div>
      <div>
        <a
          class="notes-link"
          href="{{ route('build-notes') }}"
        >Build notes ↴</a>
      </div>
    </footer>

    @livewireScripts
    <script>
      // Placeholder highlighting — persists across page loads via localStorage.
      // The toggle button lives inside the index overlay (only in the DOM while
      // it's open), so this uses delegation instead of grabbing the node once.
      (function() {
        const KEY = 'br-show-ph';
        const html = document.documentElement;

        function syncButton() {
          const btn = document.getElementById('phToggle');
          if (!btn) return;
          const on = html.classList.contains('show-ph');
          btn.classList.toggle('active', on);
          btn.textContent = on ? 'Placeholders: on' : 'Highlight placeholders';
        }

        function applyStored() {
          html.classList.toggle('show-ph', localStorage.getItem(KEY) === '1');
          syncButton();
        }

        document.addEventListener('click', function(e) {
          if (!e.target.closest('#phToggle')) return;
          const next = !html.classList.contains('show-ph');
          localStorage.setItem(KEY, next ? '1' : '0');
          html.classList.toggle('show-ph', next);
          syncButton();
        });

        applyStored();
        document.addEventListener('livewire:navigated', applyStored);
        document.addEventListener('livewire:updated', syncButton);
      })();

      // Scroll vibe: reveal-on-scroll, a thin scroll progress line, and a
      // gentle parallax drift on the home hero. Re-inits on Livewire's
      // SPA-style navigation since it swaps the DOM without a full reload.
      (function() {
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        let observer = null;

        function initReveal() {
          if (observer) observer.disconnect();

          const targets = document.querySelectorAll('.reveal, .reveal-img, .reveal-wipe');
          if (!targets.length) return;

          if (reduceMotion) {
            targets.forEach(el => el.classList.add('is-visible'));
            return;
          }

          observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
              }
            });
          }, {
            threshold: 0.15,
            rootMargin: '0px 0px -8% 0px'
          });

          targets.forEach((el, i) => {
            const delay = el.dataset.delay || (el.closest('.action-grid') ? (i % 4) * 0.08 + 's' : null);
            if (delay) el.style.setProperty('--reveal-delay', delay);
            observer.observe(el);
          });
        }

        function onScroll() {
          const doc = document.documentElement;
          const max = doc.scrollHeight - doc.clientHeight;
          const progress = max > 0 ? Math.min(1, doc.scrollTop / max) : 0;
          const bar = document.getElementById('scrollProgress');
          if (bar) bar.style.transform = `scaleX(${progress})`;
        }

        let ticking = false;
        document.addEventListener('scroll', function() {
          if (ticking) return;
          ticking = true;
          requestAnimationFrame(function() {
            onScroll();
            ticking = false;
          });
        }, {
          passive: true
        });

        initReveal();
        onScroll();
        document.addEventListener('livewire:navigated', function() {
          initReveal();
          onScroll();
        });
      })();
    </script>
  </body>

</html>
