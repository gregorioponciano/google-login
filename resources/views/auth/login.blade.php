@extends('layout')

@section('content')

<div class="card p-4">
    <h3>Login</h3>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <input type="email" name="email" class="form-control mb-2" placeholder="Email">
        <input type="password" name="password" class="form-control mb-2" placeholder="Senha">

        <button class="btn btn-primary w-100">Entrar</button>
    </form>

    <hr>

    <a href="{{ url('auth/google') }}" class="btn btn-danger w-100">
        Entrar com Google
    </a>

    <p class="mt-3">
        Não tem conta? <a href="/register">Cadastrar</a>
    </p>
</div>

@endsection
