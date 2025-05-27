<h2>Hola, {{ $recipient->name }}!</h2>

<p>Se te ha asignado un nuevo match en el torneo <strong>{{ $match->tournament->name }}</strong>.</p>

<p>Tu oponente es: 
    @if ($recipient->id === $match->player1->id)
        {{ $match->player2->name }}
    @else
        {{ $match->player1->name }}
    @endif
</p>

<p>¡Buena suerte!</p>
