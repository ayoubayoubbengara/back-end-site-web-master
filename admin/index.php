<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">CRUD APP</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">featurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">about</a>
      </li>
    </ul>
  </div>
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-primary" type="submit">Search</button>
  </form>
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center text-dark mt-2" >Advanced CRUD APP</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center text-info">Add record</h3>
            <form action="action.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                </div>
                <div class="form-group">
                    <input type="text" name="dat" class="form-control" placeholder="Enter date" required>
                </div>
                <div class="form-group">
                    <input type="text" name="paragraph" class="form-control" placeholder="Enter paragraph" required>
                </div>
                <div class="from-group">
                    <input type="file" name="image" class="custom-file">
                </div>
                <div class="form-group">
                    <input type="submit" name="add" class="btn btn-primary btn-block" value="add record">
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <h3 class="text-center text-info">Records Present in the Database</h3>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>image</th>
                    <th>title</th>
                    <th>date</th>
                    <th>paragraph</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="" width="25"></td>
                    <td>new coffee</td>
                    <td>October 13, 2013</td>
                    <td>Take the edge off with a fresh hot cup of coffee make with Irish whiskey and Irish cream.</td>
                    <td>
                        <a href="#" class="badge badge-primary p-2">Details</a> |
                        <a href="#" class="badge badge-danger p-2">Delete</a> |
                        <a href="#" class="badge badge-success p-2">Edit</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
</body>
</html>