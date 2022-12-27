@extends('layouts.app')

@section('title','Listagem dos Usuários')

@section('content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">
        Listagem dos usuários
        <a href="{{ route('users.create') }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
    </h1>

    <form action="{{ route('users.index') }}" method="get" class="py-5">
        <input type="text" name="search" id="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none">Pesquisar</button>
    </form>

    <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">
                    Nome
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">
                    E-mail
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">
                    Editar
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">
                    Detalhes
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200">{{ $user->name }}</td>
                    <td class="px-5 py-5 border-b border-gray-200">{{ $user->email }}</td>
                    <td class="px-5 py-5 border-b border-gray-200">
                        <a href="{{ route('users.edit',$user->id) }}">Editar</a>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200">
                        <a href="{{ route('users.show',$user->id) }}">Detalhes</a>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
@endsection