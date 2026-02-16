@extends('layout')

@section('content')

<div class="card p-4">
    <h3>Cadastro</h3>

    <form method="POST" action="/register">
        @csrf

        <input type="text" name="name" class="form-control mb-2" placeholder="Nome">
        <input type="email" name="email" class="form-control mb-2" placeholder="Email">
        <input type="password" name="password" class="form-control mb-2" placeholder="Senha">
        <input type="password" name="password_confirmation" class="form-control mb-2" placeholder="Confirmar senha">

        <button class="btn btn-success w-100">Cadastrar</button>
    </form>

    <p class="mt-3">
        Já tem conta? <a href="/login">Login</a>
    </p>
</div>

@endsection
