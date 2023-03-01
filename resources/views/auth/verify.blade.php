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
                                <h6 class="page-title">Verifikasi Alamat Email Anda</h6>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4" style="color: black">Verifikasi Email</h4>


                                    {{ __('Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.') }}
                                    <br>
                                    {{ __('Jika Anda tidak menerima email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-link p-0 m-0 align-baseline">{{ __('klik disini untuk mengirim ulang tautan') }}</button>
                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        {{-- @include('components.footer_admin') --}}

    </div>
    <!-- end main content-->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @push('javascript-plugins')
        <div class=""></div>
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
