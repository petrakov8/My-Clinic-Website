<?php
require 'config/constants.php';

// get back form data if there was a registration error
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$phonenumber = $_SESSION['signup-data']['phonenumber'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$date = $_SESSION['signup-data']['date'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
//delete
unset($_SESSION['signup-data']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznyaki Clinic Website</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!-- ICONSCOUNT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- GOOGLE FONT (MONTSERRAT) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign Up</h2>
        <?php if(isset($_SESSION['signup'])) : ?>
                <div class="alert__message error">
            <p>
                <?= $_SESSION['signup'];
                unset($_SESSION['signup']);
                ?>
            </p>
        </div>

        <?php endif ?>
        <form action="<?=ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
            <input type="text" name="lastname" value="<?= $lastname?>" placeholder="Last Name">
            <input type="text" name="phonenumber" value="<?= $phonenumber?>" placeholder="Phone Number">
            <input type="email" name="email" value="<?= $email?>" placeholder="Email">
            <input type="date" name="date" value="<?= $date?>" placeholder="Birthday">
            <!-- radio button (Sex) -->
            <input type="password" name="createpassword" value="<?= $createpassword?>" placeholder="Create Password">
            <input type="password" name="confirmpassword" value="<?= $confirmpassword?>" placeholder="Confirm Password">
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" name="submit" class="btn">Sign Up</button>
            <small>Already have an account? <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>
</body>
</html>