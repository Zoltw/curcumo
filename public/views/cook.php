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
            <div class="psc-icons">
                <img class="plan-icon-list" src="/public/img/plan-list.svg" onclick="location.replace('/plan')" alt="">
                <img class="shop-icon-list" src="/public/img/shop-icon.svg" style="opacity: 0.25" onclick="location.replace('/list')" alt="">
                <img class="cook-icon" src="/public/img/cook-icon.svg" style="opacity: 1" alt="">
            </div>
            <div class="user-icon">
                <div class="dropdown">
                    <img class="button-icon-user" src="/public/img/user-icon.svg" alt="">
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
                <?php if(isset($meals)) {
                    foreach ($meals as $meal): ?>
                    <div id="<?= $meal->getId_meal(); ?>">
                        <h2><?= $meal->getName(); ?></h2>
                        <p>1. <?= $meal->getDescription_1(); ?></p>
                        <p>2. <?= $meal->getDescription_2(); ?></p>
                        <p>3. <?= $meal->getDescription_3(); ?></p>
                        <p>4. <?= $meal->getDescription_4(); ?></p>
                        <p>5. <?= $meal->getDescription_5(); ?></p>
                    </div>
                <?php endforeach; }
                else { ?>
                    <h2>Choose your favourite meals!</h2>
                <?php }?>
                <div class="back-new-list">
                    <div class="back-button-cook">
                        <img class="back-icon" src="/public/img/left-arrow-icon.svg" alt="">
                        <a class="backButton" onclick="location.replace('/plan')">back</a>
                    </div>
                    <form action="deleteList" action="POST">
                        <button class="new-list-button">New list</button>
                    </form>
                </div>
            </section>
        </div>
    <?php } else {
        header("Location: /login");
        die();
        ?>
    <?php } ?>
</div>
</body>
