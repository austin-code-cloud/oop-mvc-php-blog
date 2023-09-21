<?php require_once 'includes/header.inc.php' ?>


<div class="container">
    <div class="welcome-card-personal flex align-center has-image">
        <div class="cover-image">
            <img loading="lazy" src="<?php echo BASEURL; ?>/images/antoine-garcia5f88.jpg" alt=" cover">
        </div>
        <div class="welcome-card-content-wrap">
            <h1 class="intro-title">Hi, I'm Austine Ocheni</h1>
            <div class="intro-description">
                A painter🎨 and sculptor⚒️ based in Paris, France. I try to explore the emotions and expression of minds through my creation.
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row main-content ">
        <div class="col-lg-8 js-demo-content-area">
            <div class="js-post-list-wrap">
                <?php $posts = $data['data']; ?>
                <?php if ($posts !== null) { ?>
                    <?php foreach ($posts as $result) { ?>


                        <article class="post-card flex js-post-card">
                            <div class="post-img-container">
                                <a href="autumn-is-a-second-spring-when-every-leaf-is-a-flower/index.html" class="post-img-wrap">
                                    <img loading="lazy" srcset="https://images.unsplash.com/photo-1665686440627-936e9700a100?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;MnwxMTc3M3wxfDF8YWxsfDF8fHx8fHwyfHwxNjcxMjc4Mjc5&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;300 300w,
                        https://images.unsplash.com/photo-1665686440627-936e9700a100?crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;fit&#x3D;max&amp;fm&#x3D;jpg&amp;ixid&#x3D;MnwxMTc3M3wxfDF8YWxsfDF8fHx8fHwyfHwxNjcxMjc4Mjc5&amp;ixlib&#x3D;rb-4.0.3&amp;q&#x3D;80&amp;w&#x3D;600 600w" sizes="(max-width: 472px) 400px, (max-width: 767px) 600px, (min-width: 768px) 400px, 400px" src="https://images.unsplash.com/photo-1665686440627-936e9700a100?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wxfDF8YWxsfDF8fHx8fHwyfHwxNjcxMjc4Mjc5&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=300" alt="Autumn is a second spring when every leaf is a flower">
                                </a>
                            </div>
                            <div class="post-info-wrap">
                                <div class="tag-list">
                                    <a href="<?php echo BASEURL; ?>home/categorypost"><span class="tag-accent" style="background: #fd94ff;"></span>Nature</a>
                                </div>
                                <h2 class="post-title">
                                    <a href="<?php echo BASEURL; ?>home/singlepost"><?php echo $result['title'] ?></a>
                                </h2>
                                <div class="post-excerpt">
                                    <?php echo substr($result['content'], 0, 90) ?>
                                </div>
                                <div class="post-meta text-s">
                                    <time class="post-date" datetime="2022-05-02">
                                        <svg>
                                            <use xlink:href="#i-calendar"></use>
                                        </svg>May 2, 2022
                                    </time>
                                    <span class="read-time">
                                        <svg>
                                            <use xlink:href="#i-clock"></use>
                                        </svg>4 min read
                                    </span>
                                </div>
                            </div>
                        </article>

                    <?php } ?>
                <?php } else { ?>

                    <?php echo "</br>" . "</br>" . "No Post to Display"; ?>

                <?php } ?>



            </div>

            <div class="pagination-wrap text-center" id="pagination-wrap">
                <button class="btn post-load-button" id="load-more"><span>Load more</span></button>
            </div>
        </div>
        <?php require_once 'includes/featuredpost.inc.php' ?>
    </div>
</div>
<?php require 'includes/footer.inc.php' ?>