<?php
  session_start();
  if(isset($_SESSION['mysession'])){
    $username = $_SESSION['mysession'];
  }else{
     header('location:./../index.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo $username; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="students-list.php">Students List</a></li>
      <li><a href="add-news.php">Add News</a></li>
      <li><a href="news-list.php">News List</a>
      <li><a href="fees-list.php">Fees List</a>
      <li><a href="image.php">Banner</a></li>
      <li><a href="logo.php">Upload Logo</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  

