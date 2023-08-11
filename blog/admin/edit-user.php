<?php
    include 'partials/header.php';

    if(isset($_GET['phone_patient'])){
        $number = filter_var($_GET['phone_patient'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $query = "SELECT * FROM patient WHERE phone_patient=$number";
        $result = mysqli_query($connection, $query);
        $user = mysqli_fetch_assoc($result);        
    } else {
        header('location: ' . ROOT_URL . 'admin/manage-users.php');
        die();
    }
?>


<body>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit User</h2>
        <form action="<?= ROOT_URL ?>admin/edit-user-logic.php" method="POST">
            <input type="hidden" value="<?= $user['phone_patient'] ?>" name="phone_patient">
            <input type="text" value="<?= $user['name_patient'] ?>" name="name_patient" placeholder="First Name">
            <input type="text" value="<?= $user['surname_patient'] ?>" name="surname_patient" placeholder="Last Name">
            <select name="userrole">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <button type="submit" name="submit" class="btn">Update user</button>
        </form>
    </div>
</section>



<?php
    include '../partials/footer.php';
?>