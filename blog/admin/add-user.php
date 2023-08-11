<?php
    include 'partials/header.php';

//get back from data if there was an error
$firstname = $_SESSION['add-user-data']['firstname'] ?? null;
$lastname = $_SESSION['add-user-data']['lastname'] ?? null;
$phonenumber = $_SESSION['add-user-data']['phonenumber'] ?? null;
$email = $_SESSION['add-user-data']['email'] ?? null;
$date = $_SESSION['add-user-data']['date'] ?? null;
$createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['add-user-data']['confirmpassword'] ?? null;
//$userrole = $_SESSION['add-user-data']['userrole'] ?? null;

// delete session data
unset($_SESSION['add-user-data']);
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add User</h2>
        <?php if(isset($_SESSION['add-user'])) : ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['add-user']; unset($_SESSION['add-user']); ?>
                </p>
            </div>

            <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add-user-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" values="<?= $firstname ?>" placeholder="First Name">
            <input type="text" name="lastname" values="<?= $lastname ?>" placeholder="Last Name">
            <input type="text" name="phonenumber" values="<?= $phonenumber ?>" placeholder="Phone Number">
            <input type="email" name="email" values="<?= $email ?>" placeholder="Email">
            <input type="date" name="date" values="<?= $date ?>" placeholder="Birthday">
            <input type="password" name="createpassword" values="<?= $createpassword ?>" placeholder="Create Password">
            <input type="password" name="confirmpassword" values="<?= $confirmpassword ?>" placeholder="Confirm Password">
            <select name="userrole" >
                <option value="0">Patient</option>
                <option value="1">Admin</option>
            </select>
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" name="submit" class="btn">Add user</button>
        </form>
    </div>
</section>


<?php
    include '../partials/footer.php';
?>