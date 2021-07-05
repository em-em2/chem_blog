<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body>

    <?php
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id);
    ?>

    <?php get_header(); ?>

    <div id="container" class="wrapper">
        <main>

            <?php if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>

                    <h1><?php the_title(); ?></h1>

                    <?php the_time("Y-m-d"); ?>

                    <div>
                        <?php the_post_thumbnail(‘size1’); ?>
                    </div>

                    <section><?php the_content(); ?></section>


            <?php endwhile;
            endif; ?>

            <?php previous_post_link(); ?>
            <?php next_post_link(); ?>
        </main>

        <?php get_sidebar(); ?>

    </div>

    <?php get_footer(); ?>