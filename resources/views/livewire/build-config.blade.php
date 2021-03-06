<div>
  <div class="ml-8 w-full">
    <div x-data="{ open: false }">
      <p class="font-bold text-5xl">Board65</p>
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

    </div>

    {{-- build option --}}
    <div>
      <form action="{{ route('order.create') }}" method="POST">
        @csrf

        {{-- layout --}}
        <div class="top mt-8">
          <div class="w-full border-b-[1px] border-black mb-2 flex justify-between items-center">
            <p class="font-semibold text-xl">Layout</p>
            <p>No cost</p>
          </div>
          <div class="grid grid-cols-3 gap-x-12">
            @foreach ($this->layouts as $layout)
              <div class="mb-2">
                <input class="layout checked:text-base-gold hover:border-base-gold checked:ring-transparent"
                  type="radio" name="layout" value="{{ $layout->id }}" data-="{{ $layout->name }}"
                  id="layout-{{ $layout->id }}" wire:model="layout" />
                <label class="cursor-pointer hover:text-base-gold"
                  for="layout-{{ $layout->id }}">{{ $layout->name }}</label>
              </div>
            @endforeach
          </div>
        </div>

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

        {{-- plate --}}
        <div class="top mt-8">
          <div class="w-full border-b-[1px] border-black mb-2 flex justify-between items-center">
            <p class="font-semibold text-xl">Plate</p>
            <p>{{ $plate_ }}</p>
          </div>
          <div class="grid grid-cols-3 gap-x-12">
            @foreach ($this->plates as $plate)
              <div class="mb-2">
                <input class="plate checked:text-base-gold hover:border-base-gold checked:ring-transparent" type="radio"
                  name="plate" value="{{ $plate->id }}" data-="{{ $plate->name }}"
                  id="plate-{{ $plate->id }}" wire:model="plate" />
                <label class="cursor-pointer hover:text-base-gold"
                  for="plate-{{ $plate->id }}">{{ $plate->name }}</label>
              </div>
            @endforeach
          </div>
        </div>

        {{-- pcb --}}
        <div class="top mt-8">
          <div class="w-full border-b-[1px] border-black mb-2 flex justify-between items-center">
            <p class="font-semibold text-xl">PCB</p>
            <p>{{ $pcb_ }}</p>
          </div>
          <div class="grid grid-cols-3 gap-x-12">
            @foreach ($this->pcbs as $pcb)
              <div class="mb-2">
                <input class="pcb checked:text-base-gold hover:border-base-gold checked:ring-transparent" type="radio"
                  name="pcb" value="{{ $pcb->id }}" data-="{{ $pcb->name }}" id="pcb-{{ $pcb->id }}"
                  wire:model="pcb" />
                <label class="cursor-pointer hover:text-base-gold"
                  for="pcb-{{ $pcb->id }}">{{ $pcb->name }}</label>
              </div>
            @endforeach
          </div>
        </div>
        <p class="text-3xl font-bold mt-6">Rp. {{ number_format($total, 0, ',', '.') }}</p>
        <p class="font-semibold text-sm mt-1 mb-4">Estimated delivery: December 2022</p>
        <input type="hidden" name="build-combination" id="build-combination"
          value="https://sketchfab.com/models/f9b3bb88c61940d9ab65bf90c52730cc/embed?autostart=1&camera=0" />
        <input type="hidden" name="total" value="{{ $total }}" />
        <button class="bg-base-gold px-6 py-3 uppercase tracking-widest font-bold w-full text-white rounded"
          type="submit">Order now</button>
      </form>
    </div>
  </div>
  <script>
    document.addEventListener('livewire:load', () => {
      const keebEmbed = {
        'black-black': 'https://sketchfab.com/models/f9b3bb88c61940d9ab65bf90c52730cc/embed?autostart=1&camera=0',
        'black-white': 'https://sketchfab.com/models/208db99be9664cccaa80cba18b62a157/embed?autostart=1&camera=0',
        'black-navy': 'https://sketchfab.com/models/96d7a97a4c7749c9867b0416a65ca041/embed?autostart=1&camera=0',
        'black-silver': 'https://sketchfab.com/models/a8609e88b6654c48a56769cce7a8254d/embed?autostart=1&camera=0',
        'white-black': 'https://sketchfab.com/models/036e8d22677f4b748ec47bdb384d2d72/embed?autostart=1&camera=0',
        'white-white': 'https://sketchfab.com/models/6cb9185a99fa463d8b9bc72acb7d2af7/embed?autostart=1&camera=0',
        'white-navy': 'https://sketchfab.com/models/29731036ced5484d8c7e5975d9fe1cc6/embed?autostart=1&camera=0',
        'white-silver': 'https://sketchfab.com/models/c7ced9db65a8413c98f8f83452b45b52/embed?autostart=1&camera=0',
        'navy-black': 'https://sketchfab.com/models/e1a4e54fb3144f1dbb30d7ab7e240bfe/embed?autostart=1&camera=0',
        'navy-white': 'https://sketchfab.com/models/dbe64bbd92514c0f872be3234a9aedf8/embed?autostart=1&camera=0',
        'navy-navy': 'https://sketchfab.com/models/d6eb1ad4570a4750b94bdfc244db18b7/embed?autostart=1&camera=0',
        'navy-silver': 'https://sketchfab.com/models/2cecbfa3c7f74c16ba7b0dff4da0f1f6/embed?autostart=1&camera=0',
        'silver-black': 'https://sketchfab.com/models/7478ceec4c0047cbada886477c73e3ea/embed?autostart=1&camera=0',
        'silver-white': 'https://sketchfab.com/models/f50f43fbcc9241ab8c13f29c5ee3aee4/embed?autostart=1&camera=0',
        'silver-navy': 'https://sketchfab.com/models/700bc870c07a49ea82464f667eb50f16/embed?autostart=1&camera=0',
        'silver-silver': 'https://sketchfab.com/models/5b940af8149945548076dbe37b493cdd/embed?autostart=1&camera=0',
      }

      const buildCode = document.querySelector('.build-code');
      const formBuildCode = document.querySelector('.form-build-code');
      const sketfabEmbedWrapper = document.querySelector('.sketchfab-embed-wrapper');
      const layout = document.querySelector('.layout');
      const topCase = document.querySelectorAll('.top-case');
      const bottomCase = document.querySelectorAll('.bottom-case');
      const plate = document.querySelectorAll('.plate');
      const pcb = document.querySelectorAll('.pcb');
      const buildCombine = document.querySelector('#build-combination');

      // keeb model
      if (sketfabEmbedWrapper) {
        // top case bottom case
        var topCaseColor = 'black';
        var bottomCaseColor = 'black';
        var code = topCaseColor + '-' + bottomCaseColor;

        @this.on('layoutChanged', layoutId => {
          buildCombine.value = keebEmbed[code];
        });

        @this.on('topCaseChanged', topCaseId => {
          topCaseColor = document.getElementById('top-case-' + topCaseId).getAttribute('data-').split(' ')[0]
            .toLowerCase();
          code = topCaseColor + '-' + bottomCaseColor;
          sketfabEmbedWrapper.querySelector('iframe').src = keebEmbed[code];
          buildCombine.value = keebEmbed[code];
        });

        @this.on('bottomCaseChanged', bottomCaseId => {
          bottomCaseColor = document.getElementById('bottom-case-' + bottomCaseId).getAttribute('data-').split(
            ' ')[0].toLowerCase();
          code = topCaseColor + '-' + bottomCaseColor;
          sketfabEmbedWrapper.querySelector('iframe').src = keebEmbed[code];
          buildCombine.value = keebEmbed[code];
        });

        @this.on('plateChanged', plateId => {
          buildCombine.value = keebEmbed[code];
        });

        @this.on('pcbChanged', pcbId => {
          buildCombine.value = keebEmbed[code];
        });
      }
    })
  </script>
</div>
