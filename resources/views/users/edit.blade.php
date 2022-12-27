@extends('layouts.app')

@section('title',"Editar o Usuário {$user->name}")

@section('content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Editar o Usuário {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.update',$user->id) }}" method="post" class="py-5">
        @method('PUT')
        @include('users._partials.form')
    </form>
    
@endsection