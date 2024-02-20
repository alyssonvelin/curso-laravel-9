<h1>Testando <a href="{{ route('testes.create') }}">(+)</a></h1>

<form action="{{ route('testes.index') }}" method="get">
    <input type="text" name="search" id="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }} - {{ $user->email }} 
            | <a href="{{ route('testes.edit',$user->id) }}">Editar</a>
            | <a href="{{ route('testes.show',$user->id) }}">Detalhes</a>
        </li>
    @endforeach
</ul>