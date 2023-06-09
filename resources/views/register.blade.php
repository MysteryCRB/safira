<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name">{{ __('Name') }}</label>

        <div>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        </div>
    </div>

    <div>
        <label for="email">{{ __('Email') }}</label>

        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>

        <div>
            <input id="password" type="password" name="password" required>
        </div>
    </div>

    <div>
        <label for="password-confirm">{{ __('Confirm Password') }}</label>

        <div>
            <input id="password-confirm" type="password" name="password_confirmation" required>
        </div>
    </div>

    <div>
        <button type="submit">
            {{ __('Register') }}
        </button>
    </div>
</form>
