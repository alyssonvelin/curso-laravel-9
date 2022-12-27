@extends('layouts.app')

@section('title','Detalhe do Usuário')

@section('content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Detalhe do Usuário {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->created_at }}</li>
    </ul>

    <form action="{{ route('users.destroy',$user->id) }}" method="post" class="py-5">
        @method('DELETE')
        @csrf
        <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none">Deletar</button>
    </form>
@endsection