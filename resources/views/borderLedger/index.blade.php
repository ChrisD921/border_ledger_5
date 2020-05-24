@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
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
    @endif

    <div class="content">
        <div  class="logo">
            <img src="/img/BorderLedger5.png" alt="BorderLedger5Logo">
        </div>
        
        <div class="description">
            <p>During a community quarantine, people are not allowed to travel across the cities and municipalities except for a few exceptions. Although there are only few people going in and out of the boundary, it is very important to have a record of them going in and out the borders. This is to ensure that they legally pass the border, and to know how to find them if something happened.
                <br><br>
                The web app will be used by the personnel who are guarding the border. It allows them to encode details of people who are going in and out of the border such as name, ID Card, purpose, where they are going. </p>
        </div>
        <a href="/borderLedger/management">Add a Personnel Account</a>
        <button class="loginButton" href='/borderLedger/login'> Login </button>


    </div>
</div>
@endsection
