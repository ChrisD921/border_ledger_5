@extends('layouts.app')

@section('content')

<div class="profile">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card bg-secondary  align-item-center">
                <h5 class="card-header">Profile</h5>
                <div class="card-body">
                    <h5 class="card-title">User</h5>
                    {{-- <p class="card-text">details...</p> --}}
                    Name: {{$personnel->first_name}} {{$personnel->last_name}} <br>
                    Date of Birth: {{$personnel->date_of_birth}} <br>
                    Password: {{ $personnel->password}};
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

@endsection