<?php
/**
 * Audio Podcast: Block Patterns
 *
 * @package Audio Podcast
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'audio-podcast',
		array( 'label' => __( 'Audio Podcast', 'audio-podcast' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'audio-podcast/banner-section',
		array(
			'title'      => __( 'Banner Section', 'audio-podcast' ),
			'categories' => array( 'audio-podcast' ),
			'content'    => "<!-- wp:group {\"align\":\"full\",\"className\":\"outer-banner\"} -->\n<div class=\"wp-block-group alignfull outer-banner\"><!-- wp:columns {\"className\":\"mb-0\"} -->\n<div class=\"wp-block-columns mb-0\"><!-- wp:column {\"width\":\"11.11%\",\"className\":\"list-box\"} -->\n<div class=\"wp-block-column list-box\" style=\"flex-basis:11.11%\"><!-- wp:cover {\"customOverlayColor\":\"#1b2039\",\"className\":\"list-section p-4\"} -->\n<div class=\"wp-block-cover has-background-dim list-section p-4\" style=\"background-color:#1b2039\"><div class=\"wp-block-cover__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"white\",\"className\":\"home\",\"fontSize\":\"normal\"} -->\n<h2 class=\"has-text-align-center home has-white-color has-text-color has-normal-font-size\">Home</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"className\":\"music\",\"fontSize\":\"normal\"} -->\n<h2 class=\"has-text-align-center music has-normal-font-size\">Music</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"className\":\"record\",\"fontSize\":\"normal\"} -->\n<h2 class=\"has-text-align-center record has-normal-font-size\">Record</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"className\":\"premium\",\"fontSize\":\"normal\"} -->\n<h2 class=\"has-text-align-center premium has-normal-font-size\">Premium</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"className\":\"favourite\",\"fontSize\":\"normal\"} -->\n<h2 class=\"has-text-align-center favourite has-normal-font-size\">Favourite</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"className\":\"recent\",\"fontSize\":\"normal\"} -->\n<h2 class=\"has-text-align-center recent has-normal-font-size\">Recent</h2>\n<!-- /wp:heading --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"88.88%\",\"className\":\"box-baner ms-0\"} -->\n<div class=\"wp-block-column box-baner ms-0\" style=\"flex-basis:88.88%\"><!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":3822,\"dimRatio\":0,\"minHeight\":535,\"className\":\"banner-section\"} -->\n<div class=\"wp-block-cover banner-section\" style=\"min-height:535px\"><img class=\"wp-block-cover__image-background wp-image-3822\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"\",\"className\":\"ms-0\"} -->\n<div class=\"wp-block-column ms-0\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"50px\"}},\"textColor\":\"white\"} -->\n<h1 class=\"has-text-align-left has-white-color has-text-color\" style=\"font-size:50px\">THE INSPIRE PODCAST</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"fontSize\":\"normal\"} -->\n<p class=\"has-text-align-left has-normal-font-size\">Lorem ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem ipsum&nbsp;is simply dummy text.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"left\"} -->\n<div class=\"wp-block-buttons is-content-justification-left\"><!-- wp:button {\"style\":{\"color\":{\"gradient\":\"linear-gradient(130deg,rgb(255,73,141) 5%,rgb(254,124,87) 99%)\"},\"typography\":{\"fontSize\":\"15px\"}},\"className\":\"baner-btn\"} -->\n<div class=\"wp-block-button has-custom-font-size baner-btn\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-background\" style=\"background:linear-gradient(130deg,rgb(255,73,141) 5%,rgb(254,124,87) 99%)\">EXPLORE ALL</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);

	register_block_pattern(
		'audio-podcast/player-section',
		array(
			'title'      => __( 'Player Section', 'audio-podcast' ),
			'categories' => array( 'audio-podcast' ),
			'content'    => "<!-- wp:cover {\"minHeight\":200,\"align\":\"full\",\"className\":\"play-section\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim play-section\" style=\"min-height:200px\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"className\":\"inner-play p-4 mb-0\"} -->\n<div class=\"wp-block-columns inner-play p-4 mb-0\"><!-- wp:column {\"width\":\"11.11%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:11.11%\"><!-- wp:image {\"id\":3905,\"width\":58,\"height\":58,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/player-img.png\" alt=\"\" class=\"wp-image-3905\" width=\"58\" height=\"58\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"88.88%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:88.88%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"fontSize\":\"normal\"} -->\n<h3 class=\"has-text-align-left has-normal-font-size\">Dream Your Moments</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\n<p class=\"has-text-align-left\" style=\"font-size:15px\">Ava Cornish</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:audio {\"id\":3906} -->\n<figure class=\"wp-block-audio\"><audio controls src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/sample-audio.mp3\" loop></audio></figure>\n<!-- /wp:audio --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);
}