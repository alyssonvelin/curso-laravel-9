<h1>Detalhes do Usuário</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>

<form action="{{ route('testes.destroy',$user->id) }}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit">Excluir</button>
</form>