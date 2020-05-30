@extends('layouts.app')

@section('content')

    <section class="jumbotron text-center">
        <div class="jumbotron">
          <h1 class="jumbotron-heading">Border Ledger</h1>
          <p class="msg"> {{ session('redirect_msg') }}</p>
            <!-- Button triggers -->
            <a href="#" class="btn btn-primary my-2" data-toggle="modal" data-target="#goingin">IN</a>
            <a href="#" class="btn btn-danger my-2" data-toggle="modal" data-target="#goingout">OUT</a>
          
            <!-- Going in Modal -->
            <div class="modal fade" id="goingin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <input type="text" class="form-control" id="pass_first_name_in" name="pass_first_name" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_last_name_in">Last Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_last_name_in" name="pass_last_name" placeholder="">
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
                                                <input type="text" class="form-control" id="pass_age_in" name="pass_age" placeholder="">
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
                                                <input type="text" class="form-control" id="pass_id_type_in"  name="pass_id_type" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_id_num_in">ID Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_id_num_in" name="pass_id_num" placeholder="">
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
                                                <select id="pass_trans_mode_in" name="pass_trans_mode" class="form-control">
                                                    <option value="">Choose...</option>
                                                    <option value="1">Walking</option>
                                                    <option value="2">Delivery Vehicle</option>
                                                    <option value="3">PUV</option>
                                                    <option value="4">Private Vehicle</option>
                                                    <option value="5">Company Vehicle</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_plate_num_in">Vehicle Plate Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_plate_num_in" name="pass_plate_num" placeholder="">
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
                                        <textarea class="form-control" id="pass_purpose_in" name="pass_purpose" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_des_in">Destination</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_des_in" name="pass_des" placeholder="">
                                            </div>
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
                                                <select id="pass_border_in" name="pass_border" class="form-control" style="width:100%">
                                                    <option value="">Select Border...</option>
                                                    <option value="1">A.S. Fortuna St. (boun. Banilad)</option>
                                                    <option value="2">Panagdait (boun. H. Cortes/Bridge)</option>
                                                    <option value="3">M.I. Quezon (boun. Cabancalan-Talamban)</option>
                                                </select>
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
            <div class="modal fade" id="goingout" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <label for="pass_first_name">First Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_first_name" name="pass_first_name" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_last_name">Last Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_last_name" name="pass_last_name" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_age">Age</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_age" name="pass_age" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_id_type">ID Type</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_id_type" name="pass_id_type" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_id_num">ID Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_id_num" name="pass_id_num" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_trans_mode">Mode of Transport</label>
                                            </div>
                                            <div class="col-8">
                                                <select id="pass_trans_mode" name="pass_trans_mode" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Walking</option>
                                                    <option value="2">Delivery Vehicle</option>
                                                    <option value="3">PUV</option>
                                                    <option value="4">Private Vehicle</option>
                                                    <option value="5">Company Vehicle</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_plate_num">Vehicle Plate Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_plate_num" name="pass_plate_num" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="pass_purpose">Purpose</label>
                                        </div>
                                        <div class="col-10">
                                        <textarea class="form-control" id="pass_purpose" name="pass_purpose" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="pass_des">Destination</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="pass_des" name="pass_des" placeholder="">
                                            </div>
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
                                                <select id="pass_border_out" name="pass_border" class="form-control" style="width:100%">
                                                    <option selected>Select Border...</option>
                                                    <option value="1">A.S. Fortuna St. (boun. Banilad)</option>
                                                    <option value="2">Panagdait (boun. H. Cortes/Bridge)</option>
                                                    <option value="3">M.I. Quezon (boun. Cabancalan-Talamban)</option>
                                                </select>
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
                                    <td>{{$passerbys->created_at}}</td>
                                    <td>Border</td> 
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
                                    <td>
                                        <a id="viewBtn" type="button" class="btn btn-info" data-toggle="modal" data-target="#viewDetails{{$passerbys->id}}">VIEW</a>
                                    </td>

                                    <div class="modal fade" id="viewDetails{{$passerbys->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$passerbys->pass_first_name}} {{$passerbys->pass_last_name}}'s Form</h5>
                                                    {{-- <h5 class="modal-title" id="viewTitle"></h5> --}}
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Age: {{$passerbys->pass_age}}</li>
                                                        <li class="list-group-item">ID Type: {{$passerbys->pass_id_type}}</li>
                                                        <li class="list-group-item">Id Number: {{$passerbys->pass_id_num}}</li>
                                                        <li class="list-group-item">Mode of Transport: {{$passerbys->pass_trans_mode}}</li>
                                                        <li class="list-group-item">Vehicle Plate Number: {{$passerbys->pass_plate_num}}</li>
                                                        <li class="list-group-item">Purpose: {{$passerbys->pass_purpose}}</li>
                                                        <li class="list-group-item">Destination: {{$passerbys->pass_des}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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

