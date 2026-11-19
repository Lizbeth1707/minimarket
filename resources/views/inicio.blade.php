@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1>Sistema de Gestión de Inventario para un Minimarket</h1>

    <p>Proyecto base funcionando con Laravel {{ app()->version() }}.</p>

    <p>Base de datos conectada:
        <strong>{{ DB::connection()->getDatabaseName() }}</strong>
    </p>
@endsection