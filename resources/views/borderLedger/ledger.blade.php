@extends('layouts.app')

@section('content')

    <section class="jumbotron text-center">
        <div class="jumbotron">
          <h1 class="jumbotron-heading">Border Ledger</h1>

          <p class="msg"> {{ session('msg') }}</p>
            <!-- Button triggers -->
            <a href="#" class="btn btn-primary my-2" data-toggle="modal" data-target="#goingin">IN</a>
            <a href="#" class="btn btn-danger my-2" data-toggle="modal" data-target="#goingout">OUT</a>
          
            <!-- Going in Modal -->
            <div class="modal fade" id="goingin" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Passerby Form (Going In)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="/ledger" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_first_name_in">First Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_first_name_in" name="pass_first_name" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_first_name')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_last_name_in">Last Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_last_name_in" name="pass_last_name" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_last_name')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_age_in">Age</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_age_in" name="pass_age" placeholder="" >
                                            </div>
                                            <!-- @error('pass_age')
                                            {{-- Shows the modal immediately after failed validation/redirect --}}
                                                @if (count($errors) > 0)
                                                <script type="text/javascript" >
                                                
                                                    $(document).ready(function(){
                        
                                                    $('#goingin').modal('show'); 
                                                    });
                                                    </script>
                                                @endif
                                                    <small style="color: red;">{{ $message }}</small>
                                            @enderror -->
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_age')
                                                {{-- Shows the modal immediately after failed validation/redirect --}}
                                                    @if (count($errors) > 0)
                                                    <script type="text/javascript" >
                                                    
                                                        $(document).ready(function(){
                            
                                                        $('#goingin').modal('show'); 
                                                        });
                                                        </script>
                                                    @endif
                                                        <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_id_type_in">ID Type</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_id_type_in"  name="pass_id_type" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_id_type')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_id_num_in">ID Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_id_num_in" name="pass_id_num" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_id_num')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_trans_mode_in">Mode of Transport</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_trans_mode_in" name="pass_trans_mode" placeholder="">
                                                <small id="help" class="form-text text-muted">e.g. Walking, Delivery Vehicle, PUV, Private Vehicle, Company Vehicle, etc.</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_trans_mode')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_plate_num_in">Vehicle Plate Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_plate_num_in" name="pass_plate_num" placeholder="" >
                                                <small id="help" class="form-text text-muted">If none, please indicate '-'</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_plate_num')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="pass_purpose_in">Purpose</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" id="pass_purpose_in" name="pass_purpose" rows="3" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-10">
                                            @error('pass_purpose')
                                                <small style="color: red;">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="pass_des_in">Destination</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" id="pass_des_in" name="pass_des" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-10">
                                            @error('pass_des')
                                                <small style="color: red;">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_border_in">Border</label>
                                            </div>
                                            <div class="col-8">
                                                <select id="pass_border_in" name="pass_border" class="form-control" style="width:100%" >
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_border')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="hidden" name="pass_ingoing_or_outgoing" value="0">
                                
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                        </form>
                    </div>

                    
                    </div>
                </div>
            </div>

            <!-- Going out Modal -->
            <div class="modal fade" id="goingout" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Passerby Form (Going Out)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="/ledger" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_first_name_out">First Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_first_name_out" name="pass_first_name_out" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_first_name_out')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_last_name_out">Last Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_last_name_out" name="pass_last_name_out" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_last_name_out')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_age_out">Age</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_age_out" name="pass_age_out" placeholder="" >
                                            </div>
                                            <!-- @error('pass_age_out')

                                            {{-- Shows the modal immediately after failed validation/redirect --}}
                                                @if (count($errors) > 0)
                                                <script type="text/javascript" >
                                                
                                                    $(document).ready(function(){
                        
                                                    $('#goingout').modal('show'); 
                                                    });
                                                    </script>
                                                @endif
                                                    <strong>{{ $message }}</strong>
                                            @enderror -->
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_age_out')
                                                {{-- Shows the modal immediately after failed validation/redirect --}}
                                                    @if (count($errors) > 0)
                                                    <script type="text/javascript" >
                                                    
                                                        $(document).ready(function(){
                            
                                                        $('#goingout').modal('show'); 
                                                        });
                                                        </script>
                                                    @endif
                                                        <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_id_type_out">ID Type</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_id_type_out" name="pass_id_type_out" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_des_out')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_id_num_out">ID Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_id_num_out" name="pass_id_num_out" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_id_num_out')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_trans_mode_out">Mode of Transport</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_trans_mode" name="pass_trans_mode" placeholder="">
                                                <small id="help" class="form-text text-muted">e.g. Walking, Delivery Vehicle, PUV, Private Vehicle, Company Vehicle, etc.</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_trans_mode_out')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_plate_num_out">Vehicle Plate Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_plate_num_out" name="pass_plate_num_out" placeholder="" >
                                                <small id="help" class="form-text text-muted">If none, please indicate '-'</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_plate_num_out')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="pass_purpose_out">Purpose</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" id="pass_purpose_out" name="pass_purpose_out" rows="3" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-10">
                                            @error('pass_purpose_out')
                                                <small style="color: red;">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="pass_des">Destination</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" id="pass_des" name="pass_des" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-10">
                                            @error('pass_des_out')
                                                <small style="color: red;">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_border_out">Border</label>
                                            </div>
                                            <div class="col-8">
                                                <select id="pass_border_out" name="pass_border_out" class="form-control" style="width:100%" ></select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('pass_border_out')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="pass_ingoing_or_outgoing" value="1">
                                
                                
                                
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                        </form>
                    </div>

                   
                    </div>
                </div>
            </div>
            {{-- Table of Passerby Entries with Pagination --}}
            <div class="container mt-2 mb-3">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h4 class="text-center mb-5"> Passerby Entries </h4>
                        <table class="table table-striped mt-2">
                            <thead>
                                <th> Date Time</th>
                                <th> Border Name</th>
                                <th> Full Name</th>
                                <th> Direction</th>
                                <th> Plate Number</th>
                                <th> </th>
                            </thead>
                            <tbody>
                                @foreach($passerby as $passerbys)
                                <tr>
                                    <td>{{$passerbys->created_at->format('F j,Y h:i:s a') }}</td>
                                    <td>{{$passerbys->pass_border}}</td> 
                                    <td>{{$passerbys->pass_first_name}} {{$passerbys->pass_last_name}}</td>
                                    <td>
                                        @if ($passerbys->pass_ingoing_or_outgoing==0)
                                        Ingoing
                                        @else 
                                        Outgoing
                                        @endif
                                    </td>
                                    </td>
                                    <td>{{$passerbys->pass_plate_num}} </td>
                                    <!-- View Button Trigger -->
                                    <td>
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewDetails{{$passerbys->id}}">VIEW</button>
                                        <!-- View Modal -->
                                        <div class="modal fade" id="viewDetails{{$passerbys->id}}" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <!-- View Content -->
                                                <div class="modal-content">
                                                    <!-- View Header -->
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="exampleModalLongTitle">{{$passerbys->pass_first_name}} {{$passerbys->pass_last_name}}'s Form</h2>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <!-- View Body -->
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">First Name:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->pass_first_name}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">Last Name:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->pass_last_name}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">Age:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->pass_age}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">ID Type:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->pass_id_type}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">ID Number:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->pass_id_num}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">Mode of Transport:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->pass_trans_mode}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">Vehicle Plate Number:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->pass_plate_num}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">Purpose:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->pass_purpose}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">Destination:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->pass_des}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">Border:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->pass_border}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- End of View Body -->
                                                </div>
                                                <!-- End of View Content -->
                                            </div>
                                        </div>
                                        <!-- End of View Modal -->
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $passerby->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
    
    </script>

@endsection

