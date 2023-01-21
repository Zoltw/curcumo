<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <title>sign up to curcumo</title>
    <link rel="icon" href="/public/img/curcumo-logo.png" type="image/icon type">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="/public/img/hatLogo.svg">
        </div>
        <div class="page-container-sign">
            <div class="login-description">
                <h1>sign up to curcumo</h1>
            </div>
            <div class="login-container">
                <form class="login">
                    <div class="message" action="register" method="POST">
<!--                        --><?php //if(isset($messages)) {
//                            foreach ($messages as $message) {
//                                echo $message;
//                            }
//                        }
//                        ?>
                    </div>
                    <input name="name" type="text" placeholder="Name">
                    <input name="email" type="text" placeholder="Email">
                    <input name="password" type="password" placeholder="Password">
                    <button type="submit" class="login">sign up with email</button>
                </form>
            </div>
            <div class="sign-description">
                <h2>Got an account already?<a href="login" class="login">Log in</a></h2>
            </div>
        </div>
    </div>
</body>
 