@extends('layouts.app')


@section('content')

    @push('css-plugins')
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
    @endpush

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('components.navbar_admin')

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h6 class="page-title">Edit User: {{ $user->name }}</h6>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Manajemen User</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            @foreach ($errors->all() as $error)
                                <strong>{{ $error }}</strong><br>
                            @endforeach
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}

                                    <div class="mb-3">
                                        <label class="form-label" for="name">Nama Lembaga :</label>
                                        {!! Form::text('name', null, ['placeholder' => 'Nama Lembaga', 'class' => 'form-control']) !!}
                                    </div>

                                    <div style="margin-bottom: 70px;">
                                        <label class="form-label" for="role">Role :</label><br>
                                        {!! Form::select('roles[]', $roles, $userRole, ['class' => 'form-control', 'multiple']) !!}
                                    </div>

                                    <div class="my-3">
                                        <label class="form-label" for="email">Email :</label><br>
                                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password :</label>
                                        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="confirm-password">Konfirmasi Password :</label><br>
                                        {!! Form::password('confirm-password', ['placeholder' => 'Konfirmasi Password', 'class' => 'form-control']) !!}
                                    </div>



                                    <button type="submit" class="btn btn-primary">
                                        Simpan
                                    </button>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @include('components.footer_admin')

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @push('javascript-plugins')
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <!-- form repeater js -->
        <script src="{{ asset('assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
    @endpush

@endsection
