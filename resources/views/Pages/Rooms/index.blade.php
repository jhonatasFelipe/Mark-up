

<x-layout>
    <a href="{{route('RoomsCreate')}}">Nova Sala</a>
    @foreach ($salas as $sala)
        <x-sala :room="$sala"></x-sala>
    @endforeach

</x-layout>