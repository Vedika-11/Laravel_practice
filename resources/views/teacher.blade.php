<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="{{route('teacher.store')}}" method="post">
        @csrf
        <div class="container">
        <h2 class="text-center">Teachers Registration</h2>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name Here">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Enter Your Email Here">
        </div>
        <div class="form-group">
            <label>Phone Number:</label>
            <input type="number" class="form-control" name="phone" placeholder="Enter Your Name Here">
        </div>
        <br>
        <div class="form-group text-center">
        <button tybe="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </div>
        </div>
    </form>
    
</body>
</html>