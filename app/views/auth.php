<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/styles4.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/styles1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Poppins:wght@100;200&family=Tulpen+One&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>

<body>
    <!-- header -->
    <header class="header">
        <div class="logo1">
            TORILA
        </div>
    </header>

    <div class="form-main " id="sign-in-form">
        <div class="sign-in">
            ADMIN SIGN-IN
        </div>
        <form class="form" action="signIn" method="POST">
            <!-- <label class="label1" for="fname">Username</label> -->
            <input class="input1" type="text" id="fname" name="username" placeholder="Username...">

            <!-- <label class="label2" for="lname">Password</label> -->
            <input class="input2" type="password" id="lname" name='password' placeholder="Password...">
            <input class="submit" type="submit" name="login" value="Login">

            <div class="foot1">
                <p class="message ">Not registered? </p>
                <button type="button" class="signUpButton">Create Account</button>
            </div>
        </form>

    </div>

    <div class="form-main hidden" id="sign-up-form">
        <div class="sign-in">
            ADMIN SIGN-UP
        </div>
        <form class="form" action="signUp" method="POST">

            <input class="input1" type="text" name="username" placeholder="Username...">
            <input class="input2" type="email" name="email" placeholder="email@...">
            <input class="input2" type="password" name="password" placeholder="password...">
            <input class="submit" type="submit" name="register" value="Register">

            <div class="foot2">
                <p class="message1">Already have an account?</p>
                <button type="button" class="signInButton">Sign In</button>
            </div>
        </form>

        <?php $info = $data['message'];
        echo $info;
        ?>
    </div>

    <script src="<?php echo BASEURL; ?>/js/index4.js"></script>
</body>

</html>