@php
    $act5 =true;
@endphp
@extends('admin.assets.layout')

@section('title', 'Event')

@push('css')
@endpush

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Location Manage</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Location Manage</li>
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
                            Location Manage
                            <button class="btn" style="background-color: #fbfcfd; color: #003049;"
                                data-bs-toggle="modal" data-bs-target="#addevent">+ ADD
                                Location</button>
                        </h4>
                    </div>
                    <div class="card-body mt-5">
                        <table id="LocationTable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">category</th>
                                    <th scope="col">location</th>
                                    <th scope="col">address</th>
                                    <th scope="col">time</th>
                                    <th scope="col">date</th>
                                    <th scope="col">status</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($event as $index => $Loc)
                                <tr>
                                    <td>{{ $Loc->id }}</td>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $Loc->name }}</td>
                                    <td>{{ $Loc->description }}</td>
                                    <td>{{ $Loc->category }}</td>
                                    <td>{{ $Loc->location }}</td>
                                    <td>{{ $Loc->address }}</td>
                                    <td>{{ $Loc->time }}</td>
                                    <td>{{ $Loc->date }}</td>
                                    <td>{{ $Loc->status == 0? 'active' : 'deactive' }}</td>
                                    <td>
                                        <button class="btn btn-success btn-sm">Edit</button>
                                        <button class="btn btn-primary btn-sm" >Status</button>
                                        <form action="{{ route('location.destroy', $Loc->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
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
@include('admin.eventmodal')

@endsection

@push('js')
<script>
$(document).ready(function() {
    $('#LocationTable').DataTable({
        "processing": true,
        "paging": true,
        "searching": true,
        "columnDefs": [
            { "visible": false, "targets": 0 } // Hides the Id column (column 0)
        ]
    });
});
</script>
@endpush
