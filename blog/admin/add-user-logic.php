<?php
require 'config/database.php';

// get form data if submit button was clicked
if(isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phonenumber = filter_var($_POST['phonenumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];
    //echo $firstname, $lastname, $phonenumber, $email, $date, $createpassword, $confirmpassword; 

    //validate input values
    if(!$firstname) {
        $_SESSION['add-user'] = "Please enter your First Name";
    }elseif (!$lastname) {
        $_SESSION['add-user'] = "Please enter your Last Name";
    }elseif (!$phonenumber) {
        $_SESSION['add-user'] = "Please enter your Phone Number";
    }elseif (!$email) {
        $_SESSION['add-user'] = "Please enter a valid email";
    }elseif (!$date) {
        $_SESSION['add-user'] = "Please enter your Date";
    }elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['add-user'] = "Password should be 8+ characters";
    }elseif (!$avatar['name']) {
        $_SESSION['add-user'] = "Please add avatar";
    }else {
        //check if password don't match
        if($createpassword !== $confirmpassword){
            $_SESSION['signup'] = "Password do not match";
        } else {
            //hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            //check if phone or email already exist in database
            $user_check_query = "SELECT * FROM patient WHERE phone_patient='$phonenumber' OR email_patient='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0){
                $_SESSION['add-user'] = "Phone Number or Email exist";
            }else {
                // WORK ON AVATAR 
                // rename avatar
                $time = time(); // always unique number
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = '../images/' . $avatar_name;

                //make sure file is an image
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if(in_array($extention, $allowed_files)){
                    //make sure images are not too large (1mb+)
                    if($avatar['size'] < 1000000) {
                        // upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else {
                        $_SESSION['add-user'] = "File size too big. Should be less than 1mn";
                    }
                } else {
                    $_SESSION['add-user'] = "File should be png, jpg or jpeg";
                }
            }
        }
    }

    // redirect back to signup pag eif there was any problem 
    if(isset($_SESSION['add-user'])){
        // pass from data back to signup page
        $_SESSION['add-user-data'] = $_POST;
        header('location: ' . ROOT_URL . '/admin/add-user.php');
        die();
    } else {
        // insert new user into users table
        $insert_user_query = "INSERT INTO patient (phone_patient, name_patient, surname_patient, email_patient, date_patient, password_patient, avatar, is_admin) 
        VALUES ('$phonenumber','$firstname', '$lastname', '$email', '$date', '$hashed_password', '$avatar_name', '$is_admin')";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if(!mysqli_info($connection)){
            // redirect to login page with success message 
            $_SESSION['add-user-success'] = "New user $firstname $lastname added successfully.";
            header('location: ' . ROOT_URL . 'admin/manage-users.php');
            die();
        }
    }

} else {
    // if button wasn't clicked, bounce back to signup page
    header('location: ' . ROOT_URL . 'admin/add-user.php');
    die();
}