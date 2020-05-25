<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','Border Ledger')}}</title>

        <!-- Title Icon -->
        <link rel="icon" href="/img/BorderLedgerIcon.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/app.css">
    
    </head>
    <body>

        @yield('content');

        <footer>
            Copyright 2020 BorderLedger5
        </footer>

    </body>
</html>