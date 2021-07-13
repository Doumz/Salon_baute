@extends('layouts.default')

@section('content')

<div class="page-wrapper  p-t-100 p-b-100 font-robo cash-font-robo" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="wrapper wrapper--w680">
            <div class="card card-1" >
                <div class="card-heading" style="background-image: url(images/img_2.jpg);"></div>
                <div class="card-body">
                    <h2 class="title text-center"><em>Inscription</em></h2>
                    <form method="POST" action="{{ route('register') }}" style="background: red;">
                        @csrf
                        <div class="wrap-input100 validate-input m-b-26" >
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Votre Nom">

                            <span class="focus-input100"></span>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
					     </div>
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Votre mail">
                            <span class="focus-input100"></span>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                       </div>
                       <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<input id="password" class="input100 @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="current-password" autofocus placeholder="Enter mot de passe" type="password">
                        <span class="focus-input100"></span>
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                       <div class="col-md-6">
                          <input id="password-confirm" type="password" class="form-control" placeholder="confim password" name="password_confirmation" required autocomplete="new-password">
                        </div>
					</div>
                        
                      <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
