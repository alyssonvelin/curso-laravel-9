@extends('layouts.app')

@section('title','Novo Usuário')

@section('content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Novo Usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="POST" class="py-5">
        @include('users._partials.form')
    </form>
    
@endsection