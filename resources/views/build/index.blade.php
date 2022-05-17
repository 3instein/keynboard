
<h1>Build</h1>
<form>
    @csrf
    
    <div class="top">
        <label for="top_case">Top Case</label>
    @foreach ($top_cases as $top_case) 
        @if (isset($build) && $build->topCase->id == $top_case->id)
            <input type="radio" name="top_case" value="{{ $top_case->id }}" checked> {{$top_case->name}}
        @else
            <input type="radio" name="top_case" value="{{ $top_case->id }}"> {{$top_case->name}}
        @endif
    @endforeach
    </div>

    <div class="bottom">
        <label for="bottom_case">Bottom Case</label>
    @foreach ($bottom_cases as $bottom_case)  
        <input type="radio" name="bottom_case" value="{{ $bottom_case->id }}"> {{$bottom_case->name}}
    @endforeach
    </div>

    <div class="layout">
        <label for="layout">Layout</label>
    @foreach ($layouts as $layout)  
        <input type="radio" name="layout" value="{{ $layout->id }}"> {{$layout->name}}
    @endforeach
    </div>

    <button type="submit">Add to cart</button>
</form>
<form action="{{ route('build.load') }}" method="POST">
    @csrf
    <p><u>Enter build code</u></p>
    <input type="text" name="build-code" value="{{ old('build-code') }}">
    <button type="submit">Submit</button>
</form>