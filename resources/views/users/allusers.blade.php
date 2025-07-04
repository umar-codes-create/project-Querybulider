<!-- resources/views/alluser.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <style>
        nav .w-5{
            display:none;
        }
    </style>
</head>
<body>
 <div class="container mt-5"> 
    <h1>All User List</h1>
    <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New User</a>
 <table class="table table-bordered table-striped">
        <thead class="table-dark">
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
        </thead>
        <tbody>
            @foreach ($data as $id  => $user)
           
                 <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->city }}</td>
                 <td><a href="{{ route('view.user', $user->id) }}" class="btn btn-primary btn-sm">View</a></td>
                    <td><a href="{{ route('delete.user', $user->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                    <td><a href="{{ route('update.page', $user->id) }}" class="btn btn-warning btn-sm">Update</a></td> 
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-5">
        {{$data->links('pagination::bootstrap-5')}}
    </div>
</div> 
</body>
</html>  
