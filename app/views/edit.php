<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/styles3.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/styles1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Poppins:wght@100;200&family=Tulpen+One&display=swap" rel="stylesheet">
    <title>Edit post</title>
</head>

<body>
    <!-- header -->
    <header class="header">
        <div>
            <p class="logo1">TORILA</p>
        </div>

        <div class="create-post">
            Update Post
        </div>
    </header>

    <!-- section -->
    <section class="input-textarea">

        <?php


        $post = $data['data'];
        $id = $data['id'];

        ?>

        <form action="/mvc-oop-php-blog/public/admin/editpost" method="POST">
            <input type="number" name="id" value="<?php echo $id ?>" hidden>
            <div class="input1">
                <label for="title" class="label">Title</label>
                <input type="text" class="inp" name="title" value="<?php echo $post[0]['title']; ?>">
            </div>

            <div class="input2">
                <label for="content" class="label">Content</label>
                <textarea name="content" class="textarea" id="" cols="50" rows="50"><?php echo $post[0]['content']; ?></textarea>
            </div>
            <div>
                <button class="submit" name="update">Update</button>
            </div>
        </form>
    </section>
</body>

</html>