<x-app-layout>
    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <input type="text">Name
        <input type="text">Email
        <input type="text">Phone
        <input type="text">Address
        <input type="text" value="{{ $build_code }}">Build Code
    </form>
</x-app-layout>