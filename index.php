<?php 
// Memanggil file User.php
require_once 'User.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form using PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form method="POST" action="">
        <input type="text" name="firstname" placeholder="Firstname" required>
        <input type="text" name="lastname" placeholder="Lastname" required>
        <input type="number" name="phone" placeholder="Phone Number" required>
        <textarea name="address" rows="4" placeholder="Address" required></textarea>
        
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $currentUser = new User($first, $last, $phone, $address);
        
        $currentUser->displayResult();
    }
    ?>
</div>

</body>
</html>