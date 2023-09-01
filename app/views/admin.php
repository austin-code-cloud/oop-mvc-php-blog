<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    Hello welcome to the admin page

    <a href="logout">Logout</a>

    <?php
    $loginUser = $data['user'];
    $authorpost = $data['authorpost'];
    ?>

    <?php if (!empty($authorpost)) { ?>
        <?php foreach ($authorpost as $result) { ?>
            <h2> <?php echo $result['title'] ?> </h2>
            <p> <?php echo substr($result['content'], 0, 100) ?> <a href="">...Read more</a> </p>

            <a href="/mvc-oop-php-blog/public/admin/editpost/<?= $result['id'] ?>">Edit</a>
            <a href="/mvc-oop-php-blog/public/admin/deletepost/<?= $result['id'] ?>">Delete</a>


        <?php } ?>

    <?php } else { ?>
        <?php echo "No Post to Display" ?>
    <?php } ?>

    <a href="/mvc-oop-php-blog/public/admin/createpost">Create Post</a>


</body>

</html>