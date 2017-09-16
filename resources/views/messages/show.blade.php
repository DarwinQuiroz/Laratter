@extends('layouts.app')

@section('content')
    <h2 class="h3">Mensaje id: {{ $message->id }}</h2>
    @include('messages.message')
@endsection