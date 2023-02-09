<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/meal.css">
    <title>plan your meals</title>
    <link rel="icon" href="/public/img/curcumo-logo.png" type="image/icon type">
    <script type="text/javascript" src="/public/js/meal.js" defer></script>
</head>
<body>
<div class="container">
    <?php
    if(isset($_COOKIE['user'])) {
        if (isset($number)) {
            if($number>2) {
                header("Location: /list");
            }
        }
        ?>
    <div class="psc-user-container">
        <div class="draw-description">
            <h1>Plan your meals</h1>
            <img class="user-icon-mobile" src="/public/img/user-icon.svg" alt="">
        </div>
    </div>
    <div class="back-button">
        <img class="back-icon" src="/public/img/left-arrow-icon.svg" alt="">
        <a class="backButton" href="/plan">back</a>
    </div>
    <section class="meal-section">
        <?php if(isset($meal)) {?>
        <div id="<?= $meal->getId_meal(); ?>">
            <img class="meal-img" src="/public/img/meal-images/<?= $meal->getImage(); ?>" alt="pesto tagiatelle">
            <div>
                <div class="meal-description">
                    <div class="meal-descript">
                        <h2><?= $meal->getName(); ?></h2>
                        <?php
                        if($meal->getType() == "vegetarian") { ?>
                            <img class="mini-icon " src="/public/img/vegetarian-icon.svg" alt="">
                        <?php }
                        if($meal->getType() == "vegan") { ?>
                            <img class="mini-icon" src="/public/img/vegan-icon.svg" alt="">
                        <?php }
                        if($meal->getType() == "no gluten") { ?>
                            <img class="mini-icon" src="/public/img/no-gluten-icon.svg" alt="">
                        <?php }
                        ?>
                    </div>
                    <div class="property-meal">
                        <img class="clock-icon" src="/public/img/clock-icon.svg" alt="">
                        <h3><?= $meal->getTime(); ?> min</h3>
                        <img class="clock-icon" src="/public/img/hatLogo-mini.svg" alt="">
                        <h3><?= $meal->getLevel_diff(); ?></h3>
                    </div>
                    <p>1. <?= $meal->getDescription_1(); ?></p>
                    <p>2. <?= $meal->getDescription_2(); ?></p>
                    <p>3. <?= $meal->getDescription_3(); ?></p>
                    <p>4. <?= $meal->getDescription_4(); ?></p>
                    <p>5. <?= $meal->getDescription_5(); ?></p>
                </div>
                <div class="meal-products">
                    <div class="border-top">
                        <img class="minus-icon" src="/public/img/minus-icon.svg" alt="">
                        <p class="servings">1 servings</p>
                        <img class="plus-icon" src="/public/img/plus-icon.svg" alt="">
                    </div>
                    <div class="border-bottom">
                        <div>
                            <h1>Ingredients</h1>
                            <?php
                                for($i=1; $i<10; $i++) {
                                     $amount = "getAmount".$i;
                                     $unit = "getUnit".$i;
                                     $name = "getProduct".$i;
                                     if(isset($products)) {
                                     if ($products->$name() != null) { ?>
                                        <li><?= $products->$amount();?> <?= $products->$unit();?> - <?= $products->$name(); ?></li>
                                     <?php } }
                                } if(isset($optionals)) {?>
                            <h3>Optional</h3>
                                <li><?= $optionals->getAmount1();?> <?= $optionals->getUnit1();?> - <?= $optionals->getProduct1(); }?></li>
                        </div>
                        <div class="add-cont-meal">
                            <a id="<?= $meal->getId_meal(); ?>" class="addButton-meal" >add to list</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>
    <?php } else {
        header("Location: /login");
        die();
        ?>
    <?php } ?>
</div>
</body>