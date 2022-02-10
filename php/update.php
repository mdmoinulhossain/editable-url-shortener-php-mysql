<?php

include 'config.php';

if(isset($_POST['done'])){


    $id = $_GET['id'];
  $su = $_POST['shortUrl'];
  $fu = $_POST['fullUrl'];

  $update = "UPDATE  `url` SET `id`='$id',`shorten_url` ='$su',`full_url`='$fu' WHERE `id`='$id'";

  $updateQuery = mysqli_query($conn, $update);

  header("location: ../");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<form class="container my-5" method="POST">
    <p>Update Data</p>
    <?php
    $id = $_GET['id'];
    $display = "SELECT * FROM `url` WHERE id = '$id' ";
    $displayQuery = mysqli_query($conn, $display);
    $record = mysqli_fetch_array($displayQuery);
    ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Short URL</label>
    <input type="text" class="form-control" name="shortUrl" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $record["shorten_url"]; ?>">
    <br />
    <div class="alert alert-danger" role="alert">
   * You must edit this field without "localhost/url/URL-Shortener/"
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Full URL</label>
    <input type="url" class="form-control" id="exampleInputPassword1" name="fullUrl" value="<?php echo $record["full_url"]; ?>">
  </div>
  
  <button type="submit" class="btn btn-primary" name="done">Submit</button>
</form>
<!-- <div class="container">
<button type="button" class="btn btn-outline-info"><a href="index.php"> View List?</a></button>
</div> -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>