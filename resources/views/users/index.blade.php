@extends('layouts.app')
@section('title', 'Listagem dos usuários')
@section('content')
  <h1>Listagem dos usuários</h1>

  <p><a href="{{ route('users.create') }}">Novo Usuario</a></p>

  <form action="{{ route('users.index') }}" method="get">
    <input type="text" name="search" id="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
  </form>
  
  <ul>
    @foreach($users as $user)
      <li>
        {{ $user->name }} - {{ $user->email }} 
        | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
      </li>
    @endforeach
  </ul>
@endsection
