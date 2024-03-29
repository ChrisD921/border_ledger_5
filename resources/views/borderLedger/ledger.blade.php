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
                                                <label for="first_name_in">First Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="first_name_in" name="first_name" placeholder="" value="{{old('first_name')}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('first_name')
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
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="last_name_in">Last Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="last_name_in" name="last_name" placeholder="" value="{{old('last_name')}}" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('last_name')
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
                                                <label for="age_in">Age</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="age_in" name="age" placeholder="" value="{{old('age')}}" >
                                            </div>
                                            <!-- @error('age')
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
                                                @error('age')
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
                                                <label for="id_type_in">ID Type</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="id_type_in"  name="id_type" placeholder="" value="{{old('id_type')}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('id_type')
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
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="id_num_in">ID Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="id_num_in" name="id_num" placeholder="" value="{{old('id_num')}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('id_num')
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
                                                <label for="trans_mode_in">Mode of Transport</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="trans_mode_in" name="trans_mode" placeholder="" value="{{old('trans_mode')}}">
                                                <small id="help" class="form-text text-muted">e.g. Walking, Delivery Vehicle, PUV, Private Vehicle, Company Vehicle, etc.</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('trans_mode')
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
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="plate_num_in">Vehicle Plate Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="plate_num_in" name="plate_num" placeholder="" value="{{old('plate_num')}}">
                                                <small id="help" class="form-text text-muted">If none, please indicate '-'</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('plate_num')
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

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="purpose_in">Purpose</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" id="purpose_in" name="purpose" rows="3" >{{old('purpose')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-10">
                                            @error('purpose')
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

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="destination_in">Destination</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" id="destination_in" name="destination" rows="3">{{old('destination')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-10">
                                            @error('destination')
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

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="border_name_in">Border</label>
                                            </div>
                                            <div class="col-8">
                                                <select id="border_name_in" name="border_name"  class="form-control" style="width:100%" >
                                                     {{-- This code shows the previously selected border_name so the users don't have to input it again! --}}
                                                    @if(Request::old('border_name') != NULL)
                                                        <option value="{{Request::old('border_name')}}"> {{Request::old('border_name')}}</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('border_name')
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
                                
                                <input type="hidden" name="direction" value="0">
                                
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
                                                <label for="first_name_out">First Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="first_name_out" name="first_name_out" placeholder="" value="{{old('first_name_out')}}" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('first_name_out')
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
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="last_name_out">Last Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="last_name_out" name="last_name_out" placeholder="" value="{{old('last_name_out')}}" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('last_name_out')
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
                                                <label for="age_out">Age</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="age_out" name="age_out" placeholder="" value="{{old('age_out')}}">
                                            </div>
                                            <!-- @error('age_out')

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
                                                @error('age_out')
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
                                                <label for="id_type_out">ID Type</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="id_type_out" name="id_type_out" placeholder="" value="{{old('id_type_out')}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('id_type_out')
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
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="id_num_out">ID Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="id_num_out" name="id_num_out" placeholder="" value="{{old('id_num_out')}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('id_num_out')
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
                                                <label for="trans_mode_out">Mode of Transport</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="trans_mode" name="trans_mode_out" placeholder="" value="{{old('trans_mode_out')}}">
                                                <small id="help" class="form-text text-muted">e.g. Walking, Delivery Vehicle, PUV, Private Vehicle, Company Vehicle, etc.</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('trans_mode_out')
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
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="plate_num_out">Vehicle Plate Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="plate_num_out" name="plate_num_out" placeholder="" value="{{old('plate_num_out')}}" >
                                                <small id="help" class="form-text text-muted">If none, please indicate '-'</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('plate_num_out')
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

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="purpose_out">Purpose</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" id="purpose_out" name="purpose_out" rows="3" >{{old('purpose_out')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-10">
                                            @error('purpose_out')
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

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="destination">Destination</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" id="destination" name="destination_out" rows="3">{{old('destination_out')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-10">
                                            @error('destination_out')
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

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="border_name_out">Border</label>
                                            </div>
                                            <div class="col-8">
                                                <select id="border_name_out" name="border_name_out" class="form-control" style="width:100%" >
                                                       {{-- This code shows the previously selected border_name so the users don't have to input it again! --}}
                                                        @if(Request::old('border_name_out') != NULL)
                                                            <option value="{{Request::old('border_name_out')}}"> {{Request::old('border_name_out')}}</option>
                                                          @endif      
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-8">
                                                @error('border_name_out')
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

                                <input type="hidden" name="direction" value="1">
                                
                                
                                
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
                                    <td>{{$passerbys->border_name}}</td> 
                                    <td>{{$passerbys->first_name}} {{$passerbys->last_name}}</td>
                                    <td>
                                        @if ($passerbys->direction==0)
                                        Ingoing
                                        @else 
                                        Outgoing
                                        @endif
                                    </td>
                                    </td>
                                    <td>{{$passerbys->plate_num}} </td>
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
                                                        <h4 class="modal-title" id="exampleModalLongTitle">{{$passerbys->first_name}} {{$passerbys->last_name}}'s Form</h4>
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
                                                                            <p style="color: blue;">{{$passerbys->first_name}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">Last Name:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->last_name}}</p>
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
                                                                            <p style="color: blue;">{{$passerbys->age}}</p>
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
                                                                            <p style="color: blue;">{{$passerbys->id_type}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">ID Number:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->id_num}}</p>
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
                                                                            <p style="color: blue;">{{$passerbys->trans_mode}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <h5 style="font-size: 15px;">Vehicle Plate Number:</h5>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p style="color: blue;">{{$passerbys->plate_num}}</p>
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
                                                                            <p style="color: blue;">{{$passerbys->purpose}}</p>
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
                                                                            <p style="color: blue;">{{$passerbys->destination}}</p>
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
                                                                            <p style="color: blue;">{{$passerbys->border_name}}</p>
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

