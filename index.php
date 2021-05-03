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

<link rel="stylesheet" href="css/demo.css">
  
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand " href="#">MOVIE STOCK</a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav sm-right">
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
      
      <!-- <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-info" type="submit">Search</button>
      </form> -->
    </nav>

    <?php 
      if(isset($_GET['edit']))
      { ?>
        <!-- Modal  adding-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="row">
                <div class="col-md-12">
                <h3 style="padding-top: 25px;" class="text-center text-info">Update Data</h3>
        <br>
        <div class="col-md-12">
                  <form action="action.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <input type="text" name="id" class="form-control" value="<?= $id; ?>" placeholder="Enter id">
                        </div>
                        <div class="form-group">
                          <input type="text" name="type" class="form-control" value="<?= $type; ?>" placeholder="Enter type" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="title" class="form-control" value="<?= $title; ?>" placeholder="Enter title" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="director" class="form-control" value="<?= $director; ?>" placeholder="Enter director" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="country" class="form-control" value="<?= $country; ?>" placeholder="Enter country" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="release_year" class="form-control" value="<?= $release_year; ?>" placeholder="Enter release year" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="rating" class="form-control" value="<?= $rating; ?>" placeholder="Enter rating" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="duration" class="form-control" value="<?= $duration; ?>" placeholder="Enter duration" required>
                        </div>
                        <div class="form-group">
                          <input type="submit" name="update" class="btn btn-success btn-block" value="update">
                        </div>
                  </form>
          </div>
                </div>
              </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

          <script>
            $(document).ready(function() {
              $('#exampleModal').modal('show');
            });
          </script>
    <?php
      }
      else
      { ?>
          <!-- Modal  adding-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="row">
                <div class="col-md-12">
                <h3 style="padding-top: 25px;" class="text-center text-info">Insert Data</h3>
        <br>
        <div class="col-md-12">
                  <form action="action.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="hidden" name="id" class="form-control" placeholder="Enter id">
                    </div>
                    <div class="form-group">
                      <input type="text" name="type" class="form-control" placeholder="Enter type" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="director" class="form-control" placeholder="Enter director" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="country" class="form-control" placeholder="Enter country" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="release_year" class="form-control" placeholder="Enter release year" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="rating" class="form-control" placeholder="Enter rating" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="duration" class="form-control" placeholder="Enter duration" required>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
                    </div>
                  </form>
          </div>
                </div>
              </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <?php  } ?>
    
  
    


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 bg-light rounded my-2 py-2">
                <h4 class="text-center text-dark pt-2">Records In The Database</h4>
                <?php if(isset($_SESSION['response'])){ ?>
                  <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <b><?= $_SESSION['response']; ?></b>
                  </div>
                <?php } unset($_SESSION['response']); ?>
                <hr>

                <!--------- Operations --------->
                <div id="DataTables_Table_0_wrapper"    class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">

                <!--------- Button ADD --------->
                <div class="col-sm-12 col-md-1">
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD</button>
                </div>


                 <!---------- Fields ---------->
              <div class="col-sm-12 col-md-7">
                  <div class="dataTables_length" id="DataTables_Table_0_length">
                    <form action="" method="GET">
                      <label>Country 
                        <select name="s_test1" aria-controls="DataTables_Table_0" 
                          class="custom-select custom-select-sm form-control form-control-sm">
                          <option>all</option>
                          <option value="United States">USA</option>
                          <option value="United Kingdom">UK</option>
                          <option value="Spain">Spain</option>
                          <option value="France">France</option>
                        </select>
                      </label>

                      <label style="padding-left: 55px;">Year
                      <select name="s_test2" aria-controls="DataTables_Table_0" 
                      class="custom-select custom-select-sm form-control form-control-sm">
                      <option>0</option>
                      <option value="1999">1999</option>
                      <option value="2009">2009</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option></select>
                      </label>
                      
                        
                      <label style="padding-left: 55px;">Rating
                      <select name="s_test3" aria-controls="DataTables_Table_0" 
                      class="custom-select custom-select-sm form-control form-control-sm">
                      <option>all</option>
                      <option value="PG-13">PG-13</option>
                      <option value="R">R</option>
                      <option value="TV-MA">TV-MA</option>
                      <option value="TV-14">TV-14</option></select>
                      </label>

                      
                      <button style="margin-left: 25px;" class="btn btn-primary btn-sm">✓</button>

                    </form>
                    </div>
                  </div>
                  <!------ Searching ------>
                    <div style="padding-left: 120px;" class="col-sm-12 col-md-4 ">
                  <form action="" method="GET"> 
                        <input type="text" name="search" class='form-control' placeholder="Search By Title" 
                        value=<?php echo @$_GET['search']; ?> > 
                      <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal">Search</button>
                  </form>
                    </div>
              </div>
                    <?php
                            $conn = oci_connect("hr", "hr", "localhost/xe");
                            
                             if(isset($_GET["order"]))
                             {
                               $order = $_GET["order"];
                             }else
                             {
                               $order = "id";
                             }
 
                             if(isset($_GET["sort"]))
                             {
                               $sort = $_GET["sort"];
                             }else
                             {
                               $sort = "DESC";
                             }
 
                             $sort == "DESC" ? $sort = "ASC" : $sort = "DESC";
                            
                              if(isset($_GET['search'])){
                                $searchKey = $_GET['search'];
                                //$coll = oci_new_collection($c, 'MYIDREC');
                                $query = 'BEGIN search_netflix(:title, :cursbv); END;';
                              
                                $r = oci_parse($conn, $query);
                                
                                $stid = oci_new_cursor($conn);

                                oci_bind_by_name($r, ":title", $searchKey);
                                oci_bind_by_name($r, ":cursbv", $stid, -1, OCI_B_CURSOR);

                                //$query = "SELECT id, poster, title, type, director, country, release_year, rating, duration 
                                //FROM netflix WHERE title LIKE '%$searchKey%' order by $order $sort";
                                //$query = "CALL search_package.search_netflix($searchKey, $coll)";
                                
                                oci_execute($r);
                                oci_execute($stid);
                                
                              }
                              else if(isset($_GET['s_test1']) || isset($_GET['s_test2']) || isset($_GET['s_test3']))
                              {
                                $country = $_GET['s_test1'];
                                $year = $_GET['s_test2'];
                                $rating = $_GET['s_test3'];
                                $query = 'BEGIN filter_by_field(:cursor, :cntry, :year, :rating); END;';

                                //$query = "select id, poster, title, type, director, country, release_year, rating, duration 
                                //from netflix where country = '$country' AND release_year = '$year' AND rating = '$rating' order by $order $sort";
                                $r = oci_parse($conn, $query);
                                $stid = oci_new_cursor($conn);

                                oci_bind_by_name($r, ":cursor", $stid, -1, OCI_B_CURSOR);
                                oci_bind_by_name($r, ":cntry", $country);
                                oci_bind_by_name($r, ":year", $year);
                                oci_bind_by_name($r, ":rating", $rating);
                                
                                oci_execute($r);
                                oci_execute($stid);
                                
                              }
                              else
                              { 
                                $query = 'BEGIN sort_netflix(:order, :sort, :curs); END;';
                              
                                $r = oci_parse($conn, $query);
                                $stid = oci_new_cursor($conn);

                                oci_bind_by_name($r, ":order", $order);
                                oci_bind_by_name($r, ":sort", $sort);
                                oci_bind_by_name($r, ":curs", $stid, -1, OCI_B_CURSOR);

                                //$query = "select id, poster, title, type, director, country, release_year, rating, duration 
                                //from netflix order by $order $sort";
                                
                                oci_execute($r);
                                oci_execute($stid);
                              }
                              
                              
                      ?>
                <table class="table table-striped table-hover" id="table-data">
                    <thead>
                          <tr>
                            <th><a href="?order=id&&sort=<?= $sort?>">Id</a></th>
                            <th>Poster</th>
                            <th><a href="?order=title&&sort=<?= $sort?>">Title</a></th>
                            <th>Type</th>                                    
                            <th>Director</th>
                            <th>Country</th>
                            <th>Year</th>
                            <th>Rating</th>
                            <th>Duration</th>
                            <th>Action</th>
                          </tr>
                    </thead>
                    <tbody>
                           <?php while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) { ?>
                            <tr>
                              <td><?= $row["ID"]; ?></td>
                              <td><img src=<?=$row['POSTER'];?> width="55px"></td>
                              <td><?= $row['TITLE']; ?></td>
                              <td><?= $row["TYPE"]; ?></td>
                              <td><?= $row['DIRECTOR']; ?></td>
                              <td><?= $row['COUNTRY']; ?></td>
                              <td><?= $row['RELEASE_YEAR']; ?></td>
                              <td><?= $row['RATING']; ?></td>
                              <td><?= $row['DURATION']; ?></td>
                              <td>
                                <a href="details.php?details=<?= $row['ID']; ?>" class="badge badge-primary p-2">Details</a> 
                                <a href="action.php?delete=<?= $row['ID']; ?>" class="badge badge-danger p-2">Delete</a> 
                                <a href="index.php?edit=<?= $row['ID']; ?>" class="badge badge-success p-2">Edit</a>
                              </td> 
                            </tr>
                            <?php } ?>
                      </tbody>
                </table>
            </div>
        </div>
  </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('table').DataTable({
                searching:false,
                ordering:false,
                bLengthChange: false 
            });
        });
    </script>
</body>
</html>