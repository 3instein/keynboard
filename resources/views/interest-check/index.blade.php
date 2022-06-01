<x-app-layout>
  <div class="mt-18">
    <form action="{{ route('interest-check.store') }}" method="POST">
      @csrf
      {{-- Communit Form --}}
      <div>
        <span>
          <p>Community</p>
        </span>
        <div>
          <input type="radio" name="community" id="community" value="discord">
          <label for="discord">Discord</label>
        </div>
        <div>
          <input type="radio" name="community" id="community" value="instagram">
          <label for="instagram">Instagram</label>
        </div>
        <div>
          <label for="username">Username</label>
          <input type="text" name="username">
        </div>
      </div>
      {{-- layout form --}}
      <div>
        <span>
          <p>Prefered layout</p>
        </span>
        <div>
          <input type="radio" name="layout" id="layout" value="wkl">
          <label for="wkl">WKL (Winkeyless)</label>
        </div>
        <div>
          <input type="radio" name="layout" id="layout" value="wk">
          <label for="wk">WK (Winkey)</label>
        </div>
      </div>

      {{-- color form --}}
      <div>
        <span>
          <p>Prefered colors</p>
        </span>
        <div>
          <input type="checkbox" name="color[]" id="color" value="white">
          <label for="white">White</label>
        </div>
        <div>
          <input type="checkbox" name="color[]" id="color" value="black">
          <label for="black">Black</label>
        </div>
        <div>
          <input type="checkbox" name="color[]" id="color" value="red">
          <label for="red">Red</label>
        </div>
      </div>

      {{-- plate form --}}
      <div>
        <span>
          <p>Preferred plate</p>
        </span>
        <div>
          <input type="radio" name="plate" id="plate" value="polycarbonate">
          <label for="polycarbonate">Polycarbonate</label>
        </div>
        <div>
          <input type="radio" name="plate" id="plate" value="fr4">
          <label for="fr4">FR4</label>
        </div>
      </div>

      {{-- bottom row --}}
      <div>
        <span>
          <p>Prefered bottom row</p>
        </span>
        <div>
          <input type="radio" name="bottom-row" id="bottom-row" value="7u">
          <label for="7u">7u Spacebar</label>
        </div>
        <div>
          <input type="radio" name="bottom-row" id="bottom-row" value="6.25u">
          <label for="6-25u">6.25u Spacebar</label>
        </div>
      </div>
      <div>
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</x-app-layout>
