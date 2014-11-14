<?php
/**
 * Functions.php file for GV Summit 2015 Child Theme
 *
 * Assumes parent is gv-project-theme. 
 * This code will run before the functions.php in that theme.
 */

/**
 * GRAVITY FORMS: Enable gform_confirmation_anchor so that form submissions scroll the page to the top of the form.
 */
add_filter("gform_confirmation_anchor", create_function("","return true;"));


if (is_object($gv)) :

	/**
	 * Define an image to show in the header.
	 * Project theme generic has none, so it will use site title
	 */
//	$gv->settings['header_img'] = 'http://community.globalvoicesonline.org/wp-content/uploads/2014/10/gv-community-header-900.png';

	/**
	 * Enable Featured posts - Tells GV Query Manipulation to prefetch featured posts before main loop and exclude their ids.
	 * @see gv_load_featured_posts()
	 */
//	$gv->use_featured_posts = true;
	
	/**
	 * Hide tags interface completely to avoid people using them
	 * @see gv_hide_tags_ui()
	 */
//	add_filter('gv_hide_tags_ui', '__return_true');
	
	/**
	 * Filter the favicon directory used by gv_display_head_icons()
	 * 
	 * @param string $dir Default directory (no trailing /) to find favicons in
	 * @return string desired directory (no trailing /)
	 */
//	function risingvoices_theme_gv_favicon_dir($dir) {
//		return 'https://s3.amazonaws.com/static.globalvoices/img/tmpl/favicon-rv';
//	}
//	add_filter('gv_favicon_dir', 'risingvoices_theme_gv_favicon_dir');
	
	/**
	 * Filter the apple touch icon to be an RV logo
	 * 
	 * @param string $icon Default icon
	 * @return string desired icon
	 */
//	function rising_theme_gv_apple_touch_icon($icon) {
//		return gv_get_dir('theme_images') ."risingvoices-apple-touch-icon-precomposed-300.png";
//	}
//	add_filter('gv_apple_touch_icon', 'rising_theme_gv_apple_touch_icon');
		
	/**
	 * Filter the og:image (facebook/g+) default icon to be an RV logo
	 * 
	 * @param string $icon Default icon
	 * @return string desired icon
	 */
//	function gvadvocacy_theme_gv_og_image_default($icon) {
//		return gv_get_dir('theme_images') ."rv-logo-square-600.png";
//	}
//	add_filter('gv_og_image_default', 'gvadvocacy_theme_gv_og_image_default');
	
	/**
	 * Filter ALL CASES OF og:image (facebook/g+) icon to be an RV logo
	 * 
	 * @param string $icon Default icon
	 * @return string desired icon
	 */
//	function gvadvocacy_theme_gv_og_image($icon) {
//		return gv_get_dir('theme_images') ."rv-logo-square-600.png";
//	}
//	add_filter('gv_og_image', 'gvadvocacy_theme_gv_og_image');
	
	/**
	 * Define Categories to be inserted into post data before returning content for translation during fetch
	 * @see gv_lingua::reply_to_ping()
	 */
//	$gv->lingua_site_categories[] = 'summit2015';

	/**
	 * Define special categories as content types and the conditions in which to segregate them
	 * Used by gv_get_segregated_categories() and gv_
	 * segregation_conditions apply to primary content only. sidebar headlines etc assume segregation
	 * segregate_headlines - use if headlines will be a waste for this , blocks them from showing as title only
	 */
//	$gv->category_content_types = array(
//		'feature' => array('title' => 'feature'),
//	    );
	
	/**
	 * Set a custom site description using a lingua string. To be used in social media sharing etc.
	 */
//	$gv->site_description = "Rising Voices aims to extend the benefits and reach of citizen media by connecting online media activists around the world and supporting their best ideas.";

	/**
	 * Sponsors definition to be used by gv_get_sponsors()
	 */
	$gv->sponsors = array(
		'berkman' => array(
			"name" => "Berkman",
			"slug" => "berkman",
			"description" => 'Berkman Center for Internet and Society at Harvard University.',
			"url" => "http://cyber.law.harvard.edu/",
			"status" => 'featured',
			),
		'mdif' => array(
			"name" => "Media Developmet Investment Fund",
			"slug" => "mdif",
			"description" => 'Media Development Investment Fund',
			"url" => "http://www.mdif.org/",
			"status" => 'featured',
			),
		'macarthur' => array(
			"name" => "MacArthur Foundation",
			"slug" => "macarthur",
			"description" => 'MacArthur Foundation',
			"url" => "http://www.macfound.org/",
			"status" => 'featured',
			),
		'hivos' => array(
			"name" => "Hivos",
			"slug" => "hivos",
			"description" => 'Hivos, the Humanist Institute for Development Cooperation',
			"url" => "http://www.hivos.org/",
			"status" => 'featured',
			),
		'omidyar' => array(
			"name" => "Omidyar Network",
			"slug" => "omidyar",
			'description' => 'Omidyar Network - Every person has the power to make a difference.',
			"url" => "http://www.omidyar.com/",
			'status' => 'featured',
			),
		'ford' => array(
			"name" => "Ford Foundation",
			"slug" => "ford",
			"description" => 'Ford Foundation - Working with Visionaries on the Frontlines of Social Change Worldwide',
			"url" => "http://fordfound.org/",
			"status" => 'featured',
			),
		'osi' => array(
			"name" => "Open Society Institute",
			"slug" => "osi",
			"description" => 'Open Society Institute - Building vibrant and tolerant democracies.',
			"url" => "http://www.soros.org/",
			"status" => 'featured',
			),
		'reuters' => array(
			"name" => "Reuters",
			"slug" => "reuters",
			"description" => 'Reuters - Business, financial, breaking and international news.',
			"url" => "http://www.reuters.com/",
			"status" => 'sponsor',
			),
		'knight' => array(
			"name" => "Knight Foundation",
			"slug" => "knight",
			"description" => 'John S. and James L. Knight Foundation',
			"url" => "http://www.knightfdn.org/",
			"status" => 'sponsor',
			),
		'unfpa' => array(
			"name" => "UNFPA",
			"slug" => "unfpa",
			"description" => '',
			"url" => "http://www.unfpa.org/",
			"status" => 'sponsor',
			),
	);
	
	/**
	 * Filter gv_post_archive_hide_dates to hide them on hoempage
	 * @param type $limit
	 * @param type $args
	 * @return int
	 */
	function rv_gv_post_archive_hide_dates($hide_dates) {
		if (is_home() AND !is_paged())
			return true;
		
		return $hide_dates;
	}
