<div>
    <div class="notes-banner">Internal build notes — remove this route before launch</div>

    <div class="notes-wrap">
        <h1>Bad Rabbit — build notes</h1>
        <p>Laravel 11 + Livewire 3 + Bootstrap 5 (CDN, utilities only). Single dark theme, brand tokens in <code>public/css/brand.css</code>.</p>

        <h2>Color tokens</h2>
        <table class="token-table">
            <tr><th>Token</th><th>Hex</th><th>Role</th></tr>
            <tr><td><span class="swatch" style="background:#0B0908"></span>Black</td><td>#0B0908</td><td>Warm black ground — never blue</td></tr>
            <tr><td><span class="swatch" style="background:#12100E"></span>Coal</td><td>#12100E</td><td>Raised surface</td></tr>
            <tr><td><span class="swatch" style="background:#1C1713"></span>Tobacco</td><td>#1C1713</td><td>Card / well</td></tr>
            <tr><td><span class="swatch" style="background:#3A2C21"></span>Walnut</td><td>#3A2C21</td><td>Wood, warm hairlines</td></tr>
            <tr><td><span class="swatch" style="background:#7A1F27"></span>Oxblood</td><td>#7A1F27</td><td>The bold move — full bands</td></tr>
            <tr><td><span class="swatch" style="background:#C9982B"></span>Dijon</td><td>#C9982B</td><td>Flashes only</td></tr>
            <tr><td><span class="swatch" style="background:#9A7B4F"></span>Bronze</td><td>#9A7B4F</td><td>Kickers, metal</td></tr>
            <tr><td><span class="swatch" style="background:#E9E0CE"></span>Cream</td><td>#E9E0CE</td><td>Primary text</td></tr>
            <tr><td><span class="swatch" style="background:#8C8177"></span>Ash</td><td>#8C8177</td><td>Secondary text</td></tr>
        </table>

        <h2>Type</h2>
        <ul>
            <li>Archivo Black (900) — wordmark / display, oversized</li>
            <li>Archivo (400/500) — body and menu copy, same family as the wordmark</li>
            <li>Fraunces italic — brand voice lines only, capped at two per page</li>
        </ul>

        <h2>Routes</h2>
        <ul>
            <li><code>GET /</code> → <code>App\Livewire\Home</code></li>
            <li><code>GET /menu</code> → <code>App\Livewire\Menu</code></li>
            <li><code>GET /build-notes</code> → this page. <span class="status-todo">Remove before launch.</span></li>
        </ul>

        <h2>Still needed</h2>
        <ul>
            @foreach ($stillNeeded as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

        <h2>Already real / confirmed</h2>
        <ul>
            <li class="status-ok">The Password — full recipe spec</li>
            <li class="status-ok">The four Zero Proof names and specs</li>
            <li class="status-ok">Address — 6112 Montgomery Rd, Cincinnati, OH 45213</li>
            <li class="status-ok">Phone — (513) 855-5467</li>
            <li class="status-ok">Libations and Provisions names/specs (Bad Rabbit Spiced Nuts removed per Sept 2026 note)</li>
            <li class="status-ok">Bourbon, rye, American whiskey, and scotch bottle lists</li>
        </ul>

        <h2>Asset list</h2>
        <ul>
            <li><code>img/hero-clean.jpg</code> — home hero background. This is the client-supplied "text removed" plate (no nav, wordmark, taglines, address, or buttons baked in) — the actual photo is shown in full via <code>object-fit: contain</code> inside a frame locked to its own 853:1280 aspect ratio, so nothing is ever cropped regardless of viewport.</li>
            <li><code>img/logo-lockup.png</code> — the real logo artwork (crescent + "Bad Rabbit" wordmark + "Bourbon Speakeasy / Cincinnati, Ohio"), cropped from the client comp below its nav row so no nav text could bleed in, with a soft elliptical alpha falloff so it sits on any dark background without a visible edge. Still not a vector — see below.</li>
            <li><code>img/hero-bar.jpg</code> — "The Room" experience panel, from "Bad Rabbit Bar Rendering.png"</li>
            <li><code>img/stairwell.jpg</code> — "The Way In" experience panel and Find the Rabbit section, from "Bad Rabbit Stairwell.png"</li>
            <li><code>img/culinary-1.jpg</code> — "The Kitchen" experience panel</li>
            <li><code>img/badge.png</code> — circular wordmark badge, background keyed to transparent, not currently placed anywhere</li>
            <li><code>img/cocktail-*.jpg</code>, <code>img/mocktail-*.jpg</code> — unlabeled gallery imagery on the menu page only, not paired to individual drinks</li>
            <li><code>img/culinary-3.jpg</code>, <code>img/culinary-5.jpg</code> — unlabeled gallery imagery under Provisions</li>
            <li>Not used: "BAD RABBIT TSHIRT LOGO (8.28).png" (merch art, not a web asset), remaining 11 C_M renderings (kept in the source zip, not shown — waiting on Karl's naming pass before wider use)</li>
        </ul>

        <h2>Still pending real artwork</h2>
        <ul>
            <li class="status-todo">Vector wordmark — <code>logo-lockup.png</code> is a raster crop from the client's comp, feathered to blend anywhere. It'll hold up fine at hero size but shouldn't be scaled much larger, and a vector would be needed for things like a favicon.</li>
        </ul>

        <h2>Placeholder toggle</h2>
        <p>"Highlight placeholders" in the top bar adds a dashed dijon outline + label to every element on the site carrying a <code>data-ph</code> attribute. State persists in <code>localStorage</code> across page loads.</p>
    </div>
</div>
