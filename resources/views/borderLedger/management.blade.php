@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">

    <div class="registration">
        <h1>Creat a New Personnel Account</h1>
        <form action="borderLedger/management" method="POST">
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
    @foreach ($pers as $personnel)
        
    
        <div class="description">
           Name: {{$personnel->first_name}} {{$personnel->last_name}} <br>
            Date of Birth:{{$personnel->date}}<br> 
            Password:{{$personnel->password}}
        </div>
    @endforeach
        {{-- <button class="loginButton" href='/borderLedger/login'> Login </button> --}}


    </div>
</div>
@endsection
