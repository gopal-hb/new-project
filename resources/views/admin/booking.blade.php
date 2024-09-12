@php
    $act6 = true;
@endphp
@extends('admin.assets.layout')

@section('title', 'Event')

@push('css')
@endpush

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Booking Manage</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Booking Manage</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" style="background: #003049;">
                            <h4 class="p-0 card-title d-flex align-items-center justify-content-between"
                                style="color:#f6f9ff;">
                                Booking Manage
                                {{-- <button class="btn" style="background-color: #fbfcfd; color: #003049;"
                                    data-bs-toggle="modal" data-bs-target="#addlocation">+ ADD
                                    Location</button> --}}
                            </h4>
                        </div>
                        <div class="card-body mt-5">
                            <table id="BookingTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">No.</th>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Massage</th>
                                        <th scope="col">Num people</th>
                                        <th scope="col">Comformation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $book)
                                        <tr>
                                            <td>
                                                {{ $book->id }}
                                            </td>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ $book->event_name }}
                                            </td>
                                            <td>
                                                {{ $book->name }}
                                            </td>
                                            <td>
                                                {{ $book->email }}
                                            </td>
                                            <td>
                                                {{ $book->phone }}
                                            </td>
                                            <td>
                                                {{ $book->massage }}
                                            </td>
                                            <td>
                                                {{ $book->num_people }}
                                            </td>
                                            <td>
                                                {{ $book->status == 0 ? 'pending' : 'done' }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                        <div class="card-footer" style="background: #003049;"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#BookingTable').DataTable({
                "processing": true,
                "paging": true,
                "searching": true,
                "columnDefs": [{
                        "visible": false,
                        "targets": 0
                    } // Hides the Id column (column 0)
                ]
            });
        });
    </script>
@endpush
