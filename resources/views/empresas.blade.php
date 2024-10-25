@extends('app')

@section('body')
    <div class="bg-white rounded shadow-sm p-2">
        <h1>Empresas</h1>
        <ul class="list-group list-group-flush">
            @foreach ($empresas as $empresa)
                <li class="list-group-item py-3">
                    <h5>{{ $empresa->nome }}</h5>
                    <div>
                        <livewire:motores wire:key="{{ $empresa->id }}" :empresa="$empresa" />
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection