<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin - Booking</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <style>
        .password-toggle {
            cursor: pointer;
        }
    </style>
    @include('admin.assets.css')
</head>

<body>
    <main class="container">
        <div class="pagetitle">
            <h1>Event Manage</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Event Manage</li>
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
                                Event Manage
                                {{-- <button class="btn" style="background-color: #fbfcfd; color: #003049;"
                                    data-bs-toggle="modal" data-bs-target="#addevent">+ ADD
                                    Event</button> --}}
                            </h4>
                        </div>
                        <div class="card-body mt-5">
                            <table id="EventTable">
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
                                        <th scope="col">Booking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $index => $Loc)
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
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="booknow({{ json_encode($Loc) }})" data-bs-toggle="modal"
                                                    data-bs-target="#booknow">book now</button></td>
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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('front.bookingmodal')
    @include('admin.assets.js')
    <script>
        function booknow(data) {

            $('#id').val(data.id);
            $('#eventname').val(data.name);

        }
        $(document).ready(function() {
            $('#EventTable').DataTable({
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
</body>

</html>
