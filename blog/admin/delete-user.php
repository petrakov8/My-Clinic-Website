<?php
require 'config/database.php';

if(isset($_GET['phone_patient'])){
    $number = filter_var($_GET['phone_patient'], FILTER_SANITIZE_NUMBER_INT);

    // fetch user from database
    $query = "SELECT * FROM patient WHERE phone_patient='+$number'";
    echo $query;
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);   

    // make sure we got back only one user
    if (mysqli_num_rows($result) == 1){
        $avatar_name = $user['avatar'];
        $avatar_path = '../images/' . $avatar_name;      
        // delete image if available
        if ($avatar_path) {
            unlink($avatar_path);
        }
    }

    // FOR LATER
    // fetch all thumbnails of user's posts and delete them




    // delete user from database
    $delete_user_query = "DELETE FROM patient WHERE phone_patient='+$number'";
    $delete_user_result = mysqli_query($connection, $delete_user_query);
    if (mysqli_errno($connection)) {
        $_SESSION['delete-user'] = "Couldn't delete {$user['name_patient']} {$user['surname_patient']}";
    } else {
        $_SESSION['delete-user-success'] = "{$user['name_patient']} {$user['surname_patient']} deleted successfully";
    }
}

header('location: ' . ROOT_URL . 'admin/manage-users.php');
die();