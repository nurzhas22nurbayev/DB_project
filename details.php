<?php 
  include 'action.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDU team</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

</head>

<body class="bg-info">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="#">MOVIE STOCK</a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Main</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="prochart/charts.php">Graphs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
      </div>
      
      <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-info" type="submit">Search</button>
      </form>
    </nav>

    
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-3 bg-light p-4 rounded">
                <h3 class="bg-light p-2 rounded text-center text-dark">Movies details</h3>
                    <h3 class="bg-primary p-2 rounded text-center text-light">ID : # <?= $v_id; ?></h3>
                    <div class="text-center">
                        <img src= <?= $v_poster; ?> width="300px" class="img-thumbnail">
                    </div>
                    <h4 class="text-dark">Title : <?= $v_title; ?></h4>
                    <h4 class="text-dark">Cast : <?= $v_cast; ?></h4>
                    <h4 class="text-dark">Date added : <?= $v_date_add; ?></h4>
                    <h4 class="text-dark">Listed in   : <?= $v_listed_in; ?></h4>
                    <h4 class="text-dark">Description : <?= $v_description; ?></h4>
                    
                </div>    
            </div>
        </div>

</body>
</html>