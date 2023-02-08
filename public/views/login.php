<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <title>log in to curcumo</title>
    <link rel="icon" href="/public/img/curcumo-logo.png" type="image/icon type">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_COOKIE['user'])) {
            header("Location: /plan");
            die();
        ?>
        <?php } else { ?>
        <div class="logo">
            <img src="/public/img/hatLogo.svg" onclick="location.replace('/')" alt="curcumo">
        </div>
        <div class="page-container">
            <div class="login-description">
                <h1>log in to curcumo</h1>
            </div>
            <div class="login-container">
                <form class="login" action="login" method="POST">
                    <div class="message">
                        <?php if(isset($messages)) {
                            foreach ($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <input name="email" type="email" placeholder="Email">
                    <input name="password" type="password" placeholder="Password">
                    <button type="submit" class="login">log in with email</button>
                </form>
            </div>
            <div class="sign-description">
                <h2>New to curcumo? <a href="sign" class="sign">Sign up</a></h2>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
  