<?php
/*
Template Name: Страница проектов
*/
?>

<?php get_header(); ?>
<section class="work-hero">
    <div class="container word-hero__container">
        <h1 class="page-headline">Портфолио</h1>
    </div>
</section>

<section class="work">
    <div class="container">
        <div class="fillter">
            <a href="#" class="fillter__item fillter__item-active" data-tab="website">Сайты</a>
            <a href="#" class="fillter__item" data-tab="branding">Брендинг</a>
            <a href="#" class="fillter__item" data-tab="all_digital">Продвижение</a>
            <a href="#" class="fillter__item" data-tab="crm">Сквозная аналитика
                и CRM</a>
        </div>
        <div class="tab tab-active" data-tab="website" id="website">

            <div class="work-wrapper">

                <?php
                $args = array(
                    'post_type' => 'project',
                    'publish' => true,
                    'paged' => get_query_var('paged'),
                    'category_name' => 'website'
                );
                $my_posts = get_posts($args);
                foreach ($my_posts as $post) :
                    setup_postdata($post);
                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                ?>

                    <div class="work-wrapper__item" style="background-image: url('<?php echo $image_url[0]; ?>');">
                        <a href="<?php the_permalink(); ?>" class="work-wrapper__link"></a>
                        <div class="work-wrapper__overlay"></div>
                        <div class="work-wrapper__headline">
                            <h2><?php the_title(); ?></h2>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>

                        <div class="work-wrapper__tag-wrapper">
                            <?php $posttags = get_the_tags();
                                                                                    if ($posttags) {
                                                                                        foreach ($posttags as $tag) {
                                                                                            echo '<a class=tag>' . $tag->name . '</a>';
                                                                                        }
                                                                                    } ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="tab" data-tab="branding" id="branding">
            <div class="work-wrapper">
                <?php
                                                                                $args = array(
                                                                                    'post_type' => 'project',
                                                                                    'publish' => true,
                                                                                    'paged' => get_query_var('paged'),
                                                                                    'category_name' => 'branding'
                                                                                );
                                                                                $my_posts = get_posts($args);
                                                                                foreach ($my_posts as $post) :
                                                                                    setup_postdata($post);
                                                                                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                ?>

                    <div class="work-wrapper__item" style="background-image: url('<?php echo $image_url[0]; ?>');">
                        <a href="<?php the_permalink(); ?>" class="work-wrapper__link"></a>
                        <div class="work-wrapper__overlay"></div>
                        <div class="work-wrapper__headline">
                            <h2><?php the_title(); ?></h2>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>

                        <div class="work-wrapper__tag-wrapper">
                            <?php $posttags = get_the_tags();
                                                                                    if ($posttags) {
                                                                                        foreach ($posttags as $tag) {
                                                                                            echo '<a class=tag>' . $tag->name . '</a>';
                                                                                        }
                                                                                    } ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="tab" data-tab="all_digital" id="all_digital">
            <div class="work-wrapper">
                <?php
                                                                                $args = array(
                                                                                    'post_type' => 'project',
                                                                                    'publish' => true,
                                                                                    'paged' => get_query_var('paged'),
                                                                                    'category_name' => 'all_dightal'
                                                                                );
                                                                                $my_posts = get_posts($args);
                                                                                foreach ($my_posts as $post) :
                                                                                    setup_postdata($post);
                                                                                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                ?>

                    <div class="work-wrapper__item" style="background-image: url('<?php echo $image_url[0]; ?>');">
                        <a href="<?php the_permalink(); ?>" class="work-wrapper__link"></a>
                        <div class="work-wrapper__overlay"></div>
                        <div class="work-wrapper__headline">
                            <h2><?php the_title(); ?></h2>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>

                        <div class="work-wrapper__tag-wrapper">
                            <?php $posttags = get_the_tags();
                                                                                    if ($posttags) {
                                                                                        foreach ($posttags as $tag) {
                                                                                            echo '<a class=tag>' . $tag->name . '</a>';
                                                                                        }
                                                                                    } ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="tab" data-tab="crm" id="crm">
            <div class="work-wrapper">
                <?php
                                                                                $args = array(
                                                                                    'post_type' => 'project',
                                                                                    'publish' => true,
                                                                                    'paged' => get_query_var('paged'),
                                                                                    'category_name' => 'crm'
                                                                                );
                                                                                $my_posts = get_posts($args);
                                                                                foreach ($my_posts as $post) :
                                                                                    setup_postdata($post);
                                                                                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                ?>

                    <div class="work-wrapper__item" style="background-image: url('<?php echo $image_url[0]; ?>');">
                        <a href="<?php the_permalink(); ?>" class="work-wrapper__link"></a>
                        <div class="work-wrapper__overlay"></div>
                        <div class="work-wrapper__headline">
                            <h2><?php the_title(); ?></h2>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>

                        <div class="work-wrapper__tag-wrapper">
                            <?php $posttags = get_the_tags();
                                                                                    if ($posttags) {
                                                                                        foreach ($posttags as $tag) {
                                                                                            echo '<a class=tag>' . $tag->name . '</a>';
                                                                                        }
                                                                                    } ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>