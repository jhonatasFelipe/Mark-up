
<x-layout>

    <form action="{{Route('ListTimes',['room'=>$room->id])}}">
        <input name='date' type="date" value="{{$date->format("Y-m-d")}}">
        <button>Ir para data</button>
    </form>
    @foreach ($times as $item)

        @if ($item->getAvaible())
            <a class="time" href="/booking/book?room={{$room->id}}&user={{$user}}&date={{$date->format('Y-m-d').'T'.$item->getStart()->format("H:i") }}">
            {{ $item->getStart()->format("H:i") }}
            <p>disponivel</p>
            </a>
        @else 
            {{ $item->getStart()->format("H:i") }}
           <p> indisponivel </p>      
        @endif
   
    @endforeach

    <a href="{{Route('RoomsList')}}">Voltar para lista de salas</a>

</x-layout>
