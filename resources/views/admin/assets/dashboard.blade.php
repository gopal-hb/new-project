@extends('admin.assets.layout')

@section('title', 'Dashboard')

@push('css')
    <style>
        @media (min-width: 1300px) and (max-width: 1400px) {
            .card-title {
                font-size: 14px;
            }
        }

        @media (min-width: 1200px) and (max-width: 1300px) {
            .card-title {
                font-size: 13px;
            }
        }
    </style>
@endpush

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Events</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-building"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                @isset($Events)
                                                    {{ $Events }}
                                                @endisset
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Address</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-building-check"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                @isset($Address)
                                                    {{ $Address }}
                                                @endisset
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Category</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-building-dash"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                @isset($Category)
                                                    {{ $Category }}
                                                @endisset
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Location</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-box-seam"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                @isset($Location)
                                                    {{ $Location }}
                                                @endisset
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
    </main><!-- End #main -->
@endsection

@push('js')
@endpush
