<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_theme_support('custom-templates');


// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));


show_admin_bar(false);

function theme_add_scripts()
{

    
    // Подключаем файл baguetteBox.min.css
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // Подключаем файл animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    // Подключаем файл main.css
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

    // Подключаем файл main.css
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css');
    

    // Подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper-bundle.min', get_template_directory_uri() . '/js/swiper-bundle.min.js');
    //  Для картинок 
    wp_enqueue_script('baguettebox', get_template_directory_uri() . '/js/baguettebox.js');
    // Для параллакса
    wp_enqueue_script('simpleParallax', get_template_directory_uri() . '/js/simpleParallax.js');
    // Для wow
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js');
    // Для скролла
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js');

    wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-latest.min.js');



    function my_scripts() {
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
    }
    
    add_action( 'wp_enqueue_scripts', 'my_scripts' );
}

    // Добавляем поддержку шорткодов в текстовых виджетах
    add_filter('widget_text', 'do_shortcode');

    // Добавляем поддержку шорткодов в тексте записей и страниц
    add_filter('the_content', 'do_shortcode');
    add_filter('widget_text_content', 'do_shortcode');

    add_filter( 'redirect_canonical', 'my_redirect_canonical_filter', 10, 2 );


    add_action('admin_menu', 'remove_default_menus');

    function remove_default_menus()
    {
        // remove_menu_page('index.php');                  // Консоль
        // remove_menu_page('upload.php');                 // Медиафайлы
        // remove_menu_page('edit.php?post_type=page');    // Страницы
        // remove_menu_page('edit-comments.php');          // Комментарии
        // remove_menu_page('themes.php');                 // Внешний вид
        // remove_menu_page('plugins.php');                // Плагины
        // remove_menu_page('users.php');                  // Пользователи
        // remove_menu_page('tools.php');                  // Инструменты 
        // remove_menu_page('options-general.php');        // Настройки
        // remove_menu_page('wpcf7');   // Contact form 7
        // remove_menu_page('aiowpsec');   // wp security
        // remove_menu_page('edit.php?post_type=acf-field-group');   // ACF Field Group
    }

?>