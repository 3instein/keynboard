<x-app-layout>
  <div class="mt-18 grid place-items-center">
    <form class="mt-9" action="{{ route('interest-check.store') }}" method="POST">
      @csrf
      {{-- Communit Form --}}
      <div class="bg-white px-10 py-5 rounded-lg">
        <div>
          <span>
            <p class="font-semibold text-lg">Community</p>
            <p class="font-medium text-gray-500">The platform where you get the information from.</p>
          </span>
          <div class="mt-1">
            <input type="radio" name="community" id="community" value="discord">
            <label for="discord">Discord</label>
          </div>
          <div class="mt-1">
            <input type="radio" name="community" id="community" value="instagram">
            <label for="instagram">Instagram</label>
          </div>

          {{-- instagram input --}}
          <div class="mt-3 hidden instagram-input">
            <label class="font-semibold" for="username">Your username on that platform</label>
            <div class="flex rounded-md shadow-sm">
              <span
                class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">@</span>
              <input class="flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" type="text"
                name="username">
            </div>
          </div>

          {{-- discord input --}}
          <div class="mt-3 hidden discord-input">
            <label class="font-semibold" for="username">Your username on that platform</label>
            <div class="flex rounded-md shadow-sm">
              <input class="flex-1 block w-full rounded-none rounded-l-md sm:text-sm border-gray-300" type="text"
                name="username">
              <span
                class="inline-flex items-center px-3 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">#</span>
              <input class="rounded-r-md sm:text-sm border-gray-300 w-20" type="number"
                name="id" id="discord-id">
            </div>
          </div>
        </div>
        {{-- layout form --}}
        <hr class="my-5" />
        <div>
          <span>
            <p class="font-semibold">Prefered layout</p>
          </span>
          <div class="mt-1">
            <input type="radio" name="layout" id="layout" value="wkl">
            <label for="wkl">WKL (Winkeyless)</label>
          </div>
          <div class="mt-1">
            <input type="radio" name="layout" id="layout" value="wk">
            <label for="wk">WK (Winkey)</label>
          </div>
        </div>

        {{-- color form --}}
        <div class="mt-3">
          <span>
            <p class="font-semibold">Prefered colors</p>
          </span>
          <div class="mt-1">
            <input class="rounded" type="checkbox" name="color[]" id="color" value="white">
            <label for="white">White</label>
          </div>
          <div class="mt-1">
            <input class="rounded" type="checkbox" name="color[]" id="color" value="black">
            <label for="black">Black</label>
          </div>
          <div class="mt-1">
            <input class="rounded" type="checkbox" name="color[]" id="color" value="red">
            <label for="red">Red</label>
          </div>
        </div>

        {{-- plate form --}}
        <div class="mt-3">
          <span>
            <p class="font-semibold">Preferred plate</p>
          </span>
          <div class="mt-1">
            <input type="radio" name="plate" id="plate" value="polycarbonate">
            <label for="polycarbonate">Polycarbonate</label>
          </div>
          <div class="mt-1">
            <input type="radio" name="plate" id="plate" value="fr4">
            <label for="fr4">FR4</label>
          </div>
        </div>

        {{-- bottom row --}}
        <div class="mt-3">
          <span>
            <p class="font-semibold">Prefered bottom row</p>
          </span>
          <div class="mt-1">
            <input type="radio" name="bottom-row" id="bottom-row" value="7u">
            <label for="7u">7u Spacebar</label>
          </div>
          <div class="mt-1">
            <input type="radio" name="bottom-row" id="bottom-row" value="6.25u">
            <label for="6-25u">6.25u Spacebar</label>
          </div>
        </div>
        <hr class="my-5" />

        {{-- waitlist form --}}
        <div class="mt-3">
          <input type="checkbox" name="waitlist" id="waitlist">
          <label for="waitlist">Would you like to be put in the waiting list?</label>
        </div>
        <div class="hidden waitlist-form mt-3">
          <div>
            <div>
              <label class="font-semibold" for="name">Name</label>
              <input class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="text" name="name">
            </div>
            <div class="mt-3">
              <label class="font-semibold" for="email">Email</label>
              <input class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="email" name="email">
            </div>
            <div class="mt-3">
              <label class="font-semibold" for="password">Password</label>
              <input class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="password"
                name="password">
            </div>
          </div>
          <div class="w-[356px] mt-3">
            <span>
              <p class="font-medium text-gray-500 text-sm">By joining the waiting list, you will receive an email
                notification for confirming your response.</p>
            </span>
          </div>
        </div>
        <hr class="my-5" />
        <div class="mt-3 grid place-items-end">
          <button class="bg-base-gold font-bold text-white py-1 px-3 rounded tracking-tight"
            type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>
</x-app-layout>
