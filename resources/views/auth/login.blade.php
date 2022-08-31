@extends('layouts.auth')
@section('page-title',__lang('login'))
@section('content')

<div class="auth option2">
    <div class="auth_left">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation"   > 
                    @csrf
                    <div class="text-center">
                        <div class="login-brand">
                            <a href="{{ url('/') }}">
                                @if(!empty(setting('image_logo')))
                                    <img  alt="logo" width="100" class="shadow-light" src="{{ asset(setting('image_logo')) }}" >
                            @else
                                    <h1>{{ setting('general_site_name') }}</h1>
                            @endif
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        
                        @if(setting('social_enable_facebook')==1 || setting('social_enable_google')==1)
                            <div class="text-center mt-4 mb-3">
                                <div class="text-job text-muted">{{ __lang('social-login') }}</div>
                            </div>
                            <div class="row sm-gutters">
                                @if(setting('social_enable_facebook')==1)
                                    <div class="col-6"> 
    
                                        <a href="{{ route('social.login',['network'=>'facebook']) }}" class="btn btn-block btn-social btn-facebook">
                                            <span class="fab fa-facebook"></span> {{ __lang('facebook') }}
                                        </a>
                                    </div>
                                @endif
                                @if(setting('social_enable_google')==1)
                                    <div class="col-6">
                                        <a href="{{ route('social.login',['network'=>'google']) }}" class="btn btn-block btn-social btn-google">
                                            <span class="fab fa-google"></span> {{ __lang('google') }}
                                        </a>
                                    </div>
                                @endif
    
                            </div> 
                        @endif 
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __lang('email') }}</label>
                        <input id="email" type="email" class="form-control login-email @error('email') is-invalid @enderror"  name="email" tabindex="1"  value="{{ old('email') }}"   required autofocus autocomplete="email" >
    
                        <div class="invalid-feedback">
                            {{ __lang('email-required') }}
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">{{ __lang('password') }}</label>
                        <div class="float-right">
                            <a href="{{ route('password.request') }}" class="text-small">
                                {{ __lang('lost-password') }}
                            </a>
                        </div>
                        <input id="password" type="password" class="form-control login-password @error('password') is-invalid @enderror" name="password" tabindex="2" required  autocomplete="current-password" >
                                <div class="invalid-feedback">
                            {{ __lang('fill-password') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" />
                        <span class="custom-control-label">Remember me</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            {{ __lang('sign-in') }}
                        </button>
                    </div>
                </form>
                    @if($enableRegistration)
    
                    <div class="mt-5 text-muted text-center">
                        {{ __lang('dont-have-account') }} <a href="{{ route('register') }}">{{ __lang('create-one') }}</a>
                    </div>
                    @endif
            </div>
        </div>        
    </div>
</div>
 
@endsection
