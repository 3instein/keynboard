

<form action="{{ route('build.store') }}" method="POST">
    @csrf
    
    <div class="top">
        <label for="top_case">Top Case</label>
    @foreach ($top_cases as $top_case)  
        <input type="radio" name="top_case" value="{{ $top_case->id }}"> {{$top_case->name}}
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

    <label for="build-code">Build Code</label>
    <input type="text" name="build-code">
    <button type="submit">Submit</button>
</form>