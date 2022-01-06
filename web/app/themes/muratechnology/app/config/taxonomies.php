<?php

return [
    'vacancy_categories' => [
        'post_types' => ['vacancy'],
        'settings' => [
            'hierarchical' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'publicly_queryable' => true,
            'rewrite' => ['slug' => 'vacancy-categories'],
            'labels' => [
                'name' => 'Vacancy Categories',
                'singular_name' => 'Category',
                'search_items' =>  'Search Categories',
                'all_items' => 'All Categories',
                'parent_item' => 'Parent Categories',
                'parent_item_colon' => 'Parent Categories: ',
                'edit_item' => 'Edit Category',
                'update_item' => 'Update Category',
                'add_new_item' => 'Add New Category',
                'new_item_name' => 'New Category Name',
                'menu_name' => 'Categories',
            ],
        ],
    ],
    'team_member_categories' => [
        'post_types' => ['team-member'],
        'settings' => [
            'hierarchical' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'publicly_queryable' => true,
            'rewrite' => ['slug' => 'team-member-categories'],
            'labels' => [
                'name' => 'Member Categories',
                'singular_name' => 'Category',
                'search_items' =>  'Search Categories',
                'all_items' => 'All Categories',
                'parent_item' => 'Parent Categories',
                'parent_item_colon' => 'Parent Categories: ',
                'edit_item' => 'Edit Category',
                'update_item' => 'Update Category',
                'add_new_item' => 'Add New Category',
                'new_item_name' => 'New Category Name',
                'menu_name' => 'Categories',
            ],
        ],
    ],
    'faq_categories' => [
        'post_types' => ['faq'],
        'settings' => [
            'hierarchical' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'publicly_queryable' => true,
            'rewrite' => ['slug' => 'faq-categories'],
            'labels' => [
                'name' => 'FAQ Categories',
                'singular_name' => 'Category',
                'search_items' =>  'Search Categories',
                'all_items' => 'All Categories',
                'parent_item' => 'Parent Categories',
                'parent_item_colon' => 'Parent Categories: ',
                'edit_item' => 'Edit Category',
                'update_item' => 'Update Category',
                'add_new_item' => 'Add New Category',
                'new_item_name' => 'New Category Name',
                'menu_name' => 'Categories',
            ],
        ],
    ],     
];
