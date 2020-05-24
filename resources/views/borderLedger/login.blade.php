@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    {{-- @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}

    <div class="content">
        <div  class="logo">
            <img src="/img/BorderLedger5.png" alt="BorderLedger5Logo">
        </div>

        <div class="description jumbotron">
            <!-- <p>Hello this is the login screen!</p>     -->
            <form class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>                
                </div>
                <button class="btn btn-dark btn-lg" type="submit">Sign in</button>
            </form>
        </div>

        


    </div>
</div>
@endsection
