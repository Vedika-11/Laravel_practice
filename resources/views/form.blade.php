<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New Student</h1>
                <form action="forminsert" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label class="form-lable">Name:</label>
                    <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                    <label class="form-lable">Email:</label>
                    <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                    <label class="form-lable">Age:</label>
                    <input type="text" class="form-control" name="age">
                    </div>
                    <div class="mb-3">
                    <label class="form-lable">Phone:</label>
                    <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="mb-3">
                    <label class="form-lable">Address:</label>
                    <input type="text" class="form-control" name="address">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>