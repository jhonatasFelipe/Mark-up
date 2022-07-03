<form method="POST" action="{{Route('UsersInsert')}}">
    @csrf
    <input type="text" placeholder="name" name="name">
    <input type="email" placeholder="e-mail" name="email">
    <input type="password" placeholder="Senha"name="password">
    <input type="password" placeholder="Confirme a senha" name="passwordConfirm">
    <button type="submit">Registrar</button><button type="reset">Cancelar</button>    
</form>