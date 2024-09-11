@php
    $act2 = true;
@endphp
@extends('admin.assets.layout')

@section('title', 'Category')

@push('css')
<!-- Add any additional CSS you need here -->
@endpush

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Category Manage</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Category Manage</li>
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
                            Category Manage
                            <button class="btn" style="background-color: #fbfcfd; color: #003049;"
                                data-bs-toggle="modal" data-bs-target="#addcategory">+ ADD
                                Category</button>
                        </h4>
                    </div>
                    <div class="card-body mt-5">
                        <table id="categoryTable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $index => $cate)
                                <tr>
                                    <td>{{ $cate->id }}</td>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $cate->category }}</td>
                                    <td>
                                        <button class="btn btn-success btn-sm" onclick="editcategory({{ $cate }})" data-bs-toggle="modal" data-bs-target="#editcategory">Edit</button>
                                        <form action="{{ route('category.destroy', $cate->id) }}" method="POST" style="display:inline-block;">
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
@include('admin.categorymodal')
@endsection

@push('js')
<script>
     function editcategory(cate) {
        $('#categoryedit').attr('action', '/category/' + cate.id);
        $('#eCategory').val(cate.category);
    }
$(document).ready(function() {
    $('#categoryTable').DataTable({
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
