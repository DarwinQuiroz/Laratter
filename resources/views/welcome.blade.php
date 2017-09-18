@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
    	<h1>Laratter</h1>
    </div>
	
	@if(Auth::check())
		<div class="row">
			<div class="col-md-6 mx-auto">
				<form action="/messages/create" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group @if($errors->has('message')) is-invalid @endif">
						<input type="text" name="message" class="form-control @if($errors->has('message')) is-invalid @else is-valid @endif" placeholder="Qué estás pensando?">	
						@if($errors->has('message'))
							@foreach($errors->get('message') as $error)
								<div class="invalid-feedback">{{$error}}</div>
							@endforeach
						@endif
						<input type="file" name="image" class="form-control-file">
					</div>
				</form>
			</div>
		</div>
	@endif

    <div class="row">
    	@forelse($messages as $message)
    		<div class="col-lg-6">
				@include('messages.message')
    		</div>
    	@empty
    		<p class="">No hay mensajes destacados.!</p>
    	@endforelse

		@if(count($messages))
			<div class="mt-2 mx-auto">
				{{ $messages->links('pagination::bootstrap-4') }}
			</div>
		@endif
    </div>
@endsection