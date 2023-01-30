<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <title>choose your preferences</title>
    <link rel="icon" href="/public/img/curcumo-logo.png" type="image/icon type">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
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
            <h1>I would like to eat...</h1>
        </div>
        <div class="choose-preference">
            <div class="sections">
                <div class="first-section">
                    <div class="first-icon" onclick="changeBackground(this)">
                        <img src="/public/img/bacon-icon.svg" alt="">
                        <b>less meat</b>
                    </div>
                    <div class="second-icon" onclick="changeBackground(this)">
                        <img src="/public/img/greens-icon.svg" alt="">
                        <b>more greens</b>
                    </div>
                </div>
                <div class="second-section">
                    <div class="third-icon" onclick="changeBackground(this)">
                        <img src="/public/img/bread-icon.svg" alt="">
                        <b>low ig</b>
                    </div>
                    <div class="fourth-icon" onclick="changeBackground(this)">
                        <img src="/public/img/fish-icon.svg" alt="">
                        <b>more fishes</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="pref-button">
            <a href="plan" class="pref">let's plan!</a>
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
