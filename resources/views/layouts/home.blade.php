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
        
        <!-- Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="/borderLedger/index">{{config('app.name','Border Ledger')}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/borderLedger/ledger">Ledger</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="/borderLedger/profile">Profile</a>
                                <a class="dropdown-item" href="/borderLedger/index">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <section>
            @yield('content');
        </section>

        <footer class="fixed-bottom">
            Copyright 2020 BorderLedger5
        </footer>

        <script type="text/javascript" src="/js/app.js"></script>
        <!-- <script src="{{Config::get('app.url')}}/node/node_modules/select2.dist/js/select2.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudfare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        
    </body>

</html>