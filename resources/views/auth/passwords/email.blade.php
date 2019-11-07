@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <article class="message">
            <div class="message-header">{{ __('Reset Password') }}</div>
            <div class="message-body">
                @if (session('status'))
                    <div class="notification is-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="field">
                        <label class="label">{{ __('E-Mail Address') }}</label>
                        <div class="control">
                            <input class="input @error('email') is-danger @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        @error('email')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary" href="{{ route('password.request') }}">
                            {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </article>
    </div>
</section>
@endsection
