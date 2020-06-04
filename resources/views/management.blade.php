@extends('layouts.app')


@section('content')
<section class="jumbotron text-center">
    <div class="jumbotron">
      <h1 class="jumbotron-heading">Border Ledger</h1>
      <p class="msg"> {{ session('msg') }}</p>
    

      {{-- Form to create more Personnel Accounts --}}

      <div class="registration container">
        <h3 class="card-title">Create a New Personnel Account</h3>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="row">
                    <form class="card-body" action="/management" method="POST">
                    @csrf
                    
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="first_name">First Name:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" name="first_name" id="first_name" name="first_name" required>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="last_name">Last Name:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="last_name" name="last_name" required><br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="date_of_birth">Date of Birth:</label>
                            </div>
                            <div class="col-9">
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required><br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="email">Email:</label>
                            </div>
                            <div class="col-9">
                                <input type="email" class="form-control" id="email" name="email" required><br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="password">Password:</label>
                            </div>
                            <div class="col-9">
                                <input type="password" class="form-control" id="password" name="password" required><br>   
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="password-confirm" >Confirm Password:</label>
                            </div>
                            <div class="col-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password">
                            </div>
                        </div>

                        
                        <button type="submit" class="btn btn-success btn-lg" value="Add User">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

            {{-- Personnel Account Display Table --}}
            <div class="content">
                <br><br>
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
                                            <td>
                                                <a class="btn btn-primary" data-toggle="modal" data-target="#viewdetails{{$personnels->id}}">Details</a> 
                                                
                                                 {{-- DETAILS MODAL --}}
                                                <div class="modal fade" id="viewdetails{{$personnels->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">View Details</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                            
                                                            <div class="modal-body">
                                                                <h5 class="card-title">User</h5>
                                                                <p class="card-text">Name: {{$personnels->first_name}} {{$personnels->last_name}} </p><br>
                                                                <p class="card-text">Date of Birth: {{$personnels->date_of_birth}} </p><br>
                                                                <p class="card-text">Email: {{$personnels->email}} </p><br>
                                                                <p class="card-text">Password: {{ $personnels->password}}</p><br>  
                                                            </div>
                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </td> 
                                            <td>
                                                <form action="/management/{{$personnels->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
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
            </div>

            
        </div>
    </div>
    
</section>
@endsection