<?php
include "preloder.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change PIN - ATM</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>Change PIN - ATM</h1>

    <!-- Form to change the PIN -->
    <form method="POST" action="pin-change.php">
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required><br>

        <label for="new_pin">New PIN:</label>
        <input type="password" id="new_pin" name="new_pin" required><br>

        <button type="submit">Change PIN</button>
    </form>

    <!-- Display the result of the PIN change operation -->
    <?php
    if (isset($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    } elseif (isset($success_message)) {
        echo "<p style='color:green;'>$success_message</p>";
    }
    ?>
        <?php
// change_pin.php


// Check if form data is sent via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone_number = $_POST['phone_number'];
    $new_pin = $_POST['new_pin'];

    // Validate the new PIN
    if (strlen($new_pin) !== 4 || !ctype_digit($new_pin)) {
        $error_message = "PIN must be a 4-digit number";
    } else {
        // Check if the phone number exists
        $sql = "SELECT trans_id FROM information WHERE phone = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", phone);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id);
            $stmt->fetch();

            // Update the PIN
            $sql = "UPDATE users SET pin = ? WHERE user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", new_pin, user_id);
            $stmt->execute();

            $success_message = "PIN changed successfully";
        } else {
            $error_message = "Phone number not found";
        }
    }
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
