@php
    $act4 = true;
@endphp
@extends('admin.assets.layout')

@section('title', 'Address')

@push('css')
@endpush

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Address Manage</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Address Manage</li>
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
                                Address Manage
                                <button class="btn" style="background-color: #fbfcfd; color: #003049;"
                                    data-bs-toggle="modal" data-bs-target="#addaddress">+ ADD
                                    Address</button>
                            </h4>
                        </div>
                        <div class="card-body mt-5">
                            <table id="addressTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">No.</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($address as $index => $cate)
                                        <tr>
                                            <td>{{ $cate->id }}</td>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $cate->address }}</td>
                                            <td>
                                                <button class="btn btn-success btn-sm"
                                                    onclick="editaddress({{ $cate }})" data-bs-toggle="modal"
                                                    data-bs-target="#editaddress">Edit</button>
                                                <form action="{{ route('address.destroy', $cate->id) }}" method="POST"
                                                    style="display:inline-block;">
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
    @include('admin.addressmodal')
@endsection

@push('js')
    <script>
        function editaddress(cate) {
            $('#addressedit').attr('action', '/address/' + cate.id);
            $('#eaddress').val(cate.address);
        }
        $(document).ready(function() {
            $('#addressTable').DataTable({
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
