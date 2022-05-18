<x-app-layout>
  {{-- hero section --}}
  <section name="hero">
    <div class="pl-20">
      <div class="flex items-center justify-between min-h-screen">
        <div>
          <div class="caption">
            <div class="caption-cover"></div>
            <caption>
              <p class="text-9xl uppercase text-base tracking-widest">Key&Board</p>
              <p class="text-4xl uppercase text-base font-extrabold tracking-widest mt-4">Customizable mechanical
                keyboard</p>
            </caption>
          </div>
          @include('components.cta-btn')
        </div>
        <div class="absolute -top-48 -right-32">
          <img class="h-auto w-[1024px]" src="/images/keeb-hero2.png" alt="keeb2">
        </div>
        <div class="absolute bottom-0 -right-16">
          <img class="h-auto w-[896px]" src="/images/keeb-hero1.png" alt="keeb1">
        </div>
      </div>
    </div>
  </section>

  {{-- about us --}}
  <section name="about-us">
    <div class="text-center py-20 bg-slate-100 bg-opacity-30">
      <div class="grid place-items-center">
        <div class="border-b-2 border-b-base">
          <p class="text-3xl uppercase text-base tracking-widest font-extrabold mb-4">About us</p>
        </div>
        <div class="w-5/12 mt-8">
          <p class="text-base">
            We are a custom keyboard designer based in Indonesia that strives to provide accessible and customized keyboard that suits you like a glove. Furthermore, in each of our design we want to declare our design language and character.
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- Kit section --}}
  <section name="spesification">
    <div class="grid place-items-center my-40">
      <div class="flex items-center justify-center">
        <div class="mr-32">
          <img class="h-auto w-96" src="/images/keeb1.png" alt="keeb1">
        </div>
        <div class="w-1/3">
          <div class="border-b-2 border-b-base w-fit">
            <p class="text-3xl uppercase text-base tracking-widest font-extrabold mb-4">Keyboard Kit</p>
          </div>
          <div class="mt-8">
            <div class="text-base">
              <ul>
                <li>Aluminium top & bottom case</li>
                <li>Aluminium or SS external weight</li>
                <li>Aliminium or brass rotary knob matching the external weight</li>
                <li>Hot-swap PCB with USB-C daughterboard</li>
                <li>Polycarbonate plate</li>
                <li>Gaskets</li>
                <li>Screws and accessories</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      {{-- Specification section --}}
      <div class="flex items-center justify-center mt-40">
        <div class="w-1/3">
          <div class="border-b-2 border-b-base w-fit">
            <p class="text-3xl uppercase text-base tracking-widest font-extrabold mb-4">Keyboard Specification</p>
          </div>
          <div class="mt-8">
            <div class="text-base">
              <ul>
                <li>65% with rotary knob layout</li>
                <li>Full isolation gasket mount system</li>
                <li>7.0° typing angle</li>
                <li>18mm front height</li>
                <li>PCB QMK/VIA compatible</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="ml-32">
          <img class="h-auto w-96" src="/images/keeb1.png" alt="keeb1">
        </div>
      </div>
    </div>
  </section>

  {{-- how to section --}}
  <section name="how-to">
    <div class="grid place-items-center">
      <div class="border-b-2 border-b-base w-fit">
        <p class="text-3xl uppercase text-base tracking-widest font-extrabold mb-4">Build your own: How to</p>
      </div>
      <div class="mt-8 flex items-center justify-evenly w-4/5">
        <div class="text-center grid place-items-center">
          <div>
            <p class="text-base font-extrabold">Step 1</p>
          </div>
          <div class="w-3/4">
            <p class="text-base">
              Configure your build using our configurator.
            </p>
          </div>
        </div>
        <div class="text-center grid place-items-center">
          <div>
            <p class="text-base font-extrabold">Step 2</p>
          </div>
          <div class="w-3/4">
            <p class="text-base">
              Add your configured build to the cart and order it.
            </p>
          </div>
        </div>
        <div class="text-center grid place-items-center">
          <div>
            <p class="text-base font-extrabold">Step 3</p>
          </div>
          <div class="w-3/4">
            <p class="text-base">
              Wait and sit still for the fullfillment.
            </p>
          </div>
        </div>
      </div>
      @include('components.cta-btn')
    </div>
  </section>

  {{-- footer --}}
  <footer class="mt-20 bg-dark pt-20">
    <div class="grid place-items-center">
      <div>
        <div>
          <img class="h-auto w-32" src="/images/gold-logo.png" alt="Logo">
        </div>
        <div class="flex items-center justify-evenly mt-8">
          <div>
            <a href="">
              <img class="h-auto w-6" src="/icons/instagram.png" alt="instagram logo">
            </a>
          </div>
          <div>
            <a href="">
              <img class="h-auto w-6" src="/icons/discord.png" alt="discord logo">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="py-8 text-center">
      <p class="text-white">Copyright © 2022 Key&Board</p>
    </div>
  </footer>
</x-app-layout>
