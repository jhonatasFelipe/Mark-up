<x-layout>

    @foreach ($users as $user)
        <p>{{$user->name}}</p>
    
    @endforeach

    <a href="{{Route('UsersRegister')}}">Cadastrar usuário</a>
</x-layout>
