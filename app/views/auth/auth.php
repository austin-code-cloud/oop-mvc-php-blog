<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="signIn" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id=""> </br>
        <label for="password">Password</label>
        <input type="password" name='password'>

        <button name="login">Login</button>

    </form>

    <form action="signUp" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="">
        <label for="email">Email</label>
        <input type="email" name="email" id="">
        <label for="password">Password</label>
        <input type="password" name="password" id="">

        <button name="register">Register</button>

    </form>

    <?php $info = $data['message'];
    echo $info;
    ?>
</body>

</html>