
<div class="container-room">
    <h1>{{$room->name}}</h1>
    <span class="info">
        <p>{{$room->obs}}</p>
        <p>{{$room->start_time}} ás {{$room->end_time}}</p>
    </span>
    <span class="actions">
        <a href="{{route('ListTimes',['room' => $room->id])}}"><img title="Horários disponiveis"src="{{asset('images/clock-solid.svg')}}"/></a>
        <a href="{{route('RoomsDelete',['id' => $room->id])}}"><img title="Horários disponiveis"src="{{asset('images/trash-solid.svg')}}"/></a>
    </span>
    
</div>
