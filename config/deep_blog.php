<?php

return [

    'blog_title_suffix'=>env('BLOG_TITLE_SUFFIX',''),
    'blog_name' => env('BLOG_NAME','Deep Blog'),
    'blog_sub_title' => env('BLOG_SUB_TITLE','Deep BLog sub tile'),
    'blog_desc' => env('BLOG_DESC','Zhmzhm Blog Pro is a modern WordPress blog theme that is built with standards in mind'),
    'home_column_num' => env('HOME_COLUMN_NUM',3),//2,3,4,5
    'copyright' => env('COPYRIGHT',date('Y') .' '. env('BLOG_NAME','Deep Blog')),
    'has_sidebar' => 1,//0不展示 1 展示
    'theme' => env('HAS_SIDEBAR',1),//1 lite default 2 dark
    'show_comment' => env('SHOW_COMMENT',0),//0 不显示，1 显示
    'home_page_num' => env('HOME_PAGE_NUM',15),
    'beian_number' => env('BEIAN_NUMBER',''),

    'settings' => [
        'auth' => '',
        'middleware' => ''
    ]
];
