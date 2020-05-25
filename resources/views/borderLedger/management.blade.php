@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
<p class="msg"> {{ session('success_msg') }}</p>
    <div class="registration">
        <h1>Create a New Personnel Account</h1>
        <form action="/borderLedger/management" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name">

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name">

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        
        
        <button type="submit" value="Add User">Submit</button>
        </form>    
    </div> 

    <div class="content">
        <p>Hello this is the Managment screen!</p>
    @foreach ($pers as $personnels)
        
    
        <div class="description">
           Name: {{$personnels->first_name}} {{$personnels->last_name}} <br>
            Date of Birth:{{$personnels->date_of_birth}}<br> 
            Password:{{$personnels->password}}
        </div>
    @endforeach
        {{-- <button class="loginButton" href='/borderLedger/login'> Login </button> --}}


    </div>
</div>
@endsection
