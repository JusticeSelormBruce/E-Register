@extends('layouts.app')

@section('content')
<div class="container">
    @include('common.alert')

          <div class="row">
            <div class="mx-auto w-lg-50 w-md-75 w-sm-100">
               

                <div class="jumbotron bg-dark text-light">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <label for="">E-Mail Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="row py-2">
                            <label for="">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary">
                                   <span class="mx-3"> {{ __('Login') }}</span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
          </div>
  
</div>
@endsection
