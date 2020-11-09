<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTab Login</title>
    <link rel="stylesheet" href="/css/login.css">


</head>

<body>

    <div class="logo">
        <img src="/imgs/logo-black.png" alt="logo" width="25%">
    </div>
    <div class="log-form">
        <h2>Login to your YouTab account</h2>
        <form action="<?= URLROOT ?>/home/doLogIn" method="POST">
            <input type="text" title="username" name="username" placeholder="username" />
            <input type="password" title="username" name="password" placeholder="password" />
            <button type="submit" class="btn">Login</button>
            <a class="forgot" href="#">Forgot Username?</a>
        </form>
    </div>
    <!--end log form -->
</body>

</html>