@foreach ($times as $item)

    @if ($item->getAvaible())
        <a class="time" href="/booking/book?room={{$room->id}}&user={{$user}}&date={{'2022-07-04T'.$item->getStart()->format("H:i") }}">
        {{ $item->getStart()->format("H:i") }}
            sim
        </a>
    @else 
        {{ $item->getStart()->format("H:i") }}
        não       
    @endif
   
@endforeach

<a href="{{Route('RoomsList')}}">Voltar para lista de salas</a>