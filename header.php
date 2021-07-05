<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <h1 class="site-title wrapper">
            <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/Bear_9_3.jpg" alt="site-title"></a>
        </h1>

        <nav id="navi">
            <ul class="wrapper">
                <li><a href="#a">カテゴリー1</a></li>
                <li><a href="#b">カテゴリー2</a></li>
                <li><a href="#c">カテゴリー3</a></li>
            </ul>
        </nav>
    </header>