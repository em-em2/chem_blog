<?php
function init_func()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('init', 'init_func');

//サイドバーにウィジェット追加
function widgetsidebar_init()
{
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'side-widget',
        'before_widget' => '
    <div id="%1$s" class="%2$s sidebar-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="sidebar-title">',
        'after_title' => '</h5>'
    ));
}
add_action('widgets_init', 'widgetsidebar_init');
