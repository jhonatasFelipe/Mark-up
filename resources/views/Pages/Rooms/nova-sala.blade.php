
<form action="{{route('RoomsInsert')}}" method="POST">
    @csrf
    <input placeholder="Nome da Sala" name="name"type="text">
    <input placeholder="observações" name="obs" type="text">
    <input placeholder=" hora inicio" type="number" name="start_time" max="23">
    <input placeholder=" hora fim" type="number" name="end_time" max="23">
    <button type="submit">Salvar</button>
    <button>Cancelar</button>
</form>