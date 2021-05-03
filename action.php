<?php 
  session_start();  
    $conn = oci_connect('hr', 'hr', 'localhost/xe');
      
  if(isset($_POST['add']))
  {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $director = $_POST['director'];
    $country = $_POST['country'];
    $release_year = $_POST['release_year'];
    $rating = $_POST['rating'];
    $duration = $_POST['duration'];

    /*
    $statement = oci_parse($conn, "INSERT INTO netflix(id, type, title, director, country, release_year, rating, duration) 
    VALUES(:id_bv, :ty_bv, :ti_bv, :di_bv, :co_bv, :re_bv, :ra_bv, :du_bv)");
    */
    
    $statement = oci_parse($conn, "CALL idu_package.ins_upd_netflix(:id_bv, :ty_bv, :ti_bv, :di_bv, null, :co_bv, null, :re_bv, :ra_bv, :du_bv, null, null)");
    
    oci_bind_by_name($statement, ":id_bv", $id);
    oci_bind_by_name($statement, ":ty_bv", $type);
    oci_bind_by_name($statement, ":ti_bv", $title);
    oci_bind_by_name($statement, ":di_bv", $director);
    oci_bind_by_name($statement, "co_bv", $country);
    oci_bind_by_name($statement, ":re_bv", $release_year);
    oci_bind_by_name($statement, ":ra_bv", $rating);
    oci_bind_by_name($statement, ":du_bv", $duration);
    
    oci_execute($statement);
    
    header('location:index.php');
    $_SESSION['response'] = "Successfully Inserted to the database";
    $_SESSION["res_type"] = "success";
  }   

  if(isset($_GET['delete']))
  {
    $id = $_GET['delete'];

    /*$statement = oci_parse($conn, "DELETE FROM netflix WHERE id = :id_bv");
    */
    $statement = oci_parse($conn, "CALL idu_package.del_netflix(:id_bv)");
    
    oci_bind_by_name($statement, ":id_bv", $id);
    oci_execute($statement);
    
    header('location:index.php');
    $_SESSION['response'] = "Successfully Deleted";
    $_SESSION["res_type"] = "danger";
  }

  if(isset($_GET['edit']))
  {
   $id = $_GET['edit'];
    
   $statement = oci_parse($conn, "SELECT * FROM netflix WHERE id = :id_bv");
    oci_bind_by_name($statement, ":id_bv", $id);
    oci_execute($statement);
    $row = oci_fetch_assoc($statement);
    
    $id = $row["ID"]; 
    $type = $row["TYPE"]; 
    $title = $row['TITLE']; 
    $director = $row['DIRECTOR']; 
    $country = $row['COUNTRY']; 
    $release_year = $row['RELEASE_YEAR'];
    $rating = $row['RATING']; 
    $duration = $row['DURATION']; 
  }

  if(isset($_POST['update']))
  {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $director = $_POST['director'];
    $country = $_POST['country'];
    $release_year = $_POST['release_year'];
    $rating = $_POST['rating'];
    $duration = $_POST['duration'];
    
    /*
    $query = "UPDATE netflix 
    SET type = :ty_bv, title = :ti_bv, director = :di_bv, country = :co_bv, 
    release_year = :re_bv, rating = :ra_bv, duration = :du_bv
    WHERE id = :id_bv";
    */
    
    $query = "CALL idu_package.ins_upd_netflix(:id_bv, :ty_bv, :ti_bv, :di_bv, null, :co_bv, null, :re_bv, :ra_bv, :du_bv, null, null)";
    
    $stmt = oci_parse($conn, $query);
    
    oci_bind_by_name($stmt, ":id_bv", $id);
    oci_bind_by_name($stmt, ":ty_bv", $type);
    oci_bind_by_name($stmt, ":ti_bv", $title);
    oci_bind_by_name($stmt, ":di_bv", $director);
    oci_bind_by_name($stmt, "co_bv", $country);
    oci_bind_by_name($stmt, ":re_bv", $release_year);
    oci_bind_by_name($stmt, ":ra_bv", $rating);
    oci_bind_by_name($stmt, ":du_bv", $duration);
    
    oci_execute($stmt);
    
    header('location:index.php');
    $_SESSION['response'] = "Successfully Updated !";
    $_SESSION["res_type"] = "primary";
  }

  if(isset($_GET['details']))
  {
   $id = $_GET['details'];
    
   $statement = oci_parse($conn, "SELECT * FROM netflix WHERE id = :id_bv");
    oci_bind_by_name($statement, ":id_bv", $id);
    oci_execute($statement);
    $row = oci_fetch_assoc($statement);
    
    $v_id = $row["ID"]; 
    $v_title = $row['TITLE']; 
    $v_cast = $row['CAST']; 
    $v_date_add = $row['DATE_ADDED']; 
    $v_listed_in = $row['LISTED_IN'];
    $v_description = $row['DESCRIPTION']; 
    $v_poster = $row['POSTER']; 

    
  }
?>