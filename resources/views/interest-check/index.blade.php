<x-app-layout>

  {{-- modal --}}
  <div class="relative z-10 hidden modal" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity modal-bg"></div>

    <div class="fixed z-10 inset-0 overflow-y-auto">
      <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0 modal-panel">
        <div
          class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Layouts</h3>
                <div class="mt-2">
                  {{-- isi dek sini --}}
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="button"
              class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm cancel-btn">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- form --}}
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
              <input class="rounded-r-md sm:text-sm border-gray-300 w-20" type="number" name="id" id="discord-id">
            </div>
          </div>
        </div>

        {{-- layout form --}}
        <hr class="my-5" />
        <div>
          <span class="flex items-center">
            <p class="font-semibold">Prefered layout</p>
            <div class="ml-1 w-4 layout-info">
              <img src="/icons/info.svg" alt="info icon">
            </div>
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
