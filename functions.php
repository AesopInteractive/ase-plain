<?php


add_theme_support('post-thumbnails');

function ase_get_social_excerpt(){

	$page_excerpt = get_post_meta(get_the_ID(), 'ase_page_excerpt', true);


	if ( get_the_excerpt() ){
		$out = sprintf('%s', get_the_excerpt());
	} elseif( $page_excerpt ) {
		$out = sprintf('%s',$page_excerpt);
	} else {

		$out = sprintf('%s', get_bloginfo('description'));
	}

	return $out;
}

function ase_get_social_backup_img($name = '',$prop = '', $vendor = ''){

	$default = get_option('aesop_social_'.$vendor.'_default_img');

	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full');
	return has_post_thumbnail() ? sprintf('<meta %s="%s:image" content="%s">', $name, $prop,$imgsrc[0]) : sprintf('<meta %s="%s:image" content="%s">',$name, $prop, $default);
}