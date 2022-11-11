<?php 
// custom_post_type
function custom_post_type()
{
    $custom_post_types = array(
        "news" => "News",
        "feature" => "Feature",
        "editorial" => "Editorial",
    );

foreach($custom_post_types as $custom_post_type_label => $custom_post_type_name ){
    register_post_type($custom_post_type_label, [
        'labels' => [
            'name' => "$custom_post_type_name",
            'singular_name' => "$custom_post_type_name",
            'menu_name' => "$custom_post_type_name",
            'name_admin_bar' => "$custom_post_type_name",
            'add_new' => "$custom_post_type_name  추가하기",
            'add_new_item' => "$custom_post_type_name  추가하기",
            'new_item' => "새 $custom_post_type_name",
            'edit_item' => "$custom_post_type_name 수정하기",
            'view_item' => "$custom_post_type_name",
            'all_items' => "$custom_post_type_name  리스트",
            'search_items' => "$custom_post_type_name  검색하기",
            'parent_item_colon' => "상위",
            'not_found' => "현재 등록된 $custom_post_type_name 가 없습니다.",
            'not_found_in_trash' => "휴지통에 버려진 $custom_post_type_name 가 없습니다.",
            
        ],
        
        'show_in_rest' => true,
        'public' => true,
        'menu_position' => 4,
        // 워드프레스 사이드메뉴의 아이콘 모양 찾기. https://developer.wordpress.org/resource/dashicons/#align-full-width
        'menu_icon' => 'dashicons-admin-post',
        // 아카이브 주소만들어주기, 고유주소에서 글이름으로 주소를 수정 잘 해줘야한다.
        'has_archive' => true,
        'hierarchical' => true,
        'supports' => [
            'page-attributes',
            'title',
            'editor',
            'thumbnail',
        ],
    ]);
};
};