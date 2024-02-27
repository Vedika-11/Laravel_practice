<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form action="{{route('teacher.update',$teacher->id)}}" method="post">
            @csrf
            <div class="container">
            <h3>Edit Teacher Data Here</h3>
            <label >Name:</label>
            <input type="text" name="name" value="{{$teacher->name}}" class="form-control">
            <label >Email:</label>
            <input type="text" name="email" value="{{$teacher->email}}" class="form-control">
            <label >Phone:</label>
            <input type="number" name="phone" value="{{$teacher->phone}}" class="form-control">
            <br><br>
            <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>