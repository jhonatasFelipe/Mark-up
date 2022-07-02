
@foreach ($salas as $sala)
    <div>
        {{$sala->name}}
    </div>
    <div>
        {{$sala->start_time}}
    </div>
    <div>
        {{$sala->obs}}
    </div>
<a href="{{route('RoomsDelete',['id' => $sala->id])}}">Excluir</a>
@endforeach
<a href="{{route('RoomsCreate')}}">Nova Sala</a>