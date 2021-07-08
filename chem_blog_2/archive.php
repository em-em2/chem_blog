    <?php get_header(); ?>

    <div id="container" class="wrapper">
        <main>
            <section class="new">
                <h1 class="main-article">記事一覧</h1>

                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>

                        <article>
                            <div>
                                <?php the_post_thumbnail(‘size1’); ?>
                            </div>


                            <div class="new-content">
                                <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></h2>

                                <?php the_time("Y-m-d"); ?>

                                <section><a href="<?php echo get_permalink(); ?>"><?php the_content(); ?></section>

                                <div class="small"><a href="#">カテゴリ1</a></div>
                            </div>
                        </article>

                <?php endwhile;
                endif; ?>
            </section>
        </main>

        <?php get_sidebar(); ?>

    </div>

    <?php get_footer(); ?>