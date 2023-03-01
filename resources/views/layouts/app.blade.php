<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ihsan Haryansyah</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('/assets/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('/assets/plugins/DataTables/datatables.min.css') }}" rel="stylesheet">

    <!-- trix editor -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('/assets/js/trix.js') }}"></script>

    @stack('css-plugins')

</head>
<body>

    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
          <span class='sr-only'>Loading...</span>
        </div>
    </div>

    <div class="page-container">

    @include('components.navbar')
        
        <div class="page-content">
            <div class="main-wrapper">
                
                @yield('content')
                
            </div>
        </div>
    </div>

    {{-- @include('components.footer') --}}

    <!-- Javascripts -->
    <script src="{{ asset('/assets/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="{{ asset('/assets/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/assets/js/main.min.js') }}"></script>
    <script src="{{ asset('/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('/assets/plugins/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('/assets/js/pages/datatables.js') }}"></script>

    @stack('javascript-plugins')
    
</body>
</html>