//	add_filter('gv_post_archive_hide_dates', 'rv_gv_post_archive_hide_dates', 10);

	/**
	 * Define new categories to force addition of on all sites using this theme.
	 *
	 * Used to add categories to all lingua sites automatically. Array used to be defined in the function.
	 */
//	$gv->new_categories = array(
//		// Nepali Lang dec31 09
//		'Nepali' => array(
//			'slug' => 'nepali',
//			'description' => 'ne',
//			'parent' => gv_slug2cat('languages')
//		),
//	);
	
/**
 * Register CSS variants specific to the this theme
 * 
 * Attached to 'wp' action so as to come before wp_head where gv_output_css_variants acts
 * 
 * @see gv_add_css_variant() which is used to register variants
 * @see gv_output_css_variants() which echos out the CSS of variants activated by ?gv_css_variant=$variant_label
 */
function gvsummit2015_css_variants() {

		gv_add_css_variant(array(
		'label' => 'header_more_blue',
		'css' => "

#BLUE-BACKGROUND,
.header-container,
.header-nav-bar-container,
.medium-green-gradient {
/*http://css-tricks.com/examples/CSS3Gradient/*/
	background-color: #27A6EC;
background-color: #00C0DE
;}
#BLUE-HIGHLIGHT-BORDER,
.menu li,
.header-menu-container input,
.blue-hightlight-border {
	/* Lightest shade of green from medium-green-gradient*/
	border-color: #00A8C1;
}
#TEXT-SHADOW-BLUE,
.header-mission-statement,
.header-mission-statement a,
.header-container,
.header-nav-bar-container,
.header-nav-bar-container a,
.text-shadow-blue {
	/*color: #fff;*/
	text-shadow: 1px 1px 2px #00A8C1;
	}

#MEDIUM-BLUE-TEXT,
.header-container .toggle-menu-content a,
.header-container .menu-opened .menu-toggle,
.medium-rv-blue-text {
	color: #2F93E8;
}
#NO-TEXT-SHADOW,
.header-container .menu-opened .toggle-menu-heading,
.header-container .toggle-menu-content,
.header-container .active-item a,
.no-text-shadow {
	text-shadow: none;
}	
#LINK-BOLDNESS-MEDIUM-BLUE-BACKGROUND, 
.header-mission-statement a,
.link-boldness-medium-blue-background {
	font-weight: bold;
}
.header-container .site-search input[type='submit'] {
	background-color: #00A8C1;
}
.header-container .site-search input {
	outline: 1px solid #00A8C1;
}
		",
	));
}
add_action('wp', 'gvsummit2015_css_variants');
	
/**
 * Red Header variant: jQuery to replace default header image
 * 
 * Makes it so that if red_header CSS variant is active the header image is automatically
 * replced with an all-white version. 
 * 
 * DELETE when the variant is no longer needed.
 */
function gvsummit2015_css_variant_js() {
	
	/**
	 * TEMPORARY: keep it emabled all the time, unless white_header is enabled
	 */
//	if (!gv_is_active_css_variant('white_header') AND !gv_is_active_css_variant('white_header_white_stripe'))
//		gv_activate_css_variant('red_header');
	
	/**
	 * If red header is active replace the logo with a white version
	 */
	if (gv_is_active_css_variant('logo_myriad_allbold')) :

		$alt_header_url = get_stylesheet_directory_uri() . '/images/rv-header-myriad-allbold-600.png';

		echo "
<script type='text/javascript'>
	jQuery(document).ready(function($) {
		$('#logo').attr('src', '$alt_header_url');
			console.log('test');
	});
</script>
		";
	endif;
}
//add_action('wp_head', 'gvsummit2015_css_variant_js');
	
endif; // is_object($gv)
?>