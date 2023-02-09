<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/meal.css">
    <title>check your list</title>
    <link rel="icon" href="/public/img/curcumo-logo.png" type="image/icon type">
</head>
<body>
<div class="container-list">
    <?php
    if(isset($_COOKIE['user'])) {
        ?>
        <div class="psc-user-container">
            <div class="user-icon">
                <div class="dropdown">
                    <img class="button-icon-user-admin" src="/public/img/user-icon.svg" alt="">
                    <div class="dropdown-content">
                        <form action="logout" method="POST">
                            <button type="submit" class="logout" onclick="location.replace('/')">Logout </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-container">
            <section class="list-section">
                <div class="tableColumnNames">
                    <p class="UserIdAdmin">UserID</p>
                    <p class="EmailAdmin">Email</p>
                    <p class="ActionAdmin">Action</p>
                </div>
                <?php
                if(isset($users)) {
                foreach ($users as $user): ?>
                    <div id="<?= $user->getId(); ?>" class="tableColumnData">
                        <p class="UserIdAdmin"><?= $user->getName(); ?></p>
                        <p class="EmailAdmin"><?= $user->getEmail(); ?></p>
                        <form action="deleteUser/<?= $user->getId(); ?>" method="POST">
                            <button class="ActionButtonAdmin">Delete</button>
                        </form>
                    </div>
                <?php endforeach; }?>
            </section>
        </div>
    <?php } else {
        header("Location: /login");
        die();
        ?>
    <?php } ?>
</div>
</body>
