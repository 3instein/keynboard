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
            <p class="underline cursor-pointer">Enter build code</p>
            <div class="mt-2">
              <form action="{{ route('build.load') }}" method="POST">
                @csrf
                <input type="text" name="build-code">
                <button type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>

        {{-- build option --}}
        <div class="mt-8">
          <form action="#" method="POST">
            @csrf
            <button class="bg-base-gold px-6 py-3 uppercase tracking-widest font-bold w-full text-white rounded"
              type="submit">Add to
              cart</button>
            <div class="top mt-8">
              <div class="w-full border-b-[1px] border-black">
                <p class="font-semibold text-xl">Top Case</p>
              </div>
              @foreach ($top_cases as $top_case)
                @if (isset($build) && $build->top_case->id == $top_case->id)
                  <input type="radio" name="top_case" value="{{ $top_case->id }}"> {{ $top_case->name }}
                @else
                  <input type="radio" name="top_case" value="{{ $top_case->id }}"> {{ $top_case->name }}
                @endif
              @endforeach
            </div>

            <div class="bottom mt-8">
              <div class="w-full border-b-[1px] border-black">
                <p class="font-semibold text-xl">Bottom Case</p>
              </div>
              @foreach ($bottom_cases as $bottom_case)
                @if (isset($build) && $build->bottom_case->id == $bottom_case->id)
                  <input type="radio" name="bottom_case" value="{{ $bottom_case->id }}" checked>
                  {{ $bottom_case->name }}
                @else
                  <input type="radio" name="bottom_case" value="{{ $bottom_case->id }}"> {{ $bottom_case->name }}
                @endif
              @endforeach
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
