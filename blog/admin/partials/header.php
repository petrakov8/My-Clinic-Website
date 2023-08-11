<?php
require '../partials/header.php';

//check login status
if(!isset($_SESSION['user-id'])){
    header('loaction: ' . ROOT_URL . 'signin.php');
    die();
}
?>
