@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <article class="message">
            <div class="message-header">{{ __('Register') }}</div>
            <div class="message-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="field">
                        <label class="label">{{ __('Name') }}</label>
                        <div class="control">
                            <input class="input @error('name') is-danger @enderror" type="text" name="name" value="{{ old('name') }}" autocomplete="name" required autofocus>
                        </div>
                        @error('name')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">{{ __('E-Mail Address') }}</label>
                        <div class="control">
                            <input class="input @error('email') is-danger @enderror" type="email" name="email" autocomplete="email" required>
                        </div>
                        @error('email')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">{{ __('Password') }}</label>
                        <div class="control">
                            <input class="input @error('password') is-danger @enderror" type="password" name="password" autocomplete="new-password" required>
                        </div>
                        @error('password')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">{{ __('Confirm Password') }}</label>
                        <div class="control">
                            <input class="input" type="password" name="password_confirmation" autocomplete="new-password" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary" type="submit">{{ __('Register') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </article>
    </div>
</section>
@endsection
