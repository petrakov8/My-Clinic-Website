<?php
    include 'partials/header.php';

    //fetch users from database but not current user
    $current_admin_id = $_SESSION['user-id'];

    $query = "SELECT * FROM patient WHERE NOT phone_patient=$current_admin_id";
    $users = mysqli_query($connection, $query);
?>


<section class="dashboard">
        <?php if(isset($_SESSION['add-post-success'])) : // shows if add post was successful?>
            <div class="alert__message success container">
                <p>
                    <?= $_SESSION['add-post-success'];
                    unset($_SESSION['add-post-success']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>
            <aside> 
                <ul>
                    <li>
                        <a href="manage-app.php" class="active"><i class="uil uil-users-alt"></i>
                            <h5>Medical History</h5>
                        </a>
                    </li>
                    <?php if (isset($_SESSION['user_is_admin'])): ?>
                    <li>
                        <a href="add-post.php"><i class="uil uil-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="index.php"><i class="uil uil-postcard"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-user.php"><i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php"><i class="uil uil-users-alt"></i>
                            <h5>Manage User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-category.php"><i class="uil uil-edit"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-categories.php"><i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
                    <?php elseif (isset($_SESSION['user_is_doctor'])): //help ?>
                        <li>
                            <a href="manage-categories.php"><i class="uil uil-list-ul"></i>
                                <h5>Manage Categories</h5>
                            </a>
                        </li>
                    <?php endif ?> 
                </ul>
            </aside>
            <main>
                <h2>Заплановані відвідування</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Telephone</th>
                            <th>Service</th>
                            <th>Doctor</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>+380 63 725 11 52</td>
                            <td>Огляд стоматолога</td>
                            <td>Олександр Левін</td>
                            <td>17:00</td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </section>



    <?php
    include '../partials/footer.php';
?>