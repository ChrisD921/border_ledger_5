@extends('layouts.app')


@section('content')
{{-- @can  --}}




<section class="jumbotron text-center">
    <div class="jumbotron">
      <h1 class="jumbotron-heading">Border Ledger</h1>
      <p class="msg"> {{ session('success_msg') }}</p>
    

      {{-- Form to create more Personnel Accounts --}}
        <div class="flex-center position-ref full-height">
            
            <div class="registration">
                <h1>Create a New Personnel Account</h1>
                <form action="/borderLedger/management" method="POST">
                @csrf
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name"><br>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name"><br>

                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth"><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br>
                
                
                <button type="submit" value="Add User">Submit</button>
                </form>    
            </div> 

            {{-- Personnel Account Display Table --}}
                <div class="content">
                    <p>Hello this is the Managment screen!</p>
                    <div class="container mt-2 mb-3">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h4 class="text-center mb-5"> Personnel Accounts</h4>
                                <table class="table table-striped mt-2">
                                    <thead>
                                        <th> Full Name</th>
                                        <th> Date of Birth</th>
                                        <th> Email</th>
                                        <th> Password</th>
                                    </thead>
                                    <tbody>
                                        @foreach($personnel as $personnels)
                                        <tr>
                                            <td>{{$personnels->first_name}} {{$personnels->last_name}}</td>
                                            <td>{{$personnels->date_of_birth}}</td>      
                                            <td>{{$personnels->email}}</td>                  
                                            <td>{{$personnels->password}} </td>
                                            <td><button type="menu">View (TODO)</button></td>
                                            <td>
                                                <form action="/borderLedger/management/{{$personnels->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button>Delete Account</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $personnel->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            {{-- <button class="loginButton" href='/borderLedger/login'> Login </button> --}}
            </div>


        </div>

    </div>
    
</section>
@endsection
