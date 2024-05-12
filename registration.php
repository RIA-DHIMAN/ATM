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
    <section class="represent">
        <div class="conatainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 style="color: white;">Create Account</h1>
                    <hr>
                    <form action="script-3.php" method="post" >
                        <div>
                            <input type="text" name="name" class="form-control mb-3 rounded-pill " placeholder="Enter your Name">
                        </div>
                        <div>
                            <input type="number" name="phone" class="form-control mb-3 rounded-pill" placeholder="Enter your Phone Number">
                        </div>
                        <div>
                            <input type="number" name="acno" class="form-control mb-3 rounded-pill" placeholder="Enter your Account-number">
                        </div>
                        <div>
                            <input type="text" name="actype" class="form-control mb-3 rounded-pill" placeholder="Enter your Account type">
                        </div>
                        <div>
                            <input type="number" name="balance" class="form-control mb-3 rounded-pill" placeholder="Balance">
                        </div>
                        <div>
                            <input type="text" name="bname" class="form-control mb-3 rounded-pill" placeholder="Bank name">
                        </div>
                        <div>
                            <input type="text" name="bran" class="form-control mb-3 rounded-pill" placeholder="Branch">
                        </div>
                        
                        <div>
                            <input type="submit" class="button" name="create-ac" value="Create Account">
                        </div>
                        
                    </form>
                </div>
            </div>
    </div>
<button class="button-exit"><a href="logout.php"class="bt-text">EXIT</a></button>
    </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
