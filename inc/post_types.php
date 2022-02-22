<?php

add_action( 'init', 'marhi_post_types_init', 0 );

if ( ! function_exists( 'marhi_post_types_init' ) ) {
    function marhi_post_types_init()
    {
        $marhi_post_types = array();

        $marhi_post_types['news'] = array(
            'labels'             => array(
                'name'               => __( 'Новости', 'post type general name', 'marhi' ),
                'singular_name'      => _x( 'Новости', 'post type singular name', 'marhi' ),
                'menu_name'          => _x( 'Новости', 'admin menu', 'marhi' ),
                'name_admin_bar'     => _x( 'Новости', 'add new on admin bar', 'marhi' ),
                'add_new'            => _x( 'Добавить Новость', 'product', 'marhi' ),
                'add_new_item'       => __( 'Добавить Новость', 'marhi' ),
                'new_item'           => __( 'Новая Новость', 'marhi' ),
                'edit_item'          => __( 'Редактировать Новость', 'marhi' ),
                'view_item'          => __( 'Смотреть Новость', 'marhi' ),
                'all_items'          => __( 'Все Новости', 'marhi' ),
                'search_items'       => __( 'Поиск Новости', 'marhi' ),
                'parent_item_colon'  => __( 'Parent Product:', 'marhi' ),
                'not_found'          => __( 'Project not found.', 'marhi' ),
                'not_found_in_trash' => __( 'Project not found.', 'marhi' )
            ),
            'description'        => __( 'Описание.', 'marhi' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'query_var'          => true,
            'rewrite'            => null,
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 5,
            'supports'           => array( 'title', 'thumbnail', 'excerpt', 'editor' ),
        );

        $marhi_post_types['projects'] = array(
            'labels'             => array(
                'name'               => __( 'Проекты', 'post type general name', 'marhi' ),
                'singular_name'      => _x( 'Проекты', 'post type singular name', 'marhi' ),
                'menu_name'          => _x( 'Проекты', 'admin menu', 'marhi' ),
                'name_admin_bar'     => _x( 'Проекты', 'add new on admin bar', 'marhi' ),
                'add_new'            => _x( 'Добавить Проект', 'product', 'marhi' ),
                'add_new_item'       => __( 'Добавить Проект', 'marhi' ),
                'new_item'           => __( 'Новая Проект', 'marhi' ),
                'edit_item'          => __( 'Редактировать Проект', 'marhi' ),
                'view_item'          => __( 'Смотреть Проект', 'marhi' ),
                'all_items'          => __( 'Все Проекты', 'marhi' ),
                'search_items'       => __( 'Поиск Проекта', 'marhi' ),
                'parent_item_colon'  => __( 'Parent Product:', 'marhi' ),
                'not_found'          => __( 'Проект не найден.', 'marhi' ),
                'not_found_in_trash' => __( 'Проект не найден.', 'marhi' )
            ),
            'description'        => __( 'Описание.', 'marhi' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'query_var'          => true,
            'rewrite'            => null,
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 5,
            'supports'           => array( 'title', 'thumbnail', 'excerpt', 'editor' ),
        );

        if ( $marhi_post_types ) {
            foreach ( $marhi_post_types as $post_type => $args ) {
                register_post_type( $post_type, $args );
            }
        }
        $categories = array(
            'name'              => _x( 'Категории', 'taxonomy general name' ),
            'singular_name'     => _x( 'Категория', 'taxonomy singular name' ),
            'search_items'      => __( 'Поиск Категории' ),
            'all_items'         => __( 'Все Категории' ),
            'parent_item'       => __( 'Родительская Категория' ),
            'parent_item_colon' => __( 'Родительская Категория:' ),
            'edit_item'         => __( 'Изменить Категорию' ),
            'update_item'       => __( 'Обновить Категорию' ),
            'add_new_item'      => __( 'Добавить новую категорию' ),
            'new_item_name'     => __( 'Новое название категории' ),
            'menu_name'         => __( 'Категории' ),
        );

        register_taxonomy( 'projects_category', 'projects',
            array(
                'labels' => $categories,
                'rewrite' => array( 'slug' => 'projects_category' ),
                'hierarchical' => true
            )
        );
    }


}
