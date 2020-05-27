@extends('layouts.layout')

@section('content')

<section class="jumbotron text-center">
    <div class="jumbotron">
      <h1 class="jumbotron-heading">Border Ledger</h1>
      <p class="msg"> {{ session('success_msg') }}</p>
      {{-- Form to create more Personnel Accounts --}}
        <div class="flex-center position-ref full-height">
            
        <div class="registration">
            <h2 class="card-title text-center">Create a New Personnel Account</h2>
            <div class="row">
                <form class="card-body" action="/borderLedger/management" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="first_name">First Name:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="first_name" name="first_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="last_name">Last Name:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="date_of_birth">Date of Birth:</label>
                        </div>
                        <div class="col-9">
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="password">Password:</label>
                        </div>
                        <div class="col-9">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                        <button type="submit" class="btn btn-success" value="Add User">Submit</button>
                    </form>
                </div> 
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
                                        <th> Password</th>
                                    </thead>
                                    <tbody>
                                        @foreach($personnel as $personnels)
                                        <tr>
                                            <td>{{$personnels->first_name}} {{$personnels->last_name}}</td>
                                            <td>{{$personnels->date_of_birth}}</td>                        
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
