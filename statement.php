<?php
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
  <section class="state">
    <div>
    <h1> MINI STATEMENT</h1>
    <hr>
    <br>
    <div class="row justify-content-center">
    <div class="col-4">
    <h3>NAME :</h3>
    </div>
    <div class="col-4">
    <h5> <?php echo $name;?> </h5>
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
    <div class="col-4">
    <h3>ACCOUNT NUMBER :</h3>
    </div>
    <div class="col-4">
    <h5>0002</h5>
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
    <div class="col-4">
    <h3>ACCOUNT TYPE :</h3>
    </div>
    <div class="col-4">
    <h5>SAVING</h5>
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
    <div class="col-4">
    <h3>BALANCE :</h3>
    </div>
    <div class="col-4">
    <h5> Rs. 67558</h5>
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
    <div class="col-4">
    <h3>TRANSCATION DATE :</h3>
    </div>
    <div class="col-4">
    <h5>MM-YY-DD</h5>
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
    <div class="col-4">
    <h3>TRANSCATION ID :</h3>
    </div>
    <div class="col-4">
    <h5>07</h5>
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
    <div class="col-4">
    <h3>BANK NAME :</h3>
    </div>
    <div class="col-4">
    <h5>BANK OF INDIA</h5>     
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
    <div class="col-4">
    <h3>BRANCH LOCATIOND :</h3>
    </div>
    <div class="col-4">
    <h5>DEHRADUN</h5>
    </div>
  </div>
 
    </div>
    <button class="button-exit"><a href="display-1.php"class="bt-text">EXIT</a></button>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
