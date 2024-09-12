<!DOCTYPE html>
<html>

<head>
    <title>Booking Confirmation</title>
</head>

<body>
    <h1>Booking details</h1>
    <p><strong>Event:</strong> {{ $data->name }}</p>
    <p><strong>time:</strong> {{ $data->time }}</p>
    <p><strong>date:</strong> {{ $data->date }}</p>
    <p><strong>category:</strong> {{ $data->category }}</p>
    <p><strong>location:</strong> {{ $data->location }}</p>
    <p><strong>address:</strong> {{ $data->address }}</p>
    <p><strong>description:</strong> {{ $data->description }}</p>


    <h1>Booking Confirmation</h1>
    <p><strong>Name:</strong> {{ $booking->name }}</p>
    <p><strong>Email:</strong> {{ $booking->email }}</p>
    <p><strong>Phone:</strong> {{ $booking->phone }}</p>
    <p><strong>Number of People:</strong> {{ $booking->num_people }}</p>
    <p><strong>Message:</strong> {{ $booking->massage }}</p>

    <a href="{{ url('/') }}/confirm/{{ $booking->id }}">confirm now</a>
</body>

</html>
