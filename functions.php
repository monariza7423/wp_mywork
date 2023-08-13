<?php
function script_init() {
    wp_enqueue_style('my_style', get_theme_file_uri('style.css'));
}
add_action('wp_enqueue_scripts', 'script_init');

function create_news_category(){
	register_taxonomy(
		'news',
		'post',
		array(
			'label' => 'ニュース',
			'hierarchical' => true,
			'public' => true,
			'show_ui' => true,
		)
	);
}
add_action('init', 'create_news_category');

function create_news_post_type() {
    // @TODO:register_post_typeの名前は変更不可
    register_post_type('news', [
        'label' => 'ニュース',
        'public' => true,
        'has_archive' => false,
        'menu_position' => 5,
        'supports' => [
            'title',
            'content',
            'thumbnail',
						'date'
        ],
    ]);
}
add_action('init', 'create_news_post_type');

add_theme_support('post-thumbnails');
