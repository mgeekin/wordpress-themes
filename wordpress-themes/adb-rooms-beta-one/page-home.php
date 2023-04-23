<!-- 
    template name: Home
 -->

<?php get_header(); ?>

<?php


?>



<main>

    <div class="container">

        <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) : the_post();?>

        <section>
            <h1><a href=<?php the_permalink();?>>
                    <?php the_title();?>
                </a>
            </h1>
            <p>
                <?the_excerpt();?>
            </p>
        </section>
        <?endwhile;?>
        <?endif;?>
    </div>



    <?php
    include("postgrid.php");
    ?>
</main>



<?php get_footer(); ?>