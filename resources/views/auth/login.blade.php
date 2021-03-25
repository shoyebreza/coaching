@extends('layouts.app')

@section('content')


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover">Sign Up </h2>
    <!-- Login Form -->
     <form method="POST" action="{{ route('login') }}">
     @csrf
      <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                 <input id="email" type="email" class="fadeIn second form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                     @error('email')
                     <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                    </div>
                </div>
                <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                     <input id="password" type="password" class="fadeIn third form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                         @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>

      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
         @if (Route::has('password.request'))
      <a class="underlineHover" href="{{ route('password.request') }}">Forgot Password?</a>
       @endif
    </div>

  </div>
</div>
<link rel = "stylesheet" type = "text/css" 
href = "{{ asset('public/css/login.css')}}">

@endsection
