<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"><link rel="stylesheet" href="assets/css/style.css">
<title>Show</title>
</head>
<body>
    <div class="container-fluid">
        <div class="alert alert-success">
            <h1 class="tex-center">CRUD SHOW</h1>
    </div>
    <table class="table table-primary">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($users as $users)
                <tr>
                    <td>{{$users->id}}</td>
                    <td>{{$users->Name}}</td>
                    <td>{{$users->Email}}</td>
                    <td>
                        <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        <a href="edit" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>