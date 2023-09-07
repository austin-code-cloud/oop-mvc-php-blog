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
    <title>CREATE POST</title>
</head>

<body>
    <!-- header -->
    <header class="header">
        <div>
            <p class="logo1">TORILA</p>
        </div>

        <div class="create-post">
            CREATE POST
        </div>
    </header>
    <!-- section -->
    <section class="input-textarea">
        <form action="createpost" method="POST">
            <div class="input1">
                <label class="label">Title </label>
                    <input class="inp" type="text" name="title" placeholder="Type here">
            </div>

            <div class="input2">
                <label class="label">Content</label>
                <textarea class="textarea" name="content" id="textarea" cols="30" rows="10" placeholder="Type here"></textarea>
            </div>
            <div>
                <button class="submit" name="post">Create Post</button>
            </div>
        </form>
    </section>
</body>

</html>