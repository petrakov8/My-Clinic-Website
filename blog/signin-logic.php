<?php
require 'config/database.php';

if(isset($_POST['submit'])){
    //get from data
    $phonenumber_email = filter_var($_POST['phonenumber_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$phonenumber_email){
        $_SESSION['signin'] = "Phone Number or Email required";
    } elseif (!$password){
        $_SESSION['signin'] = "Password required";
    } else {
        // fetch user from database
        $fetch_user_query = "SELECT phone_patient, name_patient, surname_patient, email_patient, date_patient, password_patient, avatar, is_admin, NULL AS phone_worker, NULL AS name_worker, NULL AS surname_worker, NULL AS email_worker, NULL AS date_worker, NULL AS password_worker, NULL AS avatar_worker, NULL AS about_worker, NULL AS type_worker FROM patient WHERE phone_patient='$phonenumber_email' OR email_patient='$phonenumber_email' UNION ALL SELECT phone_worker, name_worker, surname_worker, email_worker, date_worker, password_worker, avatar_worker, about_worker, type_worker, NULL AS phone_patient, NULL AS name_patient, NULL AS surname_patient, NULL AS email_patient, NULL AS date_patient, NULL AS password_patient, NULL AS avatar, NULL AS is_admin FROM clinic_worker WHERE phone_worker='$phonenumber_email' OR email_worker='$phonenumber_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
            //convert the record into assoc array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password_patient'];
            //compare form password with database password
            if(password_verify($password, $db_password)) {
                //set session for access control
                $_SESSION['user-id'] = $user_record['phone_patient'];
                //set session for access control
                $_SESSION['user-doctor'] = $user_record['phone_worker'];
                //set session if user is a worker
                if($user_record['is_admin'] == 1){
                    $_SESSION['user_is_admin'] = true;
                }
                elseif($user_record['type_worker'] == 2){
                    $_SESSION['user_is_doctor'] = true;
                }
                //else $_SESSION['user_is_admin'] = false;
                // log user in
                header('location: ' . ROOT_URL . 'admin/'); 
            } else {
                $_SESSION['signin'] = "Please check your input";
            }
        } else {
            $_SESSION['signin'] = "User not found";
        }
    }

    //if any problem, redirect back to signin page with login data
    if(isset($_SESSION['signin'])){
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signin.php');
        die();
    }
}else {
    header('loaction: ' . ROOT_URL . 'signin.php');
    die();
}   