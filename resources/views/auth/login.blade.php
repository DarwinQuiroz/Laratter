@extends('layouts.app')

@section('content')
    <div class="text-center mt-5">
        <h3>Ingresar</h3>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-8 ml-md-auto"> 
            <form role="form" method="POST" action="{{ route('login') }}" class="was-validated" novalidate>
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email" class="col-md-4 form-control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : 'is-valid' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' is-invalid' : '' }}">
                    <label for="password" class="col-md-4 form-control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : 'is-valid' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-auto">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-success">
                            Login
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
            <a href="/auth/facebook" class="btn btn-primary">Ingresar con Facebook</a>
        </div>
    </div>

    <div class="row ">
        
    </div>
@endsection
