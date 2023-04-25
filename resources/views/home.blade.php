@extends('layouts.app')

@section('content')
        <div class="home">
            <div class="homeMenu">
                <a href="{{route('AboutUs')}}">About us</a>

                @guest
                    @if (Route::has('login'))
                            <a href="{{route('login')}}">Login</a>
                    @endif

                    @if (Route::has('register'))
                            <a href="{{route('register')}}">Register</a>
                    @endif
                    @else
                            <a href="{{route('room')}}">Start</a>
                @endguest
            </div>
        </div>
@endsection
