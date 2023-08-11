<?php
require 'config/database.php';


    // get form data
    $date_examination = filter_var($_POST['date_examination'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $time_examination = filter_var($_POST['time_examination'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone_patient = filter_var($_POST['phone_patient'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone_worker = filter_var($_POST['phone_worker'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $id_service = filter_var($_POST['id_service'], FILTER_SANITIZE_NUMBER_INT);

        //insert app into database
        $query = "INSERT INTO medical_examination (date_examination, time_examination, phone_patient, phone_worker, id_service) VALUES ('CURRENT_DATE()','18:00:00', '+380972240363','+380673032194', 1)";
        $result = mysqli_query($connection, $query);
        if(mysqli_errno($connection)){
            $_SESSION['add-app'] = "Couldn't app category";
            header('location: ' . ROOT_URL . 'index.php');
            die();
        } else {
            $_SESSION['add-app-success'] = "added sucessfully";
            header('location: ' . ROOT_URL . 'index.php');
            die();
        }
        header('location: ' . ROOT_URL . 'index.php');
        die();
