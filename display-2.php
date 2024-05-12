
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
    <section  class="disp">
   <div>
    <h1>ENTER  YOUR PIN</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non possimus inventore impedit assumenda omnis ratione eius culpa praesentium et voluptates, dolorum modi temporibus alias eaque, est molestias quod blanditiis! Quaerat!</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At repudiandae similique voluptate esse maiores.</p>
  </div>
  <div class="pin-form">
    <form method="POST"  action="querry.php">
      <input type="password" id="pin" name="account_no" placeholder="Enter PIN" required>
      <button type="submit" class="button" name="pin">Submit</button>
    </form>
  </div>
  <button class="button float-start"><a href="registration.php"class="bt-text">registration</a></button>
  <button class="button-exit"><a href="logout.php"class="bt-text">EXIT</a></button>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>