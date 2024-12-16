<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Gradient Header Style */
.gradient-header {
    background: linear-gradient(to right, #FF7E5F, #FEB47B); /* Gradient from pink to orange */
    text-align: center;
    padding: 50px 0; /* Adjust height of the header */
    color: white;
}

.gradient-header h1 {
    font-family: 'Arial', sans-serif;
    font-size: 3em;
    font-weight: bold;
}

</style>
<title>CRUD</title>
</head>
<body>

<header class="gradient-header ">
        <h1 class="mt-3">FORM</h1>
    </header>
    <div class="form " >
    <form action="crud/store" method="post" class= mt-4>
        <label for="" >Name</label>
        <input type="text" class="form-control class= mt-2">
        <label for="">Email</label>
        <input type="mail" class="form-control class= mt-2">
        <input type="submit" class="btn btn-lg btn-primary">
    </form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>