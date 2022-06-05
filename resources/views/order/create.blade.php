<x-app-layout>
  <div class="min-h-screen grid place-items-center">
    <form action="{{ route('order.store') }}" method="POST">
      @csrf
      <div class="flex">
        <div class="mr-20">
          <div class="mb-6">
            <p class="text-3xl font-bold">Create Account</p>
            <p class="text-gray-500">This information will be save when you confirm your order.</p>
          </div>
          <div class="flex flex-col mb-6">
            <label class="font-semibold mb-1" for="name">Name</label>
            <input class="rounded" type="text" id="name" name="name" />
          </div>
          <div class="flex flex-col mb-6">
            <label class="font-semibold mb-1" for="email">Email</label>
            <input class="rounded" type="email" id="email" name="email">
          </div>
          <div class="flex flex-col mb-6">
            <label class="font-semibold mb-1" for="password">Password</label>
            <input class="rounded" type="password" id="password" name="password">
          </div>
          <div class="flex flex-col mb-6">
            <label class="font-semibold mb-1" for="phone">Phone</label>
            <input class="rounded" type="number" id="phone" name="phone">
          </div>
          <div class="flex flex-col mb-6">
            <label class="font-semibold mb-1" for="address">Address</label>
            <input class="rounded" type="text" id="address" name="address">
          </div>
        </div>
        <div>
          <div class="mb-6">
            <p class="text-3xl font-bold">Your build</p>
            <p class="text-gray-500">This information will be save when you confirm your order.</p>
          </div>
          <div class="flex flex-col mb-6">
            <label class="font-semibold mb-1" for="build-code">Build Code</label>
            <input class="rounded" type="text" id="build-code" name="build-code" value="{{ $build_code }}" readonly>
          </div>
          <div class="sketchfab-embed-wrapper mb-6">
            <div class="sketchfab-embed-wrapper">
              <iframe class="w-full rounded" title="black-black" frameborder="0" allowfullscreen
                mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
                xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share height="256"
                src="{{ request()->input('build-combination') }}">
              </iframe>
            </div>
          </div>
          <div class="text-right">
            <button class="bg-base-gold px-10 py-3 uppercase tracking-widest font-bold text-white rounded"
              type="submit">Finish order</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</x-app-layout>
