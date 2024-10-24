@extends('app')

@section('body')
    <div class="bg-white rounded shadow-sm p-2 mb-3">
        <h1>Motor</h1>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h5>{{ $motor->descricao }}</h5>
                <div>
                    @livewire('motor', ['motor' => $motor])
                </div>
            </li>
        </ul>
    </div>
    <a href="{{ route('home') }}" class="btn btn-dark">Voltar</a>
@endsection