@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <article class="message">
            <div class="message-header">{{ __('Login') }}</div>
            <div  class="message-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field">
                        <label id= "login" class="label">{{ __('E-Mail Address') }}</label>
                        <div class="control">
                            <input class="input @error('email') is-danger @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        @error('email')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label id= "login" class="label">{{ __('Password') }}</label>
                        <div class="control">
                            <input class="input @error('password') is-danger @enderror" type="password" value="{{ old('password') }}" name="password" required autocomplete="current-password" autofocus>
                        </div>
                        @error('password')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-primary" type="submit">{{ __('Login') }}</button>
                        </div>
                        <div class="control">
                            @if (Route::has('password.request'))
                                <a class="button" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </article>
    </div>
</section>
@endsection
