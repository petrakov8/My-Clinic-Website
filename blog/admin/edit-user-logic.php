<?php
require 'config/database.php';

if(isset($_POST['submit'])){
    //get update form data
    $number = filter_var($_POST['phone_patient'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name_patient = filter_var($_POST['name_patient'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $surname_patient = filter_var($_POST['surname_patient'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);

    // check for valid input
    if (!$name_patient || !$surname_patient){
        $_SESSION['edit-user'] = "Invalid form input on edit page.";
    } else {
        //update user
        $query = "UPDATE patient SET name_patient='$name_patient', surname_patient='$surname_patient', is_admin = $is_admin WHERE phone_patient = '$number' LIMIT 1";
        $result = mysqli_query($connection, $query);

        if(mysqli_errno($connection)) {
            $_SESSION['edit-user'] = "Falied to update user.";
        } else {
            $_SESSION['edit-user-success'] = "User $name_patient $surname_patient updated successfully";
        }
    }
}

header('location: ' . ROOT_URL . 'admin/manage-users.php');
die();