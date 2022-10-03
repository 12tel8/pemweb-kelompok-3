<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action={{route('admin/flight')}} method="POST">
        @csrf
        <div>
            <label for="airline_name">Airline Name</label>
            <input type="text" name="airline_name" id="airline_name">
        </div>
        <div>
            <label for="plane_id">Plane Code</label>
            <input type="text" name="plane_id" id="plane_id">
        </div>
        <div>
            <label for="plane_name">Plane Name</label>
            <input type="text" name="plane_name" id="plane_name">
        </div>
        <div>
            <label for="from_location">From Location</label>
            <input type="text" name="from_location" id="from_location">
        </div>
        <div>
            <label for="to_location">To Location</label>
            <input type="text" name="to_location" id="to_location">
        </div>
        <div>
            <label for="departure_time">Departure Time</label>
            <input type="datetime-local" name="departure_time" id="departure_time">
        </div>
        <div>
            <label for="arrival_time">Arrival Time</label>
            <input type="datetime-local" name="arrival_time" id="arrival_time">
        </div>
        <div>
            <label for="seat_class">Seat Class</label>
            <input type="text" name="seat_class" id="seat_class">
        </div>
        <div>
            <label for="seats">Seats Number</label>
            <input type="text" name="seats" id="seats">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price">
        </div>
        <div>
            <label for="discount">Discount</label>
            <input type="text" name="discount" id="discount">
        </div>
        <div>
            <label for="refund">Refund</label>
            <input type="text" name="refund" id="refund">
        </div>
        <div>
            <input type="submit">
        </div>
        
    </form>

    @foreach ($flights as $flight)
    <p>flight id {{ $flight->id }}</p>
    <br>
    @endforeach
</body>
</html>