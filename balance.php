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
    <section class="info">
    <h1>BALANCE ENQUIRY</h1>
<hr>
      <div>
        <h3>name:</h3>
        <p> <?php echo $name;?></p>
        <h3>account number:</h3>
        <p><?php echo $account_no;?></p>
        <h3>account type :</h3>
        <p><?php echo $account_type;?></p>
        <h3>balance:</h3>
        <p>Rs.<?php echo $balance;?></p>
        <div class="col">
        <button class="button-exit"><a href="logout.php"class="bt-text">EXIT</a></button>
    </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>