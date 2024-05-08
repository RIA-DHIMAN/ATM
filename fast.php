<?php
include "preloder.php";
include "script.php";
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
    <div>
      <h1>PLEASE SELECT A DENOMINATION</h1>
    </div>
    <hr>
    <br>
    <h3>REMAINING BALANCE: Rs.<?php echo $balance;?></h3>
    <br>
    <form action="script-2.php" method="Post">
    <div class="row justify-content-around">
      <div class="col-4">
          <input type="submit" class="button" name="cash" value="500">
          </div>
          <br><br>
          <div class="col-4">
          <input type="submit" class="button" name="cash" value="1000">
          </div>
        </div>
        </form>
        <form action="script-2.php" method="Post">
        <div class="row justify-content-around">
          <div class="col-4">
          <input type="submit" class="button" name="cash" value="1500">
          </div>
          <br>
          <br>
          <div class="col-4">
          <input type="submit" class="button" name="cash" value="2000">
          </div>
</form>
  </div>
  <br>
  <br>
  <button class="button-exit"><a href="logout.php"class="bt-text">EXIT</a></button>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 
