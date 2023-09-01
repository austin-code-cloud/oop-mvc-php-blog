
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Update Post

    <?php


    $post = $data['data'];
    $id = $data['id'];
    
    ?>

    <form action="/mvc-oop-php-blog/public/admin/editpost" method="POST">

    <input type="number" name="id" value="<?php echo $id ?>" hidden>
        <label for="title"></label>
        <input type="text" name="title" value="<?php echo $post[0]['title']; ?>">
        <label for="content"></label>
        <textarea name="content" id="" cols="30" rows="10"><?php echo $post[0]['content']; ?></textarea>

        <button name="update">Update</button>

    </form>
</body>

</html>