<?php
//Template Name: Single propostas
?>

<?php /* The loop */ ?>
puta que pariu
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-post-div">
                <div class="single-page-post-heading">
                <h1><?php the_title(); ?></h1>
                </div>
                <div class="content-here">
                <?php  the_content();  ?>
                </div>
                resumo: 
                <?php the_excerpt(); ?>
                <div class="comment-section-here"
                <?php //comments_template(); ?>
                </div>
                </div>

            <?php endwhile; ?>