@extends('layouts.app')

@section('content')
<div class="home">

                <div class="AuthForm">
                    <div class="formHead">
                        <h5>Login</h5>
                        <a href="{{route('home')}}"><button class="closeButton">&nbsp;x&nbsp;</button></a>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="inputThing">
                            <label for="email">Email</label>

                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                    <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="inputThing">
                            <label for="password">Password</label>

                            <input id="password" type="password" name="password" required autocomplete="current-password">

                            @error('password')
                                    <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                          
                        <div class="formFooter">
                            @if (Route::has('password.request'))
                                <a class="forgotPss" href="{{ route('password.request') }}">Forgot Your Password?</a>
                            @endif
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                   

                    </form>
                </div>
</div>
@endsection
