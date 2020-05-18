<?php

    //Handle the Page Template Hierarchy
    function rkf_page_template_add_subdir( $templates = array() ) {

        // Generally this doesn't happen, unless another plugin / theme does modifications
        // of their own. In that case, it's better not to mess with it again with our code.
        if( empty( $templates ) || ! is_array( $templates ) || count( $templates ) < 3 )
            return $templates;

        $page_tpl_idx = 0;
        $cnt = count( $templates );
        if( $templates[0] === get_page_template_slug() ) {
            // if there is custom template, then our page-{slug}.php template is at the next index
            $page_tpl_idx = 1;
        }

        // the last one in $templates is page.php, so
        // all but the last one in $templates starting from $page_tpl_idx will be moved to sub-directory
        for( $i = $page_tpl_idx; $i < $cnt; $i++ ) {
            $templates[$i] = rkf_views_dir($templates[$i]);
        }

        return $templates;
    }

    // the original filter hook is {$type}_template_hierarchy,
    // wihch is located in wp-includes/template.php file
    add_filter( 'page_template_hierarchy', 'rkf_page_template_add_subdir' );

    //Handle the Single Template Hierarchy
    function rkf_single_view_add_subdir( $templates = array() ){

        // Generally this doesn't happen, unless another plugin / theme does modifications
        // of their own. In that case, it's better not to mess with it again with our code.
        if( empty( $templates ) || ! is_array( $templates ) || count( $templates ) < 3 )
            return $templates;

        $page_tpl_idx = 0;
        $cnt = count( $templates );
        if( $templates[0] === get_post_field( 'post_name') ) {
            // if there is custom template, then our post-{slug}.php template is at the next index
            $page_tpl_idx = 1;
        }

        // the last one in $templates is post.php, so
        // all but the last one in $templates starting from $page_tpl_idx will be moved to sub-directory
        for( $i = $page_tpl_idx; $i < $cnt; $i++ ) {
            $templates[$i] = rkf_views_dir($templates[$i]);
        }

        return $templates;
    }
    add_filter( 'single_template_hierarchy', 'rkf_single_view_add_subdir' );

    //Handle Posts (post type)
    function rkf_get_custom_post_template($single_template) {
        global $post;
        if ($post->post_type == 'post' || $post->post_type == 'page') {

            if ($post->post_type == 'post') {
                if(file_exists(rkf_views_dir('post.php'))){
                    return rkf_views_dir('post.php');
                }
            }

            if ($post->post_type == 'page') {
                if(file_exists(rkf_views_dir('page.php'))){
                    return rkf_views_dir('page.php');
                }
            }

            if(file_exists(rkf_views_dir('single.php'))){
                return rkf_views_dir('single.php');
            }
            if(file_exists(rkf_views_dir('singular.php'))){
                return rkf_views_dir('singular.php');
            }
        } else {
            if(file_exists(rkf_views_dir('single-'.$post->post_type.'.php'))){
                return rkf_views_dir('single-'.$post->post_type.'.php');
            }
        }
        return $single_template;
    }
    add_filter( "single_template", "rkf_get_custom_post_template" ) ;

    //Handle the Archive Template Hierarchy
    function rkf_view_add_subdir( $template, $type, $templates ){

        foreach($templates as $t){
            if(file_exists(rkf_views_dir($t))){
                return rkf_views_dir($t);
            }
        }

        return $template;
    }
    add_filter( 'archive_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'home_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'page_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'taxonomy_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'tag_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'date_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'category_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'singular_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'attachment_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( '404_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'embed_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'tag_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'author_template', 'rkf_view_add_subdir', 10, 3 );
    add_filter( 'frontpage_template', 'rkf_view_add_subdir', 10, 3);

    function rkf_get_header($extra = false){
        if($extra) $extra = '-' . $extra;
        $dir = rkf_views_dir('header' . $extra);
        include $dir . '.php';
    }

    function rkf_get_footer($extra = false){
        if($extra) $extra = '-' . $extra;
        $dir = rkf_views_dir('footer' . $extra);
        include $dir.'.php';
    }

    function rkf_get_sidebar($extra = false){
        if($extra) $extra = '-' . $extra;
        $dir = rkf_views_dir('sidebar' . $extra);
        include $dir.'.php';
    }

?>
