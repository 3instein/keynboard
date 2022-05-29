<x-app-layout>
  <div class="mt-18">
    <form action="">

      {{-- layout form --}}
      <div>
        <span>
          <p>Prefered layout</p>
        </span>
        <div>
          <input type="radio" name="layout" id="layout" value="wkl">
          <label for="wkl">Wkl (Window key less)</label>
        </div>
        <div>
          <input type="radio" name="layout" id="layout" value="wk">
          <label for="wk">Wk (Window key)</label>
        </div>
      </div>

      {{-- color form --}}
      <div>
        <span>
          <p>Prefered color</p>
        </span>
        <div>
          <input type="checkbox" name="white" id="color" value="white">
          <label for="white">White</label>
        </div>
        <div>
          <input type="checkbox" name="black" id="color" value="black">
          <label for="black">Black</label>
        </div>
        <div>
          <input type="checkbox" name="red" id="color" value="red">
          <label for="red">Red</label>
        </div>
      </div>

      {{-- plate form --}}
      <div>
        <span>
          <p>Prefered plate</p>
        </span>
        <div>
          <input type="radio" name="plate" id="plate" value="polycarbonate">
          <label for="polycarbonate">Polycarbonate</label>
        </div>
        <div>
          <input type="radio" name="plate" id="plate" value="aluminium">
          <label for="aluminium">Aluminium</label>
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
          <input type="radio" name="bottom-row" id="bottom-row" value="6-25u">
          <label for="6-25u">6.25u Spacebar</label>
        </div>
      </div>
    </form>
  </div>
</x-app-layout>
