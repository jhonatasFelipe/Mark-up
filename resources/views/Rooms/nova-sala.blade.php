
<form action="{{route('RoomsInsert')}}" method="POST">
    @csrf
    <input placeholder="Nome da Sala" name="name"type="text">
    <input placeholder="observações" name="obs" type="text">
    <input placeholder="inicio de funcionament da sala" type="time" name="start_time">
    <input placeholder="fim do funcionamento da sala" type="time" name="end_time">
    <button type="submit">Salvar</button>
    <button>Cancelar</button>
</form>