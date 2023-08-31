<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-OOP BLog</title>
</head>

<body>

    <!-- <a href="home/login">Login</a>
    <a href="home/register">Register</a> -->
    
    <a href="home/createpost">create post</a>
    <h1>Posts </h1>

    <?php

    $posts = $data['data'];


    ?>
    <?php if ($posts !== null) { ?>
        <?php foreach ($posts as $result) { ?>
            <h2> <?php echo $result['title'] ?> </h2>
            <p> <?php echo substr($result['content'], 0, 100) ?> <a href="">...Read more</a> </p>

        <?php } ?>
    <?php } else { ?>
        <?php echo "</br>" . "</br>" . "No Post to Display"; ?>
    <?php } ?>

</body>

</html>