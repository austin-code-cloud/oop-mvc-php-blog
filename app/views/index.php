<?php require_once 'includes/header.inc.php' ?>

<!-- header -->
<header class="header">
    <div class="logo1">
        TORILA
    </div>
    <div class="logo3">
        Entertainment
    </div>
    <div class="logo2">

        <li><a href="/mvc-oop-php-blog/public/admin/checkUsr">Manage Blog</a></li>
    </div>
</header>

<?php
$posts = $data['data'];
?>

<?php if ($posts !== null) { ?>
    <?php foreach ($posts as $result) { ?>
        <div class="main">
            <!-- section-one -->
            <section class="section-one">
                <div class="content">
                    <ul>
                        <li><?php echo $result['title'] ?> </li>
                        <li><?php echo substr($result['content'], 0, 90) ?> <a href="">...Read more</a></li>
                    </ul>
                </div>
            </section>
        </div>
    <?php } ?>
<?php } else { ?>

    <section class="section-one">
        <div class="content">
            <ul>
                <li><?php echo "</br>" . "</br>" . "No Post to Display"; ?></li>
            </ul>
        </div>
    </section>

<?php } ?>

<?php require 'includes/footer.inc.php' ?>