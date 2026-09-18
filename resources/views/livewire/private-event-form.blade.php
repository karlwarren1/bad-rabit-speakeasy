<div class="oxblood-band">
  @if ($sent)
    <div class="pe-success">
      <p class="voice-line">Message sent. We'll be in touch.</p>
    </div>
  @else
    <form
      class="pe-form"
      novalidate
      wire:submit="submit"
    >
      {{-- honeypot — hidden from real visitors via CSS, left open for bots --}}
      <div
        aria-hidden="true"
        class="pe-hp"
      >
        <label for="company">Company</label>
        <input
          autocomplete="off"
          id="company"
          tabindex="-1"
          type="text"
          wire:model="company"
        >
      </div>

      <div class="pe-row">
        <div class="pe-field">
          <label for="pe-name">Name</label>
          <input
            autocomplete="name"
            id="pe-name"
            type="text"
            wire:model="name"
          >
          @error('name')
            <span class="pe-error">{{ $message }}</span>
          @enderror
        </div>
        <div class="pe-field">
          <label for="pe-email">Email</label>
          <input
            autocomplete="email"
            id="pe-email"
            type="email"
            wire:model="email"
          >
          @error('email')
            <span class="pe-error">{{ $message }}</span>
          @enderror
        </div>
        <div class="pe-field">
          <label for="pe-phone">Phone <span class="pe-optional">(optional)</span></label>
          <input
            autocomplete="tel"
            id="pe-phone"
            type="tel"
            wire:model="phone"
          >
          @error('phone')
            <span class="pe-error">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div class="pe-field">
        <label for="pe-message">Message</label>
        <textarea
          id="pe-message"
          placeholder="Date, headcount, what you're picturing…"
          rows="4"
          wire:model="message"
        ></textarea>
        @error('message')
          <span class="pe-error">{{ $message }}</span>
        @enderror
      </div>

      <button
        class="btn-outline pe-submit"
        type="submit"
        wire:loading.attr="disabled"
        wire:target="submit"
      >
        <span
          wire:loading.remove
          wire:target="submit"
        >Send Inquiry</span>
        <span
          wire:loading
          wire:target="submit"
        >Sending…</span>
      </button>
    </form>
  @endif
</div>
