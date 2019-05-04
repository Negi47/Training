<?php include "./database/dataconnect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./styles/feedback.css">
  <link rel="stylesheet" href="./styles/nxtwindow.css">
  <link rel="stylesheet" href="./styles/admin.css">
  <link rel="stylesheet" href="./styles/header.css">
  <link rel="stylesheet" href="./styles/hod.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" id="header">
  <a class="navbar-brand-left" id="leftimg" href="#"><img src="Images/brand.png"  width="80" height="40"></a>
  <div><span class="headtag">RAMAIH INSTITUE OF MANAGEMENT AND SCIENCES</span></div>
  <ul class="navbar-nav">

    <?php 
    
    $url = "http://localhost/TeacherTraining/test.php";

    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                $_SERVER['REQUEST_URI']; 

    if ($link==$url):
    
    ?>

    <li class="nav-item">
      <button type="button" name="Log" value="Logout" >Logout</button> 
    </li>

    <?php endif; ?>
  </ul>
</nav>
