<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/meal.css">
    <title>check your list</title>
    <link rel="icon" href="/public/img/curcumo-logo.png" type="image/icon type">
    <script type="text/javascript" src="./public/js/logout.js" defer></script>
</head>
<body>
<div class="container-list">
    <?php
    if(isset($_COOKIE['user'])) {
        ?>
        <div class="psc-user-container">
            <div class="psc-icons">
                <img class="plan-icon-list" src="/public/img/plan-list.svg" onclick="location.replace('/plan')" alt="">
                <img class="shop-icon-list" src="/public/img/shop-icon.svg" alt="">
                <img class="cook-icon" src="/public/img/cook-icon.svg" onclick="location.replace('/cook')" alt="">
            </div>
            <div class="user-icon">
                <form action="logout" method="POST">
                    <div class="dropdown">
                        <img class="dropbtn" src="/public/img/user-icon.svg" onclick=dropDownListLogout() alt="">
                        <div id="dropdownUserLogout" class="dropdown-content">
                            <button class="logout" onclick="location.replace('/')">Logout</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="list-container">
            <section class="list-section">
                <h1>Your shopping list</h1>

                <form>
                    <div>
                        <?php
                        if (isset($list)) {
                        foreach($list as $key => $value) {
                            if($key) {
                                ?>
                                <label class="label-container"><?= $key ?> - <?= $value ?>
                                    <input type="checkbox" id="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            <?php }
                        } } ?>
                    </div>
                </form>
                <h3>Additional?</h3>
                <form>
                    <div>
                        <?php
                        if (isset($additionalList)) {
                        foreach($additionalList as $key => $value) {
                            if($key) {
                                ?>
                                <label class="label-container"><?= $key ?> - <?= $value ?>
                                    <input type="checkbox" id="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            <?php }
                        } }?>
                    </div>
                </form>
                <div class="list-cook-container">
                    <form action="deleteList" action="POST">
                        <button class="new-list-button">New list</button>
                    </form>
                    <button class="lets-cook-button" onclick="location.replace('/cook')">Let's cook!</button>
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
