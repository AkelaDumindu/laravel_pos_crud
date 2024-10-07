<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="{{route('customers.add')}}">
@csrf
@method('post')
    <div class="outer" style="margin: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" placeholder="Akela" name="name" id="name">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="name">Address</label>
                        <input class="form-control" type="text" placeholder="Galle" name="address" id="address">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="name">Designation</label>
                        <input class="form-control" type="text" placeholder="Software Engineer" name="designation" id="designation">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="name">Age</label>
                        <input class="form-control" type="number" placeholder="24" name="age" id="age">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <br>
                        <input class="btn btn-primary col-12" type="submit" value="Save Customer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>