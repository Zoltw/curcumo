<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/meal.css">
    <title>plan your meals</title>
    <link rel="icon" href="/public/img/curcumo-logo.png" type="image/icon type">
    <script type="text/javascript" src="./public/js/addMeal.js" defer></script>
</head>
<body>
<div class="container">
    <?php
    if(isset($_COOKIE['user'])) {
        ?>
    <div class="psc-user-container">
        <div class="psc-icons">
            <img class="plan-icon" src="/public/img/plan-list.svg" alt="">
            <img class="shop-icon" src="/public/img/shop-icon.svg" alt="">
            <img class="cook-icon" src="/public/img/cook-icon.svg" alt="">
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
    <div class="plan-page-container">
        <div class="draw-description">
            <h1>Plan your meals</h1>
            <img class="user-icon-mobile" src="/public/img/user-icon.svg" alt="">
        </div>
        <div class="plate-container">
            <div class="plate-icons">
                <img class="icon" src="/public/img/plate-icon.svg" alt="">
                <img class="icon2" src="/public/img/plate-icon.svg" alt="">
                <img class="icon3" src="/public/img/plate-icon.svg" alt="">
            </div>
            <div class="draw-button-container">
                <a class="draw-button">draw your meals</a>
            </div>
        </div>
    </div>
    <section class="meals-container">
        <?php
            if(isset($meals)) {
                foreach ($meals as $meal): ?>
                <form action="meal/<?= $meal->getId_meal(); ?>" method="GET">
                        <button id="<?= $meal->getId_meal(); ?>" type="submit">
                            <img class="meal-img" src="/public/img/meal-images/<?= $meal->getImage(); ?>">
                            <div class="meal-title">
                                <h2><?= $meal->getName(); ?></h2>
                            </div>
                            <div class="time-prepare">
                                <div class="property-meal">
                                    <img class="clock-icon" src="/public/img/clock-icon.svg" alt="">
                                    <h3><?= $meal->getTime(); ?> min</h3>
                                </div>
                                <div class="add-cont">
                                    <?php
                                        if($meal->getType() == "vegetarian") { ?>
                                        <img class="mini-icon" src="/public/img/vegetarian-icon.svg" alt="">
                                    <?php }
                                        if($meal->getType() == "vegan") { ?>
                                        <img class="mini-icon" src="/public/img/vegan-icon.svg" alt="">
                                    <?php }
                                        if($meal->getType() == "no gluten") { ?>
                                        <img class="mini-icon" src="/public/img/no-gluten-icon.svg" alt="">
                                    <?php }
                                        ?>
                                    <a class="addButton">add to list</a>
                                </div>
                            </div>
                    </button>
                </form>
                <?php endforeach;
            }
        ?>
    </section>
    <?php } else {
        header("Location: /login");
        die();
        ?>
    <?php } ?>
</div>
</body> 
