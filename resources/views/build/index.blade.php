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
      @livewire('build-config')
    </div>
  </div>
</x-app-layout>
