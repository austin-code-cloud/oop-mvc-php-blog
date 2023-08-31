<?php 
if (!isset($_SESSION['user'])) {
    header('location: /');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    Hello welcome to the admin page
    <form action="../includes/admin.inc.php" method="POST">

        <button name="logout">Logout</button>
    </form>

    <?php
    $loginUser = $data['user'];
    $authorpost = $data['authorpost'];
    ?>

<?php if (!empty($authorpost)) { ?>
        <?php foreach ($authorpost as $result) { ?>
            <h2> <?php echo $result['title'] ?> </h2>
            <p> <?php echo substr($result['content'], 0, 100) ?> <a href="">...Read more</a> </p>

            <form action="../includes/admin.inc.php?id=<?= $result['id'] ?>" method="POST">

                <button name="edit">Edit</button>
                <button name="delete">Delete</button>

            </form>

        <?php } ?>

    <?php } else { ?>
        <?php echo "No Post to Display" ?>
    <?php } ?>


   

</body>

</html>