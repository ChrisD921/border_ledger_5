@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div>
            <img class="img" src="/img/BorderLedger5.png" alt="BorderLedger5Logo">
        </div>
        
        <div class="description" style="margin: 20px 10px">
            <p>During a community quarantine, people are not allowed to travel across the cities and municipalities except for a few exceptions. Although there are only few people going in and out of the boundary, it is very important to have a record of them going in and out the borders. This is to ensure that they legally pass the border, and to know how to find them if something happened.
                <br><br>
                The web app will be used by the personnel who are guarding the border. It allows them to encode details of people who are going in and out of the border such as name, ID Card, purpose, where they are going. </p>
        </div>
 
        <div>
            <a href="/management">Add a Personnel Account</a><br>
            <a href="/ledger">Add a Passerby Entry</a><br>
        </div>
    </div>
</div>
@endsection
