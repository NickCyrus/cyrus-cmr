@extends('emails.layout')

@section('body')
  <div class="card">
    <div class="card-header">
      Información
    </div>
    <div class="card-body">
      <h3 class="card-title">Notifiación de nuevo usuario</h3>
      <p class="card-text">El usuario {{ $usuario->name }}, se acaba de registrar en la plataforma.</p>
      <p class="card-text">Su correo electrónico es {{ $usuario->email }}.</p>
    </div>
  </div>
@endsection