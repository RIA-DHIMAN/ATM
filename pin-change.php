<?php
include "preloder.php";
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
    <h1>CHANGE PIN</h1>
    <hr><br>
    <div class="pin-form">
    <h3>PLEASE ENTER YOUR PHONE NUMBER</h3>
    <form>
      <input type="number" id="phone" name="phon_eno" placeholder="Enter yous phone number">
    </form>
    <br>
    <h3>PLEASE ENTER YOUR OLD PIN</h3>
    <br>
    <form>
      <input type="password" id="pin" name="pin" placeholder="New PIN">
     
    </form>
    <h3>PLEASE ENTER YOUR PIN</h3>
    <br>
    <form>
      <input type="password" id="pin" name="pin" placeholder="New PIN">
      
    </form>
    <h3>CONFIRM PIN</h3>
    <form>
    <input type="password" id="pin" name="pin" placeholder="Confirm PIN">
      <button type="submit" class="button">Submit</button>
    </form>
  </div>
   </div>
   <br>
   <button class="button-exit"><a href="logout.php"class="bt-text">EXIT</a></button>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>