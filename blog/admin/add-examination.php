<?php
    include 'partials/header.php'
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Записатися на огляд</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Phone number">
            <input type="date">
            <input type="time">
            <button type="submit" class="btn">Записатися</button>
        </form>
    </div>
</section>

<?php
    include '../partials/footer.php';
?>