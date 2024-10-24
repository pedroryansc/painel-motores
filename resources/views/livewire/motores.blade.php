<div wire:poll.5s>
    <h1>Motores</h1>
    <br>
    @foreach ($motores as $motor)
        <a href="{{ route('motor', $motor->id) }}" wire:navigate>Motor {{ $motor->id }}</a> Corrente: {{ $this->estaRespondendo($motor) }} <br>
    @endforeach
</div>