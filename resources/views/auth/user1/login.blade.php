<div class="container">
    @include('common.alert')

          <div class="row">
            <div class="mx-auto w-lg-50 w-md-75 w-sm-100">
               

                <div class="jumbotron bg-dark text-light">
                    <form method="POST" action="/user1-auth">
                        @csrf
                        <div class="row">
                            <label for="">Phone</label>
                            <input id="email" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="row py-2">
                            <label for="">E-Mail Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>

                            @error('email')
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