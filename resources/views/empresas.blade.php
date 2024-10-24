@extends('app')

@section('body')
    <h1>Empresas</h1>
    @foreach ($empresas as $empresa)
        <h3>{{ $empresa->nome }}</h3>
        <livewire:motores wire:key="{{ $empresa->id }}" :empresa="$empresa" />
    @endforeach
@endsection