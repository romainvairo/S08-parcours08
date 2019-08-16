<?php
get_header();


if ( have_posts() ) :


				while ( have_posts() ) :
                    the_post();
                    ?>
                    <main class='right'>
<h1 class="right__title"><?php the_title(); ?></h1>
<div class="post">
    <?php
        $user_id == get_the_author_meta( 'ID');
        echo get_avatar(
            $user_id,
            16,
            '',
            '',
            [
                'class' => 'post__author-icon'
            ]
        );
    ?>
                </div>
<?php the_content(); ?>
<?php the_author(); ?>
<time datetime="28-03-27"> le <?php the_date(); ?> </time>
<?php the_category(); ?>
<?php the_tags(); ?>
                </main>
                <?php
                endwhile;
            endif;



get_footer(); 