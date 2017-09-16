@extends('layouts.app')

@section('content')
    <div class="text-center mt-5"><h3>Registrarme</h3></div>
    <hr>
    <div class="row">
        <div class="col-md-8 ml-md-auto">
            <form class="form-horizontal" role="form" method="POST" class="was-validated" action="{{ route('register') }}" novalidate>
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-4 form-control-label">Nombres</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : 'is-valid' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="col-md-4 form-control-label">Nombre de Usuario</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : 'is-valid' }}" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : 'is-valid' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : 'is-valid' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control is-valid" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
