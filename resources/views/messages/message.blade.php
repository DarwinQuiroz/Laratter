<div class="text-center">
    <img src="{{ $message->image }}" alt="" class="img img-thumbnail">
    <p class="card-text">
        <div class="text-muted">
            Creado por 
            <a href="/{{$message->user->username}}">{{ $message->user->username }}</a>
        </div>
        {{ $message->content }}
        <a href="/messages/{{ $message->id }}">Ver..</a>
    </p>

    <div class="card-text text-muted float-right">
        {{$message->created_at}}
    </div>
</div>