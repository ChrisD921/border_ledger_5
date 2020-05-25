@extends('layouts.home')

@section('content')

    <section class="jumbotron text-center">
        <div class="jumbotron">
          <h1 class="jumbotron-heading">Border Ledger</h1>

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
                            <form action="/borderLedger/ledger" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputFName">First Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputFName" name="inputFName" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputLName">Last Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputLName" name="inputLName" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputAge">Age</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputAge" name="inputAge" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputIdType">ID Type</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputIdType"  name="inputIdType" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputIdNum">ID Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputIdNum" name="inputIdNum" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputTransMode">Mode of Transport</label>
                                            </div>
                                            <div class="col-8">
                                                <select id="inputTransMode" name="inputTransMode" class="form-control">
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
                                                <label for="inputPlateNum">Vehicle Plate Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputPlateNum" name="inputPlateNum" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="inputPurpose">Purpose</label>
                                        </div>
                                        <div class="col-10">
                                        <textarea class="form-control" id="inputPurpose" name="inputPurpose" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="inputDes">Destination</label>
                                                </div>
                                                <div class="col-8">
                                                    <input type="text" class="form-control" id="inputDes" name="inputDes" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="IngoingOrOutgoing" value="0">
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
                            <form action="/borderLedger/ledger" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputFName">First Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputFName" name="inputFName" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputLName">Last Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputLName" name="inputLName" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputAge">Age</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputAge" name="inputAge" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputIdType">ID Type</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputIdType" name="inputIdType" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputIdNum">ID Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputIdNum" name="inputIdNum" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputTransMode">Mode of Transport</label>
                                            </div>
                                            <div class="col-8">
                                                <select id="inputTransMode" name="inputTransMode" class="form-control">
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
                                                <label for="inputPlateNum">Vehicle Plate Number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputPlateNum" name="inputPlateNum" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-2">
                                            <label for="inputPurpose">Purpose</label>
                                        </div>
                                        <div class="col-10">
                                        <textarea class="form-control" id="inputPurpose" name="inputPurpose" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="inputDes">Destination</label>
                                                </div>
                                                <div class="col-8">
                                                    <input type="text" class="form-control" id="inputDes" name="inputDes" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="IngoingOrOutgoing" value="1">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                        </form>
                    </div>

                   
                    </div>
                </div>
            </div>

            {{-- We'll delete this part later and replace with Pagination 
                This is just testing if the records will display!  --}}
                @foreach ($pass as $passerbys)
                <div class="description">
                
                    
                
                Name: {{$passerbys->inputFName}} {{$passerbys->inputLName}} <br>
                Age: {{$passerbys->inputAge}}
                Id Type: {{$passerbys->inputIdType}} <br>
                Transportation: {{$passerbys->inputTransMode}}   
                Plate Number: {{$passerbys->inputPlateNum}}
                Purpose: {{$passerbys->inputPurpose}} <br> <br>
                Destination: {{$passerbys->inputDes}} <br>
                Ingoing/Outgoing: {{$passerbys->IngoingOrOutgoing}} <br>
                Date of Input: {{$passerbys->created_at}}
                passerbys
        
                </div>
                @endforeach

            
        </div>
    </section>

@endsection