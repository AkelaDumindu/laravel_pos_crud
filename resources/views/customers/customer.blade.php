<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Customer Page</h1>
    <hr>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Designation</th>
                    <th>Age</th>
                    <th>Modification</th>
                    <th>Delete Data</th>
                </tr>
            </thead>
            <tbody>

            @foreach($customers as $customer)
                <tr>
                    <td> {{$customer->id}} </td>
                    <td> {{$customer->name}} </td>
                    <td> {{$customer->address}} </td>
                    <td> {{$customer->designation}} </td>
                    <td> {{$customer->age}} </td>
                    <td>
                        <a href="{{route('customers.modify',['customer'=>$customer])}}" class="btn btn-warning btn-sm">Update</a>
                    </td>
                    <td>
                    <form action="{{ route('customers.delete', ['customer' => $customer->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this customer?');" style="display: inline;">
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
</body>
</html>