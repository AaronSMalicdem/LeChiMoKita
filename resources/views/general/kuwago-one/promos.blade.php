<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Promos</title>
        {{-- BOOTSTRAP --}}
        <script src="{{ url('assets/js/chart.umd.js') }}"></script>
        <link href="{{ url('assets/css/promos.css') }}" rel="stylesheet" />
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        {{-- END OF BOOTSTRAP --}} {{-- FONT AWESOME --}}
        <link rel="stylesheet" href="{{url('fontawesome/css/all.min.css')}}" />
        {{-- END OF FONT AWESOME --}}
    </head>
<body>
    <div class="container-fluid">
        <!-- Navbar -->
        @include('general.navbar')
        <!-- /.navbar -->

        @include('general.kuwago-one.promos-content')
    </div>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</body>
</html>