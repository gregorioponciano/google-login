@extends('layout')

@section('content')

<div class="card p-4 text-center">
    <h2>Bem-vindo, {{ auth()->user()->name }}</h2>

  @if(auth()->user()->avatar)
    <img src="{{ auth()->user()->avatar }}" width="100" class="rounded-circle mb-3">
@else
    <div style="
        width:100px;
        height:100px;
        border-radius:50%;
        background:#0d6efd;
        color:white;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:30px;">
        {{ strtoupper(substr(auth()->user()->name,0,1)) }}
    </div>
@endif

    <form method="POST" action="/logout">
        @csrf
        <button class="btn btn-danger">Sair</button>
    </form>
</div>

@endsection
