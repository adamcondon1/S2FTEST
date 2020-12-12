<?php
  session_start();
 ?>

<!DOCTYPE html>

<html>
  <head>

    <meta charset="utf-8">
    <meta name="description" content="Meta Description Example, will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>
      Sit2Fit
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
  <!--Navigation bar-->
    <nav class="navbar navbar-expand-md ">
      <a class="navbar-brand" href="index.php">S2F</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">

          <!--Navigation Headings and Links-->
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='index.php'>Home</a></li>";
              echo "<li><a href='profile.php'>Profile</a></li>";
              echo "<li><a href='api.php'>Gym Finder</a></li>";
              echo "<li><a href='ptindex.php'>PTLogin</a></li>";
              echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign Up</a></li>";
              echo "<li><a href='login.php'>Login</a></li>";
            }
           ?>

        </ul>
      </div>
      </nav>
</body>
