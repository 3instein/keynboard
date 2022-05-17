@isset($build)
    {{$build}}
@endisset

<form>
    @csrf
    <input type="text" name="code">
    <button type="submit">Submit</button>
</form>