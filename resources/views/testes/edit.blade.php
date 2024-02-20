@extends('layouts.app')

@section('title',"Editar Usuário $user->name ")

@section('content')
    <h1>Editar Usuário {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('testes.update',$user->id) }}" method="POST">
        @method('PUT')
        @include('testes._partials.form')
    </form>
    
@endsection