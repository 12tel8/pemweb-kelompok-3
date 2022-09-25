<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Flight-Form</title>
</head>
<body>
    <form action="{{route('Flight')}}">
        @csrf
        <div class="">
            <label for=""></label>
            <input type="text">
        </div>
    </form>
</body>
</html>