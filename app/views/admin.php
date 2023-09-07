<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/styles2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Poppins:wght@100;200&family=Tulpen+One&display=swap" rel="stylesheet">
    <title>ADMIN</title>
</head>

<body>
    <?php
    $loginUser = $data['user'];
    $authorpost = $data['authorpost'];
    ?>

    <!-- header -->
    <header class="header">
        <div class="logo1">
            TORILA
        </div>
        <!-- <div class="logo3">
      Entertainment
    </div> -->
        <div class="admin">
            ADMIN
        </div>
        <div class="create-new-post">
            <a href="/mvc-oop-php-blog/public/admin/createpost">Create</a>
        </div>
        <div class="create-new-post">
            <a href="logout">Logout</a>
        </div>
    </header>

    <!-- section -->
    <div class="main">

        <?php if (!empty($authorpost)) { ?>
            <?php foreach ($authorpost as $result) { ?>

                <section class="section-one">
                    <div class="title">
                        <h2> <?php echo $result['title'] ?> </h2>
                    </div>
                    <div class="button">
                        <li><a href="/mvc-oop-php-blog/public/admin/deletepost/<?= $result['id'] ?>">Delete</a></li>
                        <li><a href="/mvc-oop-php-blog/public/admin/editpost/<?= $result['id'] ?>">Edit</a></li>
                    </div>
                </section>
            <?php } ?>

        <?php } else { ?>
            <?php echo "No Post to Display" ?>
        <?php } ?>

    </div>
</body>

</html>