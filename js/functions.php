<?php
/**
 * Created by PhpStorm.
 * User: andri
 * Date: 16.02.2018
 * Time: 20:28
 */

register_nav_menus( array( // Регистрируем 2 меню
    'top' => 'Верхнее меню',
    'left' => 'Нижнее'
) );
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

if ( function_exists('register_sidebar') )
    register_sidebar(); // Регистрируем сайдбар

function add_menuclass($ulclass)
{
    return preg_replace('/<a /', '<a class="flex-item scrollTo"', $ulclass);
}

add_filter('wp_nav_menu', 'add_menuclass');

show_admin_bar(false);
?>