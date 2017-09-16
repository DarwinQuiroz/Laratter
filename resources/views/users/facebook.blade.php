@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-6 mt-3 mx-auto">
            <form action="/auth/facebook/register" method="POST">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Completa el Regisitro</strong>
                    </div>

                    <div class="card-body">
                        <img class="img-thumbnail" src="{{ $user->avatar }}" alt="">
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-control-label">Nombres</label>
                            <input class="form-control" type="text" name="name" value="{{ $user->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-control-label">Correo Electrónico</label>
                            <input class="form-control" type="email" name="email" value="{{ $user->email }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="username" class="form-control-label">Nombre de Usuario</label>
                            <input class="form-control" type="text" name="username" value="{{ old('username') }}">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Registrarme</button>
                    </div>
                </div>
            </form>  
        </div>
    </div>
@endsection