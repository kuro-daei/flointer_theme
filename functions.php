<?php

add_action( 'after_setup_theme', 'flointer_theme_setup' );

function flointer_theme_setup() {
	add_theme_support( 'custom-header' );
}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
	'description' => __( 'The primary widget area', 'dir' ),
	'before_widget' => '<div id="%1$s" class="col2 widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
    ));
}

# Contact Form7 用のメール確認機能
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                $result['valid'] = false;
                $result['reason'][$name] = '確認用のメールアドレスが一致していません';
            }
        }
    }
    return $result;
}
?>
