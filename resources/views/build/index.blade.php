<x-app-layout>
  <div class="mt-20 mx-20">
    <div>
      <span class="flex items-center">
        <a class="font-bold" href="/">Home</a>
        <p class="mx-2">/</p>
        <a class="text-gray-400 font-bold" href="{{ route('build.index') }}">Build Configuration</a>
      </span>
    </div>
    <div class="flex mt-4">
      <div>
        @include('components.keyboard-frame')
      </div>
      <div class="ml-8 w-full">
        <div>
          <p class="font-bold text-5xl">Key&Board Board65</p>
          <div class="mt-2 w-fit">
            <p class="underline cursor-pointer build-code">Enter build code</p>
            <div class="mt-2 form-build-code hidden">
              <form action="{{ route('build.load') }}" method="POST">
                @csrf
                <input type="text" name="build-code">
                <button class="border-[1.5px] border-base-gold py-2 px-3 text-base-gold font-bold"
                  type="submit">Submit</button>
              </form>
            </div>
          </div>
          <p class="text-3xl font-bold mt-8">$100.00</p>
          <p class="font-semibold text-sm mt-1">Estimated delivery: December 2050</p>
        </div>

        {{-- build option --}}
        <div class="mt-4">
          <form action="#" method="POST">
            @csrf
            <button class="bg-base-gold px-6 py-3 uppercase tracking-widest font-bold w-full text-white rounded"
              type="submit">Add to
              bag</button>

            {{-- top case --}}
            <div class="top mt-8">
              <div class="w-full border-b-[1px] border-black mb-2 flex justify-between items-center">
                <p class="font-semibold text-xl">Top Case</p>
                <p>Black - $100</p>
              </div>
              <div class="grid grid-cols-3 gap-x-12">
                @foreach ($top_cases as $top_case)
                  @if (isset($build) && $build->top_case->id == $top_case->id)
                    <div class="mb-2">
                      <input class="top-case checked:text-base-gold hover:border-base-gold checked:ring-transparent"
                        type="radio" name="top_case" value="{{ $top_case->id }}" data-="{{ $top_case->name }}"
                        id="top-case-{{ $top_case->name }}" />
                      <label for="top-case-{{ $top_case->name }}">{{ $top_case->name }}</label>
                    </div>
                  @else
                    <div class="mb-2">
                      <input class="top-case checked:text-base-gold hover:border-base-gold checked:ring-transparent"
                        type="radio" name="top_case" value="{{ $top_case->id }}" data-="{{ $top_case->name }}"
                        id="top-case-{{ $top_case->name }}"
                        @if ($top_case->name == 'Black') {{ 'checked' }} @endif />
                      <label class="cursor-pointer hover:text-base-gold"
                        for="top-case-{{ $top_case->name }}">{{ $top_case->name }}</label>
                    </div>
                  @endif
                @endforeach
              </div>
            </div>

            {{-- bottom case --}}
            <div class="bottom mt-8">
              <div class="w-full border-b-[1px] border-black mb-2 flex justify-between items-center">
                <p class="font-semibold text-xl">Bottom Case</p>
                <p>Black - $100</p>
              </div>
              <div class="grid grid-cols-3 gap-x-12">
                @foreach ($bottom_cases as $bottom_case)
                  @if (isset($build) && $build->bottom_case->id == $bottom_case->id)
                    <div class="mb-2">
                      <input class="bottom-case checked:text-base-gold hover:border-base-gold checked:ring-transparent"
                        type="radio" name="bottom_case" value="{{ $bottom_case->id }}"
                        data-="{{ $bottom_case->name }}" id="bottom-case-{{ $bottom_case->name }}" />
                      <label class="cursor-pointer hover:text-base-gold"
                        for="bottom-case-{{ $bottom_case->name }}">{{ $bottom_case->name }}</label>
                    </div>
                  @else
                    <div class="mb-2">
                      <input class="bottom-case checked:text-base-gold hover:border-base-gold checked:ring-transparent"
                        type="radio" name="bottom_case" value="{{ $bottom_case->id }}"
                        data-="{{ $bottom_case->name }}" id="bottom-case-{{ $bottom_case->name }}"
                        @if ($bottom_case->name == 'Black') {{ 'checked' }} @endif />
                      <label class="cursor-pointer hover:text-base-gold"
                        for="bottom-case-{{ $bottom_case->name }}">{{ $bottom_case->name }}</label>
                    </div>
                  @endif
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
    </div>
  </div>
</x-app-layout>
