@extends('layouts.app')

@section('title','Novo Usuário')

@section('content')
    <h1>Novo Usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('testes.store') }}" method="POST">
        @csrf
        @include('testes._partials.form')
    </form>
    
@endsection