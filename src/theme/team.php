<?php
/*
Template Name: Страница команды
*/
?>
<?php get_header(); ?>
<section class="team-hero">
    <div class="container">
        <h1 class="page-headline">Команда</h1>
    </div>
</section>
<section class="team-page">
    <div class="team__conatiner container">
        <?php
        $args = array(
            'post_type' => 'team',
            'orderby' => 'date',
            'order' => 'ASC',
            'publish' => true,
            'numberposts' => -1,
            'paged' => get_query_var('paged')
        );
        $my_posts = get_posts($args);
        foreach ($my_posts as $post) :
            setup_postdata($post);
            ?>

            <div class="team-item">
                <img class="img-responsive team-item__img" <?php awesome_acf_responsive_image(get_field( 'photo-tema' ),'thumb-700','100%'); ?>  alt="<?php the_title(); ?>" />
                <h3 class="team-item__name"><?php the_title(); ?></h3>
                <p class="team-item__position"><?php the_field('position') ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php get_footer(); ?>