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
      <section class="new">
        <h2 class="main-article">新着記事</h2>

        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>

            <article>
              <div>
                <?php the_post_thumbnail(); ?>
              </div>

              <div class="new-content">
                <div class="time"><?php the_time("Y-m-d"); ?></div>

                <h3 class="article-title">
                  <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                </h3>

                <p class=" text">
                  <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
                </p>

                <div class="small"><?php the_category(', '); ?></div>
              </div>
            </article>


        <?php
          endwhile;
        endif;
        ?>

        <div class="readmore">
          <a href="archive.html">READ MORE</a>
        </div>
      </section>


      <div class="cat_list">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) :
        ?>
          <h2 class="main-article"><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?></a></h2>
          <?php
          $my_query = new WP_Query(
            array(
              'cat' => $category->term_id,
              'posts_per_page' => 3,
            )
          );
          if ($my_query->have_posts()) :
          ?>

            <article>
              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                <div class="img">
                  <?php the_post_thumbnail(); ?>
                </div>

                <div class="article-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>

                <div class="time">
                  <?php the_time("Y-m-d"); ?>
                </div>

              <?php endwhile; ?>

            </article>

            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            <p>投稿はありません。</p>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>



    </main>

    <?php get_sidebar(); ?>

  </div>

  <?php get_footer(); ?>

  <?php wp_footer(); ?>

</body>

</html>
