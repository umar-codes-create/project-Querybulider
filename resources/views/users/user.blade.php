<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <h1>Update User Data</h1>
            <form action="{{Route('update.user',$data->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" value="{{$data->name}}" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text"  value="{{$data->email}}" class="form-control" name="useremail">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number"  value="{{$data->age}}" class="form-control" name="userage">
                </div>
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text"   value="{{$data->city}}"class="form-control" name="usercity">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</body>
</html>