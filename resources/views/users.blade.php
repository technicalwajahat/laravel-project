<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users - Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        nav .w-5 {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h1>All Users List</h1>
                <a href="/newUser" class="btn btn-success w-25 btn-sm mb-3">Add New</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->city }}</td>
                            <td><a href="{{ route('view.user', $user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                            <td><a href="{{ route('delete.user', $user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="{{ route('update.page', $user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                        </tr>
                    @endforeach
                </table>
                <div class="mt-5">
                    {{ $data->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>