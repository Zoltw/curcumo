<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <title>choose your preferences</title>
    <link rel="icon" href="/public/img/curcumo-logo.png" type="image/icon type">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="/public/img/hatLogo.svg">
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
            <a href="pref_second" class="pref">next</a>
        </div>
    </div>
    <div class="contact-button-container-pref">
        <a class="contact-button">Contact us</a>
        <a class="contact-button">Report a bug</a>
    </div>
</div>
</body>
