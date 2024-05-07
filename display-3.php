<?php
include "preloder.php";
include "config.php";
include "script.php";
// if($sid){
//     header("Location:account.php");
// }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <section class="disp"> 
<div class="information">
<h3>PLEASE SELECT A TRANSCTION</h3>
<hr>
<h3>name : <?php echo "$name" ?> </h3>
<h3>account number:  <?php echo "$account_no" ?>
</h3>

<br>
<div class="container text-center">
  <div class="row">
 
    <div class="col">
    <form method="POST"  action="querry.php">
    <input type="submit" class="button" name="balance" value="balance enquiry">  
    </from>
    </div>

    <div class="col">
    <form method="POST"  action="querry.php">
    <input type="submit"class="button" name="withdraw" value="cash withdrawal">
    </from>
    </div>
    <div class="col">
    <form method="POST"  action="querry.php">
    <input type="submit" class="button" name="pin-change" value="pin change">
    </from>
    </div>
    <div class="col">
    <form method="POST"  action="querry.php">
    <input type="submit"class="button" name="fast" value="fast cash">
    </from>
    </div>
    <div class="col">
    <form method="POST"  action="querry.php">
    <input type="submit" class="button" name="statement" value="mini statement">
    </from>
    </div>
  </div>
</div>
</div>
<button class="button-exit"><a href="logout.php"class="bt-text">EXIT</a></button>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>