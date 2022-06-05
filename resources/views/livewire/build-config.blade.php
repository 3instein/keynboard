<div>
  <div class="ml-8 w-full">
    <div x-data="{ open: false }">
      <p class="font-bold text-5xl">Key&Board Board65</p>
      <div class="mt-2 w-fit">
        <p class="underline cursor-pointer build-code" @click="open = !open">Enter build code</p>
        <div class="mt-2 form-build-code" x-show="open">
          <form wire:submit.prevent="getBuild">
            <input type="text" wire:model.defer="code">
            <button class="border-[1.5px] border-base-gold py-2 px-3 text-base-gold font-bold">
              Submit
            </button>
          </form>
        </div>
      </div>
      <p class="text-3xl font-bold mt-8">${{ $total }}.00</p>
      <p class="font-semibold text-sm mt-1">Estimated delivery: December 2050</p>
    </div>

    {{-- build option --}}
    <div class="mt-4">
      <form action="#" method="POST">
        @csrf
        <button class="bg-base-gold px-6 py-3 uppercase tracking-widest font-bold w-full text-white rounded"
          type="submit">Order now</button>

        {{-- top case --}}
        <div class="top mt-8">
          <div class="w-full border-b-[1px] border-black mb-2 flex justify-between items-center">
            <p class="font-semibold text-xl">Top Case</p>
            <p>{{ $top_case }}</p>
          </div>
          <div class="grid grid-cols-3 gap-x-12">
            @foreach ($this->top_cases as $top_case)
              <div class="mb-2">
                <input class="top-case checked:text-base-gold hover:border-base-gold checked:ring-transparent"
                  type="radio" name="top_case" value="{{ $top_case->id }}" data-="{{ $top_case->name }}"
                  id="top-case-{{ $top_case->id }}" wire:model="topCase" />
                <label class="cursor-pointer hover:text-base-gold"
                  for="top-case-{{ $top_case->id }}">{{ $top_case->name }}</label>
              </div>
            @endforeach
          </div>
        </div>

        {{-- bottom case --}}
        <div class="bottom mt-8">
          <div class="w-full border-b-[1px] border-black mb-2 flex justify-between items-center">
            <p class="font-semibold text-xl">Bottom Case</p>
            <p>{{ $bottom_case }}</p>
          </div>
          <div class="grid grid-cols-3 gap-x-12">
            @foreach ($this->bottom_cases as $bottom_case)
              <div class="mb-2">
                <input class="bottom-case checked:text-base-gold hover:border-base-gold checked:ring-transparent"
                  type="radio" name="bottom_case" value="{{ $bottom_case->id }}" data-="{{ $bottom_case->name }}"
                  id="bottom-case-{{ $bottom_case->id }}" wire:model="bottomCase" />
                <label class="cursor-pointer hover:text-base-gold" for="bottom-case-{{ $bottom_case->id }}"
                  wire:model="bottomCase">
                  {{ $bottom_case->name }}
                </label>
              </div>
            @endforeach
          </div>
        </div>

        {{-- <div class="layout mt-8">
                  <div class="w-full border-b-[1px] border-black">
                    <p class="font-semibold text-xl">Keyboard Layout</p>
                  </div>
                  @foreach ($layouts as $layout)
                    @if (isset($build) && $build->layout->id == $layout->id)
                      <input type="radio" name="layout" value="{{ $layout->id }}" checked> {{ $layout->name }}
                    @else
                      <input type="radio" name="layout" value="{{ $layout->id }}"> {{ $layout->name }}
                    @endif
                  @endforeach
                </div> --}}
      </form>
    </div>
  </div>
  <script>
    document.addEventListener('livewire:load', () => {
      const keebEmbed = {
        'black-black': 'https://sketchfab.com/models/f9b3bb88c61940d9ab65bf90c52730cc/embed?autostart=1&camera=0',
        'black-white': 'https://sketchfab.com/models/208db99be9664cccaa80cba18b62a157/embed?autostart=1&camera=0',
        'white-black': 'https://sketchfab.com/models/036e8d22677f4b748ec47bdb384d2d72/embed?autostart=1&camera=0',
        'white-white': 'https://sketchfab.com/models/6cb9185a99fa463d8b9bc72acb7d2af7/embed?autostart=1&camera=0',
      }

      const buildCode = document.querySelector('.build-code');
      const formBuildCode = document.querySelector('.form-build-code');
      const sketfabEmbedWrapper = document.querySelector('.sketchfab-embed-wrapper');
      const topCase = document.querySelectorAll('.top-case');
      const bottomCase = document.querySelectorAll('.bottom-case');

      // keeb model
      if (sketfabEmbedWrapper) {
        // top case bottom case
        var topCaseColor = 'black';
        var bottomCaseColor = 'black';
        var code = topCaseColor + '-' + bottomCaseColor;

        @this.on('topCaseChanged', topCaseId => {
          topCaseColor = document.getElementById('top-case-' + topCaseId).getAttribute('data-').split(' ')[0]
            .toLowerCase();
          code = topCaseColor + '-' + bottomCaseColor;
          sketfabEmbedWrapper.querySelector('iframe').src = keebEmbed[code];
        });

        @this.on('bottomCaseChanged', bottomCaseId => {
          bottomCaseColor = document.getElementById('bottom-case-' + bottomCaseId).getAttribute('data-').split(
            ' ')[0].toLowerCase();
          code = topCaseColor + '-' + bottomCaseColor;
          sketfabEmbedWrapper.querySelector('iframe').src = keebEmbed[code];
        });
      }
    })
  </script>
</div>
