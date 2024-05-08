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
  <section class="disp" >
  <form >
        <label for="amount"> <h2> Enter amount to withdraw:</h2></label>
        <input type="number" id="amount" name="amount" min="1" required>
        <button type="submit" class="button" >Withdraw</button>
    </form>
  </section>
  <?php


// Get the withdrawal amount from the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $balance = intval($_POST['balance']); // Always sanitize user input

    if ($amount <= 0) {
        die("Invalid amount. Please enter a positive number.");
    }

    // Fetch the user's current balance
    $stmt = $pdo->prepare("SELECT balance FROM accounts WHERE user_id = :user_id");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $current_balance = $result['balance'];

        if ($current_balance >= $amount) {
            // Deduct the amount from the user's balance
            $new_balance = $current_balance - $amount;
            $update_stmt = $pdo->prepare("UPDATE accounts SET balance = :new_balance WHERE user_id = :user_id");
            $update_stmt->bindParam(':new_balance', $new_balance);
            $update_stmt->bindParam(':user_id', $user_id);
            $update_stmt->execute();

            echo "Withdrawal successful. Your new balance is: $" . $new_balance;
        } else {
            echo "Insufficient funds for withdrawal.";
        }
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request method.";
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>