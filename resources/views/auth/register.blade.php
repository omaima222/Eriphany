@extends('layouts.app')

@section('content')
<div class="home">

                <div class="AuthForm">
                    <div class="formHead">
                        <h5>Register</h5>
                        <a href="{{route('home')}}"><button class="closeButton">&nbsp;x&nbsp;</button></a>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="inputThing">
                            <label for="name">Name</label>

                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

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

                        <div class="inputThing">
                            <label for="password-confirm">Confirm Password</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <button>Register</button>

                    </form>
                </div>

</div>
@endsection
