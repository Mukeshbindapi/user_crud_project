<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <a href="{{ url('user/create') }}" class="btn btn-primary">Add User</a>
        <a href="{{ url('logout') }}" class="btn btn-danger m-2" style="float: right">Logout</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Index</th>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                    <tr class="@if($user->id == Auth::id()) {{ 'table-warning' }} @endif">
                        <td>{{ $key+1 }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->mobile_no }}</td>
                        <td>
                            <a href="{{ url('user/edit/' . $user->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('user/delete/' . $user->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
