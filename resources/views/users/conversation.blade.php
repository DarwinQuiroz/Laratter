@extends('layouts.app')

@section('content')
    <h2>Conversación con: {{ $conversation->users->except($user->id)->implode('name', ', ') }}</h2>

    @foreach($conversation->privateMessages as $message)
    <div class="row">
        <div class="col-sm-4 mt-4">
            <div class="card">
                <div class="card-header">
                    {{ $message->user->name }} dijo...
                </div>
                <div class="card-body text-center">
                    {{ $message->message }}
                </div>
                <div class="card-footer text-right">
                    {{ $message->created_at }}
                </div>
            </div>
        </div>
    </div>
        
    @endforeach
@endsection