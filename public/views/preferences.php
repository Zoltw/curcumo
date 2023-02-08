<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <title>choose your preferences</title>
    <link rel="icon" href="/public/img/curcumo-logo.png" type="image/icon type">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <script type="text/javascript" src="./public/js/preferences.js" defer></script>
</head>
<body>
<div class="container">
    <?php
    if(isset($_COOKIE['user'])) {
        ?>
        <div class="logo">
            <img src="/public/img/hatLogo.svg" onclick="location.replace('/')">
        </div>
        <div class="preferences-container">
            <div class="pref-description">
                <h1>Choose your preferences...</h1>
            </div>
            <div class="choose-preference">
                <div class="sections">
                    <div class="first-section">
                        <div class="first-icon" onclick="changeBackground(this)">
                            <img src="/public/img/milk-icon.svg" alt="">
                            <a href="pref_second"></a>
                            <b>no lactose</b>
                        </div>
                        <div class="second-icon" onclick="changeBackground(this)">
                            <img src="/public/img/vegan-icon.svg" alt="">
                            <b>vegan</b>
                        </div>
                    </div>
                    <div class="second-section">
                        <div class="third-icon" onclick="changeBackground(this)">
                            <img src="/public/img/vegetarian-icon.svg" alt="">
                            <b>vegetarian</b>
                        </div>
                        <div class="fourth-icon" onclick="changeBackground(this)">
                            <img src="/public/img/no-gluten-icon.svg" alt="">
                            <b>no gluten</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pref-button">
                <a class="preferences">next</a>
            </div>
        </div>
        <div class="contact-button-container-pref">
            <a class="contact-button">Contact us</a>
            <a class="contact-button">Report a bug</a>
        </div>
    <?php } else {
        header("Location: /login");
        die();
        ?>
    <?php } ?>
</div>
</body>

<template id="pref-template">
    <div class="preferences-container">
        <div class="pref-description">
            <h1></h1>
        </div>
        <div class="choose-preference">
            <div class="sections">
                <div class="first-section">
                    <div class="first-icon" onclick="changeBackground(this)">
                        <img id="img1" src="" alt="">
                        <b1>less meat</b1>
                    </div>
                    <div class="second-icon" onclick="changeBackground(this)">
                        <img id="img2" src="" alt="">
                        <b2>more greens</b2>
                    </div>
                </div>
                <div class="second-section">
                    <div class="third-icon" onclick="changeBackground(this)">
                        <img id="img3" src="" alt="">
                        <b3>low ig</b3>
                    </div>
                    <div class="fourth-icon" onclick="changeBackground(this)">
                        <img id="img4" src="" alt="">
                        <b4>more fishes</b4>
                    </div>
                </div>
            </div>
        </div>
        <div class="pref-button">
            <a href="plan" class="preferences"></a>
        </div>
    </div>
</template>
