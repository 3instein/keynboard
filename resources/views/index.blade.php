<x-app-layout>
  {{-- hero section --}}
  <section name="hero">
    <div class="pl-20">
      <div class="flex items-center justify-between min-h-screen">
        <div>
          <div>
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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis urna eu
            semper dictum. Aenean
            feugiat maximus nisl, id condimentum tellus sodales sit amet. Integer in molestie sapien, ut pharetra lorem.
            Pellentesque laoreet ipsum nec vulputate porttitor. Aliquam ut molestie ex, eget vehicula lectus. Donec
            condimentum risus ut faucibus molestie. Orci varius natoque penatibus et magnis dis parturient montes,
            nascetur ridiculus mus. Vestibulum a elit at nisl consectetur rutrum. Etiam cursus lobortis odio porttitor
            placerat. Pellentesque sed vulputate arcu. Ut condimentum sed enim pharetra iaculis. Fusce finibus nulla
            nulla, ac ultrices augue egestas nec. Aenean sollicitudin justo ac dolor efficitur ullamcorper.
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- spesification section --}}
  <section name="spesification">
    <div class="grid place-items-center my-40">
      <div class="flex items-center justify-center">
        <div class="mr-32">
          <img class="h-auto w-96" src="/images/keeb1.png" alt="keeb1">
        </div>
        <div class="w-1/3">
          <div class="border-b-2 border-b-base w-fit">
            <p class="text-3xl uppercase text-base tracking-widest font-extrabold mb-4">Keyboard spesification</p>
          </div>
          <div class="mt-8">
            <p class="text-base">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis urna eu
              semper dictum. Aenean
              feugiat maximus nisl, id condimentum tellus sodales sit amet. Integer in molestie sapien, ut pharetra
              lorem.
              Pellentesque laoreet ipsum nec vulputate porttitor. Aliquam ut molestie ex, eget vehicula lectus. Donec
              condimentum risus ut faucibus molestie. Orci varius natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Vestibulum a elit at nisl consectetur rutrum. Etiam cursus lobortis odio porttitor
              placerat. Pellentesque sed vulputate arcu. Ut condimentum sed enim pharetra iaculis. Fusce finibus nulla
              nulla, ac ultrices augue egestas nec. Aenean sollicitudin justo ac dolor efficitur ullamcorper.
            </p>
          </div>
        </div>
      </div>
      <div class="flex items-center justify-center mt-40">
        <div class="w-1/3">
          <div class="border-b-2 border-b-base w-fit">
            <p class="text-3xl uppercase text-base tracking-widest font-extrabold mb-4">Choice of materials</p>
          </div>
          <div class="mt-8">
            <p class="text-base">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis urna eu
              semper dictum. Aenean
              feugiat maximus nisl, id condimentum tellus sodales sit amet. Integer in molestie sapien, ut pharetra
              lorem.
              Pellentesque laoreet ipsum nec vulputate porttitor. Aliquam ut molestie ex, eget vehicula lectus. Donec
              condimentum risus ut faucibus molestie. Orci varius natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Vestibulum a elit at nisl consectetur rutrum. Etiam cursus lobortis odio porttitor
              placerat. Pellentesque sed vulputate arcu. Ut condimentum sed enim pharetra iaculis. Fusce finibus nulla
              nulla, ac ultrices augue egestas nec. Aenean sollicitudin justo ac dolor efficitur ullamcorper.
            </p>
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
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis urna eu
              semper dictum.
            </p>
          </div>
        </div>
        <div class="text-center grid place-items-center">
          <div>
            <p class="text-base font-extrabold">Step 2</p>
          </div>
          <div class="w-3/4">
            <p class="text-base">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis urna eu
              semper dictum.
            </p>
          </div>
        </div>
        <div class="text-center grid place-items-center">
          <div>
            <p class="text-base font-extrabold">Step 3</p>
          </div>
          <div class="w-3/4">
            <p class="text-base">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis urna eu
              semper dictum.
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
