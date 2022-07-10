<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<title>Curriculum vitae &#8211; smnik</title>
	<meta name="robots" content="max-image-preview:large">
	<link rel="dns-prefetch" href="<?php echo get_template_directory_uri(); ?>//fonts.googleapis.com">
	<link rel="dns-prefetch" href="<?php echo get_template_directory_uri(); ?>//s.w.org">
	<link href="<?php echo get_template_directory_uri(); ?>https://fonts.gstatic.com/" crossorigin rel="preconnect">
	<link rel="alternate" type="application/rss+xml" title="smnik &raquo; Feed" href="<?php echo get_template_directory_uri(); ?>./../feed/index.html">
	<link rel="alternate" type="application/rss+xml" title="smnik &raquo; Comments Feed" href="<?php echo get_template_directory_uri(); ?>./../comments/feed/index.html">
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": ".\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.1"
			}
		};
		! function(e, a, t) {
			var n, r, o, i = a.createElement("canvas"),
				p = i.getContext && i.getContext("2d");

			function s(e, t) {
				var a = String.fromCharCode;
				p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
				e = i.toDataURL();
				return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
			}

			function c(e) {
				var t = a.createElement("script");
				t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
			}
			for (o = Array("flag", "emoji"), t.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
				if (!p || !p.fillText) return !1;
				switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
					case "flag":
						return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
					case "emoji":
						return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
				}
				return !1
			}(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
			t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
				t.DOMReady = !0
			}, t.supports.everything || (n = function() {
				t.readyCallback()
			}, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
				"complete" === a.readyState && t.readyCallback()
			})), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="bootstrap-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/bootstrap/css/bootstrap.min.css?ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="slick-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/slick/slick.css?ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="slicknav-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/css/slicknav.min.css?ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="slick-theme-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/slick/slick-theme.css?ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="fontawesome-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/font-awesome/css/all.min.css?ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="bosa-blocks-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/css/blocks.min.css?ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="bosa-google-font-css" href="<?php echo get_template_directory_uri(); ?>https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C400i%2C600%2C700%2C800%7CPoppins%3A300%2C400%2C400i%2C500%2C600%2C700%2C800%2C900&#038;display=swap&#038;ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="bosa-corporate-dark-style-parent-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/style.css?ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="bosa-corporate-dark-google-fonts-css" href="<?php echo get_template_directory_uri(); ?>https://fonts.googleapis.com/css2?family=Rubik%3Awght%40300%3B400%3B500%3B600%3B700&#038;display=swap&#038;ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="bosa-corporate-dark-google-fonts-two-css" href="<?php echo get_template_directory_uri(); ?>https://fonts.googleapis.com/css2?family=Oswald%3Awght%40200%3B300%3B400%3B500%3B600%3B700&#038;display=swap&#038;ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="wp-block-library-css" href="<?php echo get_template_directory_uri(); ?>./../wp-includes/css/dist/block-library/style.min.css?ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="wp-block-library-theme-css" href="<?php echo get_template_directory_uri(); ?>./../wp-includes/css/dist/block-library/theme.min.css?ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="bosa-style-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa-corporate-dark/style.css?ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-icons-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.11.0" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-animations-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.1.4" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-frontend-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.1.4" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-post-316-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/uploads/elementor/css/post-316.css?ver=1618175668" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-pro-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.1.1" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-global-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/uploads/elementor/css/global.css?ver=1618177041" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-post-458-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/uploads/elementor/css/post-458.css?ver=1618978879" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-post-321-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/uploads/elementor/css/post-321.css?ver=1619319531" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-post-332-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/uploads/elementor/css/post-332.css?ver=1618432724" type="text/css" media="all">
	<link rel="stylesheet" id="google-fonts-1-css" href="<?php echo get_template_directory_uri(); ?>https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CAlmendra+SC%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.7.1" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-icons-shared-0-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.1" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-icons-fa-regular-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.1" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.1" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.1" type="text/css" media="all">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-includes/js/jquery/jquery.min.js?ver=3.5.1" id="jquery-core-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
	<link rel="https://api.w.org/" href="<?php echo get_template_directory_uri(); ?>./../wp-json/index.html">
	<link rel="alternate" type="application/json" href="<?php echo get_template_directory_uri(); ?>./../wp-json/wp/v2/pages/458/index.html">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo get_template_directory_uri(); ?>./../xmlrpc.php?rsd">
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo get_template_directory_uri(); ?>./../wp-includes/wlwmanifest.xml">
	<meta name="generator" content="WordPress 5.7.1">
	<link rel="canonical" href="<?php echo get_template_directory_uri(); ?>./index.html">
	<link rel="shortlink" href="<?php echo get_template_directory_uri(); ?>./../index.html?p=458">
	<link rel="alternate" type="application/json+oembed" href="<?php echo get_template_directory_uri(); ?>./../wp-json/oembed/1.0/embed/index.html?url=.%2Fcv%2F">
	<link rel="alternate" type="text/xml+oembed" href="<?php echo get_template_directory_uri(); ?>./../wp-json/oembed/1.0/embed/index.html?url=.%2Fcv%2F&#038;format=xml">
	<style>
		.site-header .site-branding>a {
			max-width: 270px;
			overflow: hidden;
			display: inline-block;
		}

		/* Site Title */
		.header-one .site-branding .site-title,
		.header-two .site-branding .site-title,
		.header-three .site-branding .site-title {
			color: #030303;
		}

		/* Tagline */
		.header-one .site-branding .site-description,
		.header-two .site-branding .site-description,
		.header-three .site-branding .site-description {
			color: #767676;
		}

		/* Page and Single Post Title */
		body.single .page-title,
		body.page .page-title {
			color: #101010;
		}

		/* Site body Text */
		body,
		html {
			color: #333333;
		}

		/* Heading Text */
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			color: #030303;
		}

		/* Primary Background */
		.section-title:before,
		.button-primary,
		body.woocommerce span.onsale,
		body.woocommerce-page span.onsale,
		body .woocommerce.widget_price_filter .ui-slider .ui-slider-handle,
		#offcanvas-menu .header-btn-wrap .header-btn .button-primary {
			background-color: #EB5A3E;
		}

		/* Primary Border */
		.post .entry-content .entry-header .cat-links a,
		.attachment .entry-content .entry-header .cat-links a,
		.wrap-coming-maintenance-mode .content .button-container .button-primary {
			border-color: #EB5A3E;
		}

		/* Primary Color */
		blockquote:before,
		.post .entry-content .entry-header .cat-links a,
		.attachment .entry-content .entry-header .cat-links a,
		.post .entry-meta a:before,
		.attachment .entry-meta a:before,
		.single .entry-container .cat-links:before,
		.post .entry-meta .tag-links:before {
			color: #EB5A3E;
		}

		/* Hover Background */
		input[type=button]:hover,
		input[type=button]:active,
		input[type=button]:focus,
		input[type=reset]:hover,
		input[type=reset]:active,
		input[type=reset]:focus,
		input[type=submit]:hover,
		input[type=submit]:active,
		input[type=submit]:focus,
		.button-primary:hover,
		.button-primary:focus,
		.button-primary:active,
		.button-outline:hover,
		.button-outline:focus,
		.button-outline:active,
		.search-form .search-button:hover,
		.search-form .search-button:focus,
		.search-form .search-button:active,
		.page-numbers:hover,
		.page-numbers:focus,
		.page-numbers:active,
		#back-to-top a:hover,
		#back-to-top a:focus,
		#back-to-top a:active,
		.section-highlight-post .slick-control li.slick-arrow:not(.slick-disabled):hover,
		.section-highlight-post .slick-control li.slick-arrow:not(.slick-disabled):focus,
		.section-highlight-post .slick-control li.slick-arrow:not(.slick-disabled):active,
		.alt-menu-icon a:hover .icon-bar,
		.alt-menu-icon a:focus .icon-bar,
		.alt-menu-icon a:active .icon-bar,
		.alt-menu-icon a:hover .icon-bar:before,
		.alt-menu-icon a:hover .icon-bar:after,
		.alt-menu-icon a:focus .icon-bar:before,
		.alt-menu-icon a:focus .icon-bar:after,
		.alt-menu-icon a:active .icon-bar:before,
		.alt-menu-icon a:active .icon-bar:after,
		#offcanvas-menu .close-offcanvas-menu button:hover,
		#offcanvas-menu .close-offcanvas-menu button:active,
		.highlight-post-slider .post .entry-meta .cat-links a:hover,
		.highlight-post-slider .post .entry-meta .cat-links a:focus,
		.highlight-post-slider .post .entry-meta .cat-links a:active,
		.site-footer .social-profile ul li a:hover,
		.site-footer .social-profile ul li a:focus,
		.site-footer .social-profile ul li a:active,
		#back-to-top a:hover,
		#back-to-top a:focus,
		#back-to-top a:active,
		.comments-area .comment-list .reply a:hover,
		.comments-area .comment-list .reply a:focus,
		.comments-area .comment-list .reply a:active,
		.widget .tagcloud a:hover,
		.widget .tagcloud a:focus,
		.widget .tagcloud a:active,
		.infinite-scroll #infinite-handle span:hover,
		.infinite-scroll #infinite-handle span:focus,
		.infinite-scroll #infinite-handle span:active,
		.slicknav_btn:hover .slicknav_icon-bar,
		.slicknav_btn:focus .slicknav_icon-bar,
		.slicknav_btn:hover .slicknav_icon-bar,
		.slicknav_btn:hover .slicknav_icon-bar:first-child:before,
		.slicknav_btn:hover .slicknav_icon-bar:first-child:after,
		.slicknav_btn:focus .slicknav_icon-bar:first-child:before,
		.slicknav_btn:focus .slicknav_icon-bar:first-child:after,
		.slicknav_btn:hover .slicknav_icon-bar:first-child:before,
		.slicknav_btn:hover .slicknav_icon-bar:first-child:after,
		.woocommerce #respond input#submit:hover,
		.woocommerce #respond input#submit:focus,
		.woocommerce #respond input#submit:active,
		.body.woocommerce #respond input#submit:hover,
		body.woocommerce #respond input#submit:focus,
		body.woocommerce #respond input#submit:active,
		body.woocommerce a.button:hover,
		body.woocommerce a.button:focus,
		body.woocommerce a.button:active,
		body.woocommerce button.button:hover,
		body.woocommerce button.button:focus,
		body.woocommerce button.button:active,
		body.woocommerce input.button:hover,
		body.woocommerce input.button:focus,
		body.woocommerce input.button:active,
		body.woocommerce a.button.alt:hover,
		body.woocommerce a.button.alt:focus,
		body.woocommerce a.button.alt:active,
		body.woocommerce button.button.alt:hover,
		body.woocommerce button.button.alt:focus,
		body.woocommerce button.button.alt:active,
		body.woocommerce a.added_to_cart:hover,
		body.woocommerce a.added_to_cart:focus,
		body.woocommerce a.added_to_cart:active,
		body.woocommerce-page #respond input#submit:hover,
		body.woocommerce-page #respond input#submit:focus,
		body.woocommerce-page #respond input#submit:active,
		body.woocommerce-page a.button:hover,
		body.woocommerce-page a.button:focus,
		body.woocommerce-page a.button:active,
		body.woocommerce-page button.button:hover,
		body.woocommerce-page button.button:focus,
		body.woocommerce-page button.button:active,
		body.woocommerce-page input.button:hover,
		body.woocommerce-page input.button:focus,
		body.woocommerce-page input.button:active,
		body.woocommerce-page a.button.alt:hover,
		body.woocommerce-page a.button.alt:focus,
		body.woocommerce-page a.button.alt:active,
		body.woocommerce-page button.button.alt:hover,
		body.woocommerce-page button.button.alt:focus,
		body.woocommerce-page button.button.alt:active,
		body.woocommerce-page a.added_to_cart:hover,
		body.woocommerce-page a.added_to_cart:focus,
		body.woocommerce-page a.added_to_cart:active,
		.woocommerce a.button:hover,
		.woocommerce a.button:focus,
		.widget.widget_product_search [type=submit]:hover,
		.widget.widget_product_search [type=submit]:focus,
		.widget.widget_product_search [type=submit]:active,
		#offcanvas-menu .header-btn-wrap .header-btn .button-primary:hover,
		#offcanvas-menu .header-btn-wrap .header-btn .button-primary:focus,
		#offcanvas-menu .header-btn-wrap .header-btn .button-primary:active,
		#offcanvas-menu .header-btn-wrap .header-btn .button-outline:hover,
		#offcanvas-menu .header-btn-wrap .header-btn .button-outline:focus,
		#offcanvas-menu .header-btn-wrap .header-btn .button-outline:active {
			background-color: #086abd;
		}

		/* Hover Border */
		.button-outline:hover,
		.button-outline:focus,
		.button-outline:active,
		#offcanvas-menu .close-offcanvas-menu button:hover,
		#offcanvas-menu .close-offcanvas-menu button:active,
		.page-numbers:hover,
		.page-numbers:focus,
		.page-numbers:active,
		#back-to-top a:hover,
		#back-to-top a:focus,
		#back-to-top a:active,
		.post .entry-content .entry-header .cat-links a:hover,
		.post .entry-content .entry-header .cat-links a:focus,
		.post .entry-content .entry-header .cat-links a:active,
		.attachment .entry-content .entry-header .cat-links a:hover,
		.attachment .entry-content .entry-header .cat-links a:focus,
		.attachment .entry-content .entry-header .cat-links a:active,
		.banner-content .entry-content .entry-header .cat-links a:hover,
		.banner-content .entry-content .entry-header .cat-links a:focus,
		.banner-content .entry-content .entry-header .cat-links a:active,
		.slick-control li:not(.slick-disabled):hover span,
		.slick-control li:not(.slick-disabled):focus span,
		.slick-control li:not(.slick-disabled):active span,
		.section-banner .banner-content .button-container .button-outline:hover,
		.section-banner .banner-content .button-container .button-outline:focus,
		.section-banner .banner-content .button-container .button-outline:active,
		#back-to-top a:hover,
		#back-to-top a:focus,
		#back-to-top a:active,
		.widget .tagcloud a:hover,
		.widget .tagcloud a:focus,
		.widget .tagcloud a:active,
		.woocommerce nav.woocommerce-pagination ul li a:focus,
		.woocommerce nav.woocommerce-pagination ul li a:hover,
		.woocommerce nav.woocommerce-pagination ul li span.current,
		#offcanvas-menu .header-btn-wrap .header-btn .button-outline:hover,
		#offcanvas-menu .header-btn-wrap .header-btn .button-outline:focus,
		#offcanvas-menu .header-btn-wrap .header-btn .button-outline:active,
		.wrap-coming-maintenance-mode .content .social-profile ul a:hover,
		.wrap-coming-maintenance-mode .content .social-profile ul a:focus,
		.wrap-coming-maintenance-mode .content .social-profile ul a:active,
		body.woocommerce a.added_to_cart {
			border-color: #086abd;
		}

		/* Hover Text */
		a:hover,
		a:focus,
		a:active,
		.main-navigation ul.menu ul li a:hover,
		.main-navigation ul.menu ul li a:focus,
		.main-navigation ul.menu ul li a:active,
		.main-navigation ul.menu>li:hover>a,
		.main-navigation ul.menu>li:focus>a,
		.main-navigation ul.menu>li:active>a,
		.main-navigation ul.menu>li.focus>a,
		.main-navigation ul.menu li.current-menu-item>a,
		.main-navigation ul.menu li.current-menu-parent>a,
		.comment-navigation .nav-previous a:hover,
		.comment-navigation .nav-previous a:focus,
		.comment-navigation .nav-previous a:active,
		.comment-navigation .nav-next a:hover,
		.comment-navigation .nav-next a:focus,
		.comment-navigation .nav-next a:active,
		.posts-navigation .nav-previous a:hover,
		.posts-navigation .nav-previous a:focus,
		.posts-navigation .nav-previous a:active,
		.posts-navigation .nav-next a:hover,
		.posts-navigation .nav-next a:focus,
		.posts-navigation .nav-next a:active,
		.post-navigation .nav-previous a:hover,
		.post-navigation .nav-previous a:focus,
		.post-navigation .nav-previous a:active,
		.post-navigation .nav-next a:hover,
		.post-navigation .nav-next a:focus,
		.post-navigation .nav-next a:active,
		.social-profile ul li a:hover,
		.social-profile ul li a:focus,
		.social-profile ul li a:active,
		.post .entry-content .entry-header .cat-links a:hover,
		.post .entry-content .entry-header .cat-links a:focus,
		.post .entry-content .entry-header .cat-links a:active,
		.attachment .entry-content .entry-header .cat-links a:hover,
		.attachment .entry-content .entry-header .cat-links a:focus,
		.attachment .entry-content .entry-header .cat-links a:active,
		.banner-content .entry-content .entry-header .cat-links a:hover,
		.banner-content .entry-content .entry-header .cat-links a:focus,
		.banner-content .entry-content .entry-header .cat-links a:active,
		.post .entry-meta a:hover,
		.post .entry-meta a:focus,
		.post .entry-meta a:active,
		.attachment .entry-meta a:hover,
		.attachment .entry-meta a:focus,
		.attachment .entry-meta a:active,
		.banner-content .entry-meta a:hover,
		.banner-content .entry-meta a:focus,
		.banner-content .entry-meta a:active,
		.post .entry-meta a:hover:before,
		.post .entry-meta a:focus:before,
		.post .entry-meta a:active:before,
		.attachment .entry-meta a:hover:before,
		.attachment .entry-meta a:focus:before,
		.attachment .entry-meta a:active:before,
		.banner-content .entry-meta a:hover:before,
		.banner-content .entry-meta a:focus:before,
		.banner-content .entry-meta a:active:before,
		.breadcrumb-wrap .breadcrumbs .trail-items a:hover,
		.breadcrumb-wrap .breadcrumbs .trail-items a:focus,
		.breadcrumb-wrap .breadcrumbs .trail-items a:active,
		.site-header .site-branding .site-title a:hover,
		.site-header .site-branding .site-title a:focus,
		.site-header .site-branding .site-title a:active,
		.header-icons .search-icon:hover,
		.header-icons .search-icon:focus,
		.header-icons .search-icon:active,
		.header-search .search-form .search-button:hover,
		.header-search .close-button:hover,
		.header-contact ul a:hover,
		.header-contact ul a:focus,
		.header-contact ul a:active,
		.section-banner .banner-content .entry-meta a:hover,
		.section-banner .banner-content .entry-meta a:focus,
		.section-banner .banner-content .entry-meta a:active,
		.site-footer .site-info a:hover,
		.site-footer .site-info a:focus,
		.site-footer .site-info a:active,
		.site-footer .footer-menu ul li a:hover,
		.site-footer .footer-menu ul li a:focus,
		.site-footer .footer-menu ul li a:active,
		.comments-area .comment-list .comment-metadata a:hover,
		.comments-area .comment-list .comment-metadata a:focus,
		.comments-area .comment-list .comment-metadata a:active,
		.widget ul li a:hover,
		.widget ul li a:focus,
		.widget ul li a:active,
		body.woocommerce .product_meta .posted_in a:hover,
		body.woocommerce .product_meta .posted_in a:focus,
		body.woocommerce .product_meta .posted_in a:active,
		body.woocommerce .product_meta .tagged_as a:hover,
		body.woocommerce .product_meta .tagged_as a:focus,
		body.woocommerce .product_meta .tagged_as a:active,
		body.woocommerce-page .product_meta .posted_in a:hover,
		body.woocommerce-page .product_meta .posted_in a:focus,
		body.woocommerce-page .product_meta .posted_in a:active,
		body.woocommerce-page .product_meta .tagged_as a:hover,
		body.woocommerce-page .product_meta .tagged_as a:focus,
		body.woocommerce-page .product_meta .tagged_as a:active,
		.woocommerce .woocommerce-MyAccount-navigation ul li a:hover,
		.woocommerce .woocommerce-MyAccount-navigation ul li a:focus,
		.woocommerce .woocommerce-MyAccount-navigation ul li a:active,
		.woocommerce .woocommerce-MyAccount-content p a:hover,
		.woocommerce .woocommerce-MyAccount-content p a:focus,
		.woocommerce .woocommerce-MyAccount-content p a:active,
		.product .product-compare-wishlist .product-compare a:hover,
		.product .product-compare-wishlist .product-wishlist a:hover,
		.section-banner .banner-content .button-container .button-text:hover,
		.section-banner .banner-content .button-container .button-text:focus,
		.section-banner .banner-content .button-container .button-text:active,
		.social-profile ul li a:hover,
		.wrap-coming-maintenance-mode .content .header-contact ul a:hover,
		.wrap-coming-maintenance-mode .content .header-contact ul a:focus,
		.wrap-coming-maintenance-mode .content .header-contact ul a:active,
		#offcanvas-menu .header-navigation ul.menu>li a:hover,
		#offcanvas-menu .header-navigation ul.menu>li a:focus,
		#offcanvas-menu .header-navigation ul.menu>li a:active,
		#offcanvas-menu .social-profile ul li a:hover,
		#offcanvas-menu .social-profile ul li a:focus,
		#offcanvas-menu .social-profile ul li a:active,
		#offcanvas-menu .header-contact ul li a:hover,
		#offcanvas-menu .header-contact ul li a:focus,
		#offcanvas-menu .header-contact ul li a:active,
		#offcanvas-menu .header-btn-wrap .header-btn .button-text:hover,
		#offcanvas-menu .header-btn-wrap .header-btn .button-text:focus,
		#offcanvas-menu .header-btn-wrap .header-btn .button-text:active,
		.wrap-coming-maintenance-mode .content .social-profile ul a:hover,
		.wrap-coming-maintenance-mode .content .social-profile ul a:focus,
		.wrap-coming-maintenance-mode .content .social-profile ul a:active,
		body .woocommerce .woocommerce-MyAccount-navigation ul li.is-active a,
		body.woocommerce ul.products li.product .woocommerce-loop-product__title:hover,
		body.woocommerce ul.products li.product .woocommerce-loop-product__title:focus,
		body.woocommerce ul.products li.product .woocommerce-loop-product__title:active,
		body.woocommerce-page ul.products li.product .woocommerce-loop-product__title:hover,
		body.woocommerce-page ul.products li.product .woocommerce-loop-product__title:focus,
		body.woocommerce-page ul.products li.product .woocommerce-loop-product__title:active,
		.woocommerce ul.products li.product .price ins:hover,
		.woocommerce ul.products li.product .price ins:focus,
		.woocommerce ul.products li.product .price ins:active,
		.widget.widget_recently_viewed_products li .product-title:hover,
		.widget.widget_recently_viewed_products li .product-title:active,
		.widget.widget_recent_reviews li .product-title:hover,
		.widget.widget_recent_reviews li .product-title:active,
		.widget.widget_products .product_list_widget li .product-title:hover,
		.widget.widget_products .product_list_widget li .product-title:active {
			color: #086abd;
		}

		/* Main Slider */
		.main-slider .banner-img .overlay {
			background-color: rgba(0, 0, 0, 0.4);
		}

		/* Main Banner */
		.banner-img .overlay {
			background-color: rgba(0, 0, 0, 0.4);
		}

		/* Feature Posts*/
		.feature-posts-layout-one .feature-posts-content-wrap .feature-posts-image:before {
			background-color: rgba(0, 0, 0, 0.4);
		}

		.header-one .top-header,
		.header-two .top-header,
		.header-three .top-header {
			background-color: ;
		}

		.header-one .header-contact ul li,
		.header-one .header-contact ul li a,
		.header-one .social-profile ul li a,
		.header-one .header-icons .search-icon,
		.header-two .header-contact ul li,
		.header-two .header-contact ul li a,
		.header-two .social-profile ul li a,
		.header-two .header-icons .search-icon,
		.header-three .header-navigation ul.menu>li>a,
		.header-three .alt-menu-icon .iconbar-label,
		.header-three .social-profile ul li a {
			color: #333333;
		}

		@media only screen and (max-width: 991px) {
			.alt-menu-icon .iconbar-label {
				color: #333333;
			}

			header.site-header .alt-menu-icon .icon-bar,
			header.site-header .alt-menu-icon .icon-bar:before,
			header.site-header .alt-menu-icon .icon-bar:after {
				background-color: #333333;
			}

			.alt-menu-icon a:hover .iconbar-label,
			.alt-menu-icon a:focus .iconbar-label,
			.alt-menu-icon a:active .iconbar-label {
				color: #086abd;
			}

			header.site-header .alt-menu-icon a:hover .icon-bar,
			header.site-header .alt-menu-icon a:focus .icon-bar,
			header.site-header .alt-menu-icon a:active .icon-bar,
			header.site-header .alt-menu-icon a:hover .icon-bar:before,
			header.site-header .alt-menu-icon a:focus .icon-bar:before,
			header.site-header .alt-menu-icon a:active .icon-bar:before,
			header.site-header .alt-menu-icon a:hover .icon-bar:after,
			header.site-header .alt-menu-icon a:focus .icon-bar:after,
			header.site-header .alt-menu-icon a:active .icon-bar:after {
				background-color: #086abd;
			}
		}

		.header-one .alt-menu-icon .icon-bar,
		.header-one .alt-menu-icon .icon-bar:before,
		.header-one .alt-menu-icon .icon-bar:after,
		.header-two .alt-menu-icon .icon-bar,
		.header-two .alt-menu-icon .icon-bar:before,
		.header-two .alt-menu-icon .icon-bar:after {
			background-color: #333333;
		}

		.header-one .header-contact ul li a:hover,
		.header-one .header-contact ul li a:focus,
		.header-one .header-contact ul li a:active,
		.header-one .social-profile ul li a:hover,
		.header-one .social-profile ul li a:focus,
		.header-one .social-profile ul li a:active,
		.header-one .header-search-wrap .search-icon:hover,
		.header-one .header-search-wrap .search-icon:focus,
		.header-one .header-search-wrap .search-icon:active,
		.header-two .header-contact ul li a:hover,
		.header-two .header-contact ul li a:focus,
		.header-two .header-contact ul li a:active,
		.header-two .social-profile ul li a:hover,
		.header-two .social-profile ul li a:focus,
		.header-two .social-profile ul li a:active,
		.header-two .header-icons .search-icon:hover,
		.header-two .header-icons .search-icon:focus,
		.header-two .header-icons .search-icon:active,
		.header-three .header-navigation ul.menu>li>a:hover,
		.header-three .header-navigation ul.menu>li>a:focus,
		.header-three .header-navigation ul.menu>li>a:active,
		.header-three .social-profile ul li a:hover,
		.header-three .social-profile ul li a:focus,
		.header-three .social-profile ul li a:active {
			color: #086abd;
		}

		.header-one .alt-menu-icon a:hover .icon-bar,
		.header-one .alt-menu-icon a:focus .icon-bar,
		.header-one .alt-menu-icon a:active .icon-bar,
		.header-one .alt-menu-icon a:hover .icon-bar:before,
		.header-one .alt-menu-icon a:focus .icon-bar:before,
		.header-one .alt-menu-icon a:active .icon-bar:before,
		.header-one .alt-menu-icon a:hover .icon-bar:after,
		.header-one .alt-menu-icon a:focus .icon-bar:after,
		.header-one .alt-menu-icon a:active .icon-bar:after,
		.header-two .alt-menu-icon a:hover .icon-bar,
		.header-two .alt-menu-icon a:focus .icon-bar,
		.header-two .alt-menu-icon a:active .icon-bar,
		.header-two .alt-menu-icon a:hover .icon-bar:before,
		.header-two .alt-menu-icon a:focus .icon-bar:before,
		.header-two .alt-menu-icon a:active .icon-bar:before,
		.header-two .alt-menu-icon a:hover .icon-bar:after,
		.header-two .alt-menu-icon a:focus .icon-bar:after,
		.header-two .alt-menu-icon a:active .icon-bar:after,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:hover .icon-bar,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:focus .icon-bar,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:active .icon-bar,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:hover .icon-bar:before,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:focus .icon-bar:before,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:active .icon-bar:before,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:hover .icon-bar:after,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:focus .icon-bar:after,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:active .icon-bar:after {
			background-color: #086abd;
		}

		.mid-header .overlay {
			background-color: ;
		}

		.header-three .site-branding .site-title a:hover,
		.header-three .site-branding .site-title a:focus,
		.header-three .site-branding .site-title a:active {
			color: #086abd;
		}

		.header-one .bottom-header .overlay,
		.header-two .bottom-header .overlay,
		.header-three .bottom-header,
		.header-three .mobile-menu-container {
			background-color: ;
		}

		@media only screen and (max-width: 991px) {
			.header-one .mobile-menu-container {
				background-color: ;
			}
		}

		.header-one .main-navigation ul.menu>li>a,
		.header-two .main-navigation ul.menu>li>a,
		.header-three .main-navigation ul.menu>li>a,
		.header-three .header-icons .search-icon {
			color: #333333;
		}

		.site-header .slicknav_btn:not(.slicknav_open) .slicknav_icon span,
		.site-header .slicknav_btn:not(.slicknav_open) .slicknav_icon span:first-child:before,
		.site-header .slicknav_btn:not(.slicknav_open) .slicknav_icon span:first-child:after {
			background-color: #333333;
		}

		.header-one .site-branding .site-title a:hover,
		.header-one .site-branding .site-title a:focus,
		.header-one .site-branding .site-title a:active,
		.header-one .main-navigation ul.menu li a:hover,
		.header-one .main-navigation ul.menu li a:focus,
		.header-one .main-navigation ul.menu li a:active,
		.header-one .main-navigation ul.menu li.current-menu-item>a,
		.header-one .main-navigation ul.menu>li:hover>a,
		.header-one .main-navigation ul.menu>li:focus>a,
		.header-one .main-navigation ul.menu>li:active>a,
		.header-two .site-branding .site-title a:hover,
		.header-two .site-branding .site-title a:focus,
		.header-two .site-branding .site-title a:active,
		.header-two .header-search-wrap .search-icon:hover,
		.header-two .header-search-wrap .search-icon:focus,
		.header-two .header-search-wrap .search-icon:active,
		.header-two .main-navigation ul.menu li a:hover,
		.header-two .main-navigation ul.menu li a:focus,
		.header-two .main-navigation ul.menu>li>a:active,
		.header-two .main-navigation ul.menu li.current-menu-item>a,
		.header-two .main-navigation ul.menu>li:hover>a,
		.header-two .main-navigation ul.menu>li:focus>a,
		.header-two .main-navigation ul.menu>li:active>a,
		.header-two .header-icons .search-icon:hover,
		.header-two .header-icons .search-icon:focus,
		.header-two .header-icons .search-icon:active,
		.home .header-two:not(.sticky-header) .main-navigation ul.menu li a:hover,
		.home .header-two:not(.sticky-header) .main-navigation ul.menu li a:focus,
		.home .header-two:not(.sticky-header) .main-navigation ul.menu li a:active,
		.header-two .main-navigation ul.menu li.current-menu-item>a,
		.header-three .main-navigation ul.menu>li>a:hover,
		.header-three .main-navigation ul.menu>li>a:focus,
		.header-three .main-navigation ul.menu>li>a:active,
		.header-three .main-navigation ul.menu li.current-menu-item>a,
		.header-three .main-navigation ul.menu>li:hover>a,
		.header-three .main-navigation ul.menu>li:focus>a,
		.header-three .main-navigation ul.menu>li:active>a,
		.header-three .header-icons .search-icon:hover,
		.header-three .header-icons .search-icon:focus,
		.header-three .header-icons .search-icon:active {
			color: #086abd;
		}

		.header-three .alt-menu-icon .icon-bar,
		.header-three .alt-menu-icon .icon-bar:before,
		.header-three .alt-menu-icon .icon-bar:after {
			background-color: #333333;
		}

		.header-three .alt-menu-icon a:hover .icon-bar,
		.header-three .alt-menu-icon a:focus .icon-bar,
		.header-three .alt-menu-icon a:active .icon-bar,
		.header-three .alt-menu-icon a:hover .icon-bar:before,
		.header-three .alt-menu-icon a:focus .icon-bar:before,
		.header-three .alt-menu-icon a:active .icon-bar:before,
		.header-three .alt-menu-icon a:hover .icon-bar:after,
		.header-three .alt-menu-icon a:focus .icon-bar:after,
		.header-three .alt-menu-icon a:active .icon-bar:after {
			background-color: #086abd;
		}

		@media only screen and (max-width: 991px) {
			.mobile-menu-container .slicknav_menu .slicknav_menutxt {
				color: #333333;
			}

			.mobile-menu-container .slicknav_menu .slicknav_btn .slicknav_icon span,
			.mobile-menu-container .slicknav_menu .slicknav_btn .slicknav_icon span:first-child:before,
			.mobile-menu-container .slicknav_menu .slicknav_btn .slicknav_icon span:first-child:after {
				background-color: #333333;
			}

			.mobile-menu-container .slicknav_menu .slicknav_btn:hover .slicknav_menutxt,
			.mobile-menu-container .slicknav_menu .slicknav_btn:focus .slicknav_menutxt,
			.mobile-menu-container .slicknav_menu .slicknav_btn:active .slicknav_menutxt,
			.slicknav_menu .slicknav_nav li a:hover,
			.slicknav_menu .slicknav_nav li a:focus,
			.slicknav_menu .slicknav_nav li a:active {
				color: #086abd;
			}

			.mobile-menu-container .slicknav_menu .slicknav_btn:hover .slicknav_icon span,
			.mobile-menu-container .slicknav_menu .slicknav_btn:focus .slicknav_icon span,
			.mobile-menu-container .slicknav_menu .slicknav_btn:active .slicknav_icon span,
			.mobile-menu-container .slicknav_menu .slicknav_btn:hover .slicknav_icon span:first-child:before,
			.mobile-menu-container .slicknav_menu .slicknav_btn:focus .slicknav_icon span:first-child:before,
			.mobile-menu-container .slicknav_menu .slicknav_btn:active .slicknav_icon span:first-child:before,
			.mobile-menu-container .slicknav_menu .slicknav_btn:hover .slicknav_icon span:first-child:after,
			.mobile-menu-container .slicknav_menu .slicknav_btn:focus .slicknav_icon span:first-child:after,
			.mobile-menu-container .slicknav_menu .slicknav_btn:active .slicknav_icon span:first-child:after {
				background-color: #086abd;
			}
		}

		/* Transparent Top Header */
		.home .header-two.site-header .top-header {
			background-color: ;
		}

		/* Site Title */
		.home .site-header.header-two:not(.sticky-header) .site-branding .site-title {
			color: #ffffff;
		}

		/* Tagline */
		.home .site-header.header-two:not(.sticky-header) .site-branding .site-description {
			color: #e6e6e6;
		}

		/* Top Header Color */
		.home .header-two.site-header .header-contact ul a,
		.home .header-two.site-header .header-contact ul li,
		.home .header-two.site-header .social-profile ul li a,
		.home .header-two.site-header .header-search-wrap .search-icon {
			color: #ffffff;
		}

		.home .header-two.site-header .header-contact ul a:hover,
		.home .header-two.site-header .header-contact ul a:focus,
		.home .header-two.site-header .header-contact ul a:active,
		.home .header-two.site-header .social-profile ul li a:hover,
		.home .header-two.site-header .social-profile ul li a:focus,
		.home .header-two.site-header .social-profile ul li a:active,
		.home .header-two.site-header .header-search-wrap .search-icon:hover,
		.home .header-two.site-header .header-search-wrap .search-icon:focus,
		.home .header-two.site-header .header-search-wrap .search-icon:active {
			color: #086abd;
		}

		.home .header-two:not(.sticky-header) .alt-menu-icon .icon-bar,
		.home .header-two:not(.sticky-header) .alt-menu-icon .icon-bar:before,
		.home .header-two:not(.sticky-header) .alt-menu-icon .icon-bar:after {
			background-color: #ffffff;
		}

		.home .header-two:not(.sticky-header) .alt-menu-icon a:hover .icon-bar,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:focus .icon-bar,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:focus .icon-bar,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:hover .icon-bar:before,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:focus .icon-bar:before,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:active .icon-bar:before,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:hover .icon-bar:after,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:focus .icon-bar:after,
		.home .header-two:not(.sticky-header) .alt-menu-icon a:active .icon-bar:after {
			background-color: #086abd;
		}

		/* Transparent bottom Header */
		.home .header-two.site-header .bottom-header .overlay {
			background-color: ;
		}

		/* Header Menu */
		.home .header-two:not(.sticky-header) .main-navigation ul.menu>li>a {
			color: #ffffff;
		}

		@media only screen and (max-width: 991px) {
			.home .header-two .alt-menu-icon .iconbar-label {
				color: #ffffff;
			}

			.home .header-two .alt-menu-icon a:hover .iconbar-label,
			.home .header-two .alt-menu-icon a:focus .iconbar-label,
			.home .header-two .alt-menu-icon a:active .iconbar-label {
				color: #086abd;
			}

			.home .header-two:not(.sticky-header) .mobile-menu-container .slicknav_menu .slicknav_menutxt {
				color: #ffffff;
			}

			.home .header-two:not(.sticky-header) .mobile-menu-container .slicknav_menu .slicknav_btn .slicknav_icon span,
			.home .header-two:not(.sticky-header) .mobile-menu-container .slicknav_menu .slicknav_btn .slicknav_icon span:first-child:before,
			.home .header-two:not(.sticky-header) .mobile-menu-container .slicknav_menu .slicknav_btn .slicknav_icon span:first-child:after {
				background-color: #ffffff;
			}
		}

		/* Transparent Header bottom Hover Color*/
		.home .site-header.header-two:not(.sticky-header) .site-branding .site-title a:hover,
		.home .site-header.header-two:not(.sticky-header) .site-branding .site-title a:focus,
		.home .site-header.header-two:not(.sticky-header) .site-branding .site-title a:active,
		.home .header-two:not(.sticky-header) .main-navigation ul.menu li>a:hover,
		.home .header-two:not(.sticky-header) .main-navigation ul.menu li>a:focus,
		.home .header-two:not(.sticky-header) .main-navigation ul.menu li>a:active,
		.home .header-two:not(.sticky-header) .main-navigation ul.menu li:hover>a,
		.home .header-two:not(.sticky-header) .main-navigation ul.menu li:focus>a,
		.home .header-two:not(.sticky-header) .main-navigation ul.menu li:active>a,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:hover .slicknav_menutxt,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:focus .slicknav_menutxt,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:active .slicknav_menutxt {
			color: #086abd;
		}

		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:hover .slicknav_icon span,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:focus .slicknav_icon span,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:active .slicknav_icon span,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:hover .slicknav_icon span:first-child:before,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:focus .slicknav_icon span:first-child:before,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:active .slicknav_icon span:first-child:before,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:hover .slicknav_icon span:first-child:after,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:focus .slicknav_icon span:first-child:after,
		.home .header-two .mobile-menu-container .slicknav_menu .slicknav_btn:active .slicknav_icon span:first-child:after {
			background-color: #086abd;
		}

		#masthead .main-navigation ul.menu ul li a:hover,
		#masthead .main-navigation ul.menu ul li a:focus,
		#masthead .main-navigation ul.menu ul li a:active {
			color: #086abd;
		}

		.site-header .header-btn-1.button-outline {
			border-color: #1a1a1a;
			color: #1a1a1a;
		}

		.site-header .header-btn-1.button-outline:hover,
		.site-header .header-btn-1.button-outline:focus,
		.site-header .header-btn-1.button-outline:active {
			background-color: #086abd;
			border-color: #086abd;
			color: #ffffff;
		}

		.site-header .header-btn-1.button-outline {
			border-radius: 0px;
		}

		.site-header .site-branding img {
			display: none;
		}

		@media screen and (max-width: 991px) {
			.site-header.sticky-header .fixed-header {
				position: relative;
			}
		}

		.site-header.sticky-header .site-branding>a {
			max-width: 270px;
		}

		@media only screen and (min-width: 992px) {
			.site-header:not(.sticky-header) .header-image-wrap {
				height: 80px;
				width: 100%;
				position: relative;
			}
		}

		.header-slide-item {
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		@media only screen and (min-width: 768px) {
			.banner-img {
				height: 550px;
				overflow: hidden;
			}
		}

		.main-slider .banner-img .overlay {
			background-color: ;
		}

		.section-banner .banner-content .entry-title {
			color: #ffffff;
		}

		.banner-content .entry-content .entry-header .cat-links a {
			color: #ebebeb;
			border-color: #ebebeb;
		}

		.section-banner .banner-content .entry-meta a {
			color: #ebebeb;
		}

		.section-banner .banner-content .entry-meta a:before {
			color: #FFFFFF;
		}

		.section-banner .entry-text {
			color: #ffffff;
		}

		.banner-content .entry-content .entry-header .cat-links a:hover,
		.banner-content .entry-content .entry-header .cat-links a:focus,
		.banner-content .entry-content .entry-header .cat-links a:active,
		.banner-content .entry-title a:hover,
		.banner-content .entry-title a:focus,
		.banner-content .entry-title a:active,
		.section-banner .banner-content .entry-meta a:hover,
		.section-banner .banner-content .entry-meta a:focus,
		.section-banner .banner-content .entry-meta a:active,
		.section-banner .banner-content .entry-meta a:hover:before,
		.section-banner .banner-content .entry-meta a:focus:before,
		.section-banner .banner-content .entry-meta a:active:before {
			color: #a8d8ff;
		}

		.banner-content .entry-content .entry-header .cat-links a:hover,
		.banner-content .entry-content .entry-header .cat-links a:focus,
		.banner-content .entry-content .entry-header .cat-links a:active {
			border-color: #a8d8ff;
		}

		.section-banner .slide-inner .banner-content .button-container .button-outline {
			border-color: #ffffff;
			color: #ffffff;
		}

		.section-banner .slide-inner .banner-content .button-container .button-outline:hover,
		.section-banner .slide-inner .banner-content .button-container .button-outline:focus,
		.section-banner .slide-inner .banner-content .button-container .button-outline:active {
			background-color: #086abd;
			border-color: #086abd;
			color: #FFFFFF;
		}

		.section-banner .slide-inner .banner-content .button-container a {
			border-radius: 0px;
		}

		.main-slider .banner-img {
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.site-footer.has-footer-bg .site-footer-inner {
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.footer-widget-wrap {
			padding-top: 0px;
			padding-bottom: 50px;
		}

		.top-footer {
			background-color: ;
		}

		.site-footer h1,
		.site-footer h2,
		.site-footer h3,
		.site-footer h4,
		.site-footer h5,
		.site-footer h6 {
			color: #030303;
		}

		.site-footer .widget .widget-title:before {
			background-color: #030303;
		}

		.site-footer a,
		.site-footer .widget ul li a,
		.site-footer .widget .tagcloud a,
		.site-footer .post .entry-meta a,
		.site-footer .post .entry-meta a:before {
			color: #656565;
		}

		.widget ul li,
		.latest-posts-widget .post {
			border-bottom-color: rgba(101, 101, 101, 0.2);
		}

		.site-footer .widget .tagcloud a {
			border-color: #656565;
		}

		.site-footer,
		.site-footer table th,
		.site-footer table td,
		.site-footer .widget.widget_calendar table {
			color: #656565;
		}

		.site-footer a:hover,
		.site-footer a:focus,
		.site-footer a:active,
		.site-footer .widget ul li a:hover,
		.site-footer .widget ul li a:focus,
		.site-footer .widget ul li a:active,
		.site-footer .post .entry-meta a:hover,
		.site-footer .post .entry-meta a:focus,
		.site-footer .post .entry-meta a:active,
		.site-footer .post .entry-meta a:hover:before,
		.site-footer .post .entry-meta a:focus:before,
		.site-footer .post .entry-meta a:active:before {
			color: #086abd;
		}

		.site-footer .widget .tagcloud a:hover,
		.site-footer .widget .tagcloud a:focus,
		.site-footer .widget .tagcloud a:active {
			background-color: #086abd;
			border-color: #086abd;
			color: #FFFFFF;
		}

		.bottom-footer {
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.bottom-footer {
			background-color: ;
		}

		.bottom-footer {
			color: #656565;
		}

		.site-footer .social-profile ul li a {
			background-color: rgba(56, 56, 56, 0.1);
		}

		.site-info a,
		.site-footer .social-profile ul li a,
		.footer-menu ul li a {
			color: #383838;
		}

		.site-footer .site-info a:hover,
		.site-footer .site-info a:focus,
		.site-footer .site-info a:active,
		.site-footer .footer-menu ul li a:hover,
		.site-footer .footer-menu ul li a:focus,
		.site-footer .footer-menu ul li a:active {
			color: #086abd;
		}

		.site-footer .social-profile ul li a:hover,
		.site-footer .social-profile ul li a:focus,
		.site-footer .social-profile ul li a:active {
			background-color: #086abd;
		}

		.site-footer .social-profile ul li a {
			font-size: 15px;
		}

		.feature-posts-content-wrap .feature-posts-image {
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.feature-posts-layout-one .feature-posts-content-wrap .feature-posts-image {
			border-radius: 0px;
		}

		.feature-posts-layout-one .feature-posts-image {
			-webkit-align-items: flex-end;
			-moz-align-items: flex-end;
			-ms-align-items: flex-end;
			-ms-flex-align: flex-end;
			align-items: flex-end;
		}

		.feature-posts-layout-one .feature-posts-content {
			margin-bottom: 20px;
		}

		.preloader-content {
			max-width: 40px;
			overflow: hidden;
			display: inline-block;
		}

		#primary article .entry-title {
			color: #101010;
		}

		#primary article .entry-title a:hover,
		#primary article .entry-title a:focus,
		#primary article .entry-title a:active {
			color: #086abd;
		}

		#primary article .entry-content .entry-header .cat-links a,
		#primary article .attachment .entry-content .entry-header .cat-links a {
			color: #EB5A3E;
		}

		#primary article .entry-content .entry-header .cat-links a {
			border-color: #EB5A3E;
		}

		#primary article .entry-content .entry-header .cat-links a:hover,
		#primary article .entry-content .entry-header .cat-links a:focus,
		#primary article .entry-content .entry-header .cat-links a:active {
			color: #086abd;
			border-color: #086abd;
		}

		#primary article .entry-meta a {
			color: #7a7a7a;
		}

		#primary article .entry-meta a:before {
			color: #EB5A3E;
		}

		#primary article .entry-meta a:hover,
		#primary article .entry-meta a:focus,
		#primary article .entry-meta a:active,
		#primary article .entry-meta a:hover:before,
		#primary article .entry-meta a:focus:before,
		#primary article .entry-meta a:active:before {
			color: #086abd;
		}

		#primary article .entry-text {
			color: #333333;
		}

		#primary article .featured-image a {
			border-radius: 0px;
		}

		#primary article.sticky .featured-image a {
			border-radius: 0px;
		}

		article.sticky {
			border-radius: 0px;
		}

		.feature-posts-content .feature-posts-title {
			color: #FFFFFF;
		}

		.feature-posts-layout-one .feature-posts-content .feature-posts-title a:after {
			background-color: #FFFFFF;
		}

		.feature-posts-content .feature-posts-title a:hover,
		.feature-posts-content .feature-posts-title a:focus,
		.feature-posts-content .feature-posts-title a:active {
			color: #a8d8ff;
		}

		.feature-posts-layout-one .feature-posts-content .feature-posts-title a:hover:after,
		.feature-posts-layout-one .feature-posts-content .feature-posts-title a:focus:after,
		.feature-posts-layout-one .feature-posts-content .feature-posts-title a:active:after {
			background-color: #a8d8ff;
		}

		.feature-posts-content .cat-links a {
			color: #FFFFFF;
		}

		.feature-posts-layout-one .feature-posts-content .cat-links a {
			background-color: #EB5A3E;
		}

		.feature-posts-layout-one .feature-posts-content .cat-links a:hover,
		.feature-posts-layout-one .feature-posts-content .cat-links a:focus,
		.feature-posts-layout-one .feature-posts-content .cat-links a:active {
			background-color: #a8d8ff;
			color: #FFFFFF;
		}

		.post .feature-posts-content .entry-meta a {
			color: #FFFFFF;
		}

		.post .feature-posts-content .entry-meta a:before {
			color: #FFFFFF;
		}

		.post .feature-posts-content .entry-meta a:hover,
		.post .feature-posts-content .entry-meta a:focus,
		.post .feature-posts-content .entry-meta a:active,
		.post .feature-posts-content .entry-meta a:hover:before,
		.post .feature-posts-content .entry-meta a:focus:before,
		.post .feature-posts-content .entry-meta a:active:before {
			color: #a8d8ff;
		}

		.feature-posts-layout-one .feature-posts-image,
		.feature-posts-content-wrap .feature-posts-image {
			height: 250px;
			overflow: hidden;
		}

		.highlight-post-slider .post .entry-content .entry-title {
			color: #030303;
		}

		.highlight-post-slider .entry-content .entry-title a:hover,
		.highlight-post-slider .entry-content .entry-title a:focus,
		.highlight-post-slider .entry-content .entry-title a:active {
			color: #086abd;
		}

		.highlight-post-slider .post .cat-links a {
			background-color: #1f1f1f;
		}

		.highlight-post-slider .post .cat-links a {
			color: #FFFFFF;
		}

		.highlight-post-slider .post .cat-links a:hover,
		.highlight-post-slider .post .cat-links a:focus,
		.highlight-post-slider .post .cat-links a:active {
			background-color: #086abd;
			color: #FFFFFF;
		}

		.highlight-post-slider .post .entry-meta a {
			color: #7a7a7a;
		}

		.highlight-post-slider .post .entry-meta a:before {
			color: #EB5A3E;
		}

		.highlight-post-slider .post .entry-meta a:hover,
		.highlight-post-slider .post .entry-meta a:focus,
		.highlight-post-slider .post .entry-meta a:active,
		.highlight-post-slider .post .entry-meta a:hover:before,
		.highlight-post-slider .post .entry-meta a:focus:before,
		.highlight-post-slider .post .entry-meta a:active:before {
			color: #086abd;
		}

		.section-highlight-post .featured-image a {
			border-radius: 0px;
			overflow: hidden;
		}

		.bottom-footer-image-wrap>a {
			max-width: 270px;
			overflow: hidden;
			display: inline-block;
		}

		@media screen and (max-width: 767px) {
			#back-to-top {
				display: none !important;
			}
		}
	</style>
	<style>
		body,
		body.custom-background,
		.site-content {
			background-color: #000000;
			color: #c7c7c7;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.entry-title,
		#primary article .entry-title,
		body.single .page-title,
		body.page .page-title,
		.highlight-post-slider .post .entry-content .entry-title {
			color: #ffffff;
		}

		table th,
		table td {
			border-color: #262626;
		}

		input[type=text],
		input[type=email],
		input[type=url],
		input[type=password],
		input[type=search],
		input[type=number],
		input[type=tel],
		input[type=range],
		input[type=date],
		input[type=month],
		input[type=week],
		input[type=time],
		input[type=datetime],
		input[type=datetime-local],
		input[type=color],
		textarea,
		.select2-container--default .select2-selection--single {
			background-color: #000000;
			border-color: #262626;
			color: #ffffff;
		}

		input[type=text]:focus,
		input[type=text]:active,
		input[type=email]:focus,
		input[type=email]:active,
		input[type=url]:focus,
		input[type=url]:active,
		input[type=password]:focus,
		input[type=password]:active,
		input[type=search]:focus,
		input[type=search]:active,
		input[type=number]:focus,
		input[type=number]:active,
		input[type=tel]:focus,
		input[type=tel]:active,
		input[type=range]:focus,
		input[type=range]:active,
		input[type=date]:focus,
		input[type=date]:active,
		input[type=month]:focus,
		input[type=month]:active,
		input[type=week]:focus,
		input[type=week]:active,
		input[type=time]:focus,
		input[type=time]:active,
		input[type=datetime]:focus,
		input[type=datetime]:active,
		input[type=datetime-local]:focus,
		input[type=datetime-local]:active,
		input[type=color]:focus,
		input[type=color]:active,
		textarea:focus,
		textarea:active {
			border-color: #ffffff;
		}

		.button-outline {
			border-color: #e6e6e6;
			color: #e6e6e6;
		}

		.button-outline:hover,
		.button-outline:active,
		.button-outline:focus {
			border-color: #086abd;
			color: #ffffff;
		}

		.button-text,
		#primary .post .button-text {
			color: #e6e6e6;
		}

		.button-text:hover,
		.button-text:focus,
		.button-text:active {
			color: #086abd;
		}

		blockquote {
			background-color: #1a1a1a;
			color: #c7c7c7;
		}

		.wp-block-quote cite {
			color: #c7c7c7;
		}

		blockquote:before {
			background-color: #1a1a1a;
			border-bottom-color: #cccccc;
			border-top-color: #cccccc;
		}

		blockquote:after {
			background-color: #000000;
			color: #cccccc;
		}

		.header-four .header-group {
			background-color: #000000;
		}

		.header-one .header-contact ul li,
		.header-one .header-contact ul li a,
		.header-one .social-profile ul li a,
		.header-one .header-icons .search-icon,
		.header-two .header-contact ul li,
		.header-two .header-contact ul li a,
		.header-two .social-profile ul li a,
		.header-two .header-icons .search-icon,
		.header-three .header-navigation ul.menu>li>a,
		.header-three .alt-menu-icon .iconbar-label,
		.header-three .social-profile ul li a {
			color: #D5D5D5;
		}

		.header-one .alt-menu-icon .icon-bar,
		.header-one .alt-menu-icon .icon-bar:before,
		.header-one .alt-menu-icon .icon-bar:after {
			background-color: #D5D5D5;
		}

		.site-header .site-branding .site-title,
		.site-header .site-branding .site-description {
			color: #FFFFFF;
		}

		.site-header.sticky-header .fixed-header {
			background-color: #000000;
		}

		body:not(.home) .site-header .bottom-header {
			border-color: #000000;
		}

		.post:not(.list-post) .entry-content {
			border-color: #1a1a1a;
		}

		body:not(.custom-background),
		body.custom-background .site-content .container {
			background-color: #000000;
		}

		.main-navigation ul.menu>li>a:hover,
		.main-navigation ul.menu>li>a:focus,
		.main-navigation ul.menu>li>a:active {
			color: #086abd;
		}

		.main-navigation ul.menu ul {
			background-color: #050505;
		}

		.main-navigation ul.menu ul li {
			border-color: #1a1a1a;
		}

		.main-navigation ul.menu ul li a {
			color: #848484;
		}

		.main-navigation ul.menu ul li a:hover,
		.main-navigation ul.menu ul li a:focus,
		.main-navigation ul.menu ul li a:active {
			color: #086abd;
		}

		.site-header .bottom-header,
		.site-header .top-header,
		.site-header .mid-header,
		.site-footer {
			background-color: #000000;
		}

		.site-header.header-two .top-header {
			background-color: transparent;
		}

		.site-header .top-header,
		.header-three .mid-header,
		.mid-header {
			border-bottom-color: #292929;
		}

		.header-search {
			background-color: #000000;
		}

		.header-search .search-form .search-button,
		.header-search .close-button {
			color: #969696;
		}

		.header-sidebar .widget,
		#offcanvas-menu .header-contact,
		#offcanvas-menu .social-profile,
		#offcanvas-menu .header-btn-wrap,
		#offcanvas-menu .header-search-wrap,
		#offcanvas-menu .header-navigation,
		#offcanvas-menu .header-date,
		offcanvas-menu .header-advertisement-banner {
			background-color: #131313;
		}

		#offcanvas-menu .header-contact ul li,
		#offcanvas-menu .header-contact ul li a,
		#offcanvas-menu .header-contact ul li span,
		#offcanvas-menu .header-contact ul li i,
		#offcanvas-menu .social-profile ul li a {
			color: #FFFFFF;
		}

		.home .site-content {
			border-top: 1px solid #292929;
		}

		.site-content {
			border-top-color: #292929;
		}

		.site-header .site-branding .site-title {
			color: #ffffff;
		}

		.site-header .main-navigation ul.menu>li>a,
		.social-profile ul li a,
		.site-header .header-icons .search-icon {
			color: #D5D5D5;
		}

		.header-two .alt-menu-icon .icon-bar,
		.header-two .alt-menu-icon .icon-bar:before,
		.header-two .alt-menu-icon .icon-bar:after {
			background-color: #D5D5D5;
		}

		@media screen and (max-width: 991px) {
			.header-search-wrap .search-button {
				color: #ffffff;
			}
		}

		.section-banner .slick-slide {
			background-color: #060606;
		}

		.section-banner .post {
			background-color: #000000;
		}

		.post .entry-text,
		#primary .post .entry-text {
			color: #c7c7c7;
		}

		.section-banner .slick-control ul li {
			background-color: #000000;
		}

		.highlight-post-slider .post,
		.wrap-ralated-posts .post .entry-content {
			background-color: #000000;
		}

		.site-content .list-post,
		.site-content .single-post {
			border-bottom-color: #1a1a1a;
		}

		.page-numbers {
			border-color: #1a1a1a;
		}

		.sticky {
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			-ms-box-shadow: none;
			-o-box-shadow: none;
			box-shadow: none;
			border: 2px solid #1a1a1a;
		}

		.site-footer h1,
		.site-footer h2,
		.site-footer h3,
		.site-footer h4,
		.site-footer h5,
		.site-footer h6 {
			color: #ffffff;
		}

		.site-footer .widget .widget-title:before {
			background-color: #ffffff;
		}

		.site-footer .site-info a {
			color: #ffffff;
		}

		.site-footer .site-info a:hover,
		.site-footer .site-info a:focus,
		.site-footer .site-info a:active {
			color: #086abd;
		}

		.site-footer .footer-menu ul li {
			border-color: #2A2A2A;
		}

		.site-footer .widget .widget-title:before {
			background-color: #ffffff;
		}

		.breadcrumb-wrap .breadcrumbs {
			background-color: #080808;
		}

		.comments-area .comment-list .comment-body {
			background-color: #000000;
			border-color: #1a1a1a;
		}

		.comments-area .comment-list .comment-author .avatar {
			background-color: #1a1a1a;
			border-color: #000000;
		}

		.comments-area .comment-respond .comment-form .comment-notes {
			color: #cccccc;
		}

		.comments-area .comment-respond .comment-form .comment-notes span {
			color: #ffffff;
		}

		.author-info .author-content-wrap {
			background-color: #060606;
		}

		.post-navigation {
			border-bottom-color: #1a1a1a;
			border-top-color: #1a1a1a;
		}

		.comment-navigation .nav-previous a,
		.comment-navigation .nav-next a,
		.post-navigation .nav-previous a,
		.post-navigation .nav-next a {
			color: #cccccc;
		}

		.comment-navigation .nav-previous a:hover,
		.comment-navigation .nav-previous a:focus,
		.comment-navigation .nav-previous a:active,
		.comment-navigation .nav-next a:hover,
		.comment-navigation .nav-next a:focus,
		.comment-navigation .nav-next a:active,
		.post-navigation .nav-previous a:hover,
		.post-navigation .nav-previous a:focus,
		.post-navigation .nav-previous a:active,
		.post-navigation .nav-next a:hover,
		.post-navigation .nav-next a:focus,
		.post-navigation .nav-next a:active {
			color: #086abd;
		}

		.comments-area .comment-respond label {
			color: #e6e6e6;
		}

		body.woocommerce .woocommerce-result-count,
		body.woocommerce .woocommerce-ordering select,
		body.woocommerce select {
			background-color: #0d0d0d;
			border-color: #0d0d0d;
			color: #cccccc;
		}

		body.woocommerce ul.products li.product .price,
		body.woocommerce-page ul.products li.product .price {
			color: #ffffff;
		}

		body.woocommerce ul .product-inner,
		body.woocommerce-page ul .product-inner {
			border-color: #1a1a1a;
		}

		body.woocommerce div.product .woocommerce-tabs ul.tabs:before {
			border-color: #333333;
		}

		body.woocommerce div.product .woocommerce-tabs ul.tabs li {
			background-color: #333333;
			border-color: #333333;
		}

		body.woocommerce div.product .woocommerce-tabs ul.tabs li:before {
			box-shadow: 2px 2px 0 #333333;
			border-color: #333333;
		}

		body.woocommerce div.product .woocommerce-tabs ul.tabs li:after {
			box-shadow: -2px 2px 0 #333333;
			border-color: #333333;
		}

		body.woocommerce div.product .woocommerce-tabs ul.tabs li.active {
			background-color: #000000;
			border-bottom-color: #000000;
		}

		body.woocommerce div.product .woocommerce-tabs ul.tabs li.active:before {
			box-shadow: 2px 2px 0 #000000;
		}

		body.woocommerce div.product .woocommerce-tabs ul.tabs li.active:after {
			box-shadow: -2px 2px 0 #000000;
		}

		body.woocommerce div.product .woocommerce-tabs ul.tabs li a {
			color: #d6d6d6;
		}

		.woocommerce ul.products.columns-3 li.product,
		.woocommerce-page ul.products.columns-3 li.product {
			border-right-color: #454545;
		}

		.product .product-compare-wishlist {
			border-top-color: #454545;
		}

		.woocommerce .woocommerce-tabs .woocommerce-Tabs-panel {
			border-left-color: #333333;
			border-right-color: #333333;
			border-bottom-color: #333333;
		}

		.product-inner~a.yith-wcqv-button {
			border-color: #454545;
			color: #454545;
		}

		.widget ul li {
			border-bottom-color: #1a1a1a;
		}

		.widget ul li a {
			color: #FFFFFF;
		}

		.widget .tagcloud a {
			color: #e6e6e6;
		}

		.widget .tagcloud a:hover,
		.widget .tagcloud a:focus,
		.widget .tagcloud a:active {
			color: #ffffff;
		}

		.latest-posts-widget .post {
			border-bottom-color: #1a1a1a;
		}

		.widget_calendar table {
			border-color: #1a1a1a;
		}

		.widget.widget_calendar table thead th {
			border-right-color: #1a1a1a;
		}

		.widget_calendar table th,
		.widget_calendar table td {
			border-bottom-color: #1a1a1a;
		}

		body.search-results .hentry,
		body.search-results .product {
			border-color: #1a1a1a;
		}

		.slicknav_btn .slicknav_icon span,
		.slicknav_btn .slicknav_icon span:before,
		.slicknav_btn .slicknav_icon span:after {
			background-color: #ffffff;
		}

		.slicknav_btn.slicknav_open span {
			background-color: transparent;
		}

		.section-banner .main-slider-three .post {
			background-color: transparent;
		}

		.slicknav_menu .slicknav_nav {
			background-color: #000000;
		}

		.slicknav_menu ul.slicknav_nav {
			background-color: #000000;
		}

		.slicknav_menu ul.slicknav_nav li>a {
			border-top-color: #1a1a1a;
			color: #cccccc;
		}

		.mobile-menu-container .slicknav_menu .slicknav_nav li {
			border-top-color: #1a1a1a;
		}

		#offcanvas-menu {
			background-color: #060606;
		}

		.woocommerce-Reviews {
			color: #404040;
		}

		body.site-layout-box,
		body.site-layout-frame {
			background-color: #0a0a0a;
		}

		body.site-layout-box .site,
		body.site-layout-frame .site {
			background-color: #000000;
		}

		.breadcrumb-wrap {
			background-color: transparent;
		}

		.site-header [class*="header-btn-"].button-outline {
			border-color: #969696;
			color: #969696;
		}

		.bottom-footer,
		.site-footer .social-profile ul li a,
		.footer-menu ul li a {
			color: #cccccc;
		}

		.site-footer .social-profile ul li a {
			background-color: rgba(255, 255, 255, 0.1);
		}

		.woocommerce div.product p.price {
			color: #FFFFFF;
		}

		.woocommerce .product_meta,
		#add_payment_method .cart-collaterals .cart_totals tr td,
		#add_payment_method .cart-collaterals .cart_totals tr th,
		.woocommerce-cart .cart-collaterals .cart_totals tr td,
		.woocommerce-cart .cart-collaterals .cart_totals tr th,
		.woocommerce-checkout .cart-collaterals .cart_totals tr td,
		.woocommerce-checkout .cart-collaterals .cart_totals tr th {
			border-top-color: #333333;
		}

		body.woocommerce ul.products.columns-3 li.product,
		body.woocommerce-page ul.products.columns-3 li.product,
		.woocommerce .woocommerce-MyAccount-navigation ul li,
		#add_payment_method table.cart td.actions .coupon .input-text,
		.woocommerce-cart table.cart td.actions .coupon .input-text,
		.woocommerce-checkout table.cart td.actions .coupon .input-text {
			border-color: #333333;
		}

		.woocommerce-error,
		.woocommerce-info,
		.woocommerce-message,
		#add_payment_method #payment,
		.woocommerce-cart #payment,
		.woocommerce-checkout #payment,
		.select2-dropdown {
			background-color: #1a1a1a;
			color: #cccccc;
		}

		.comment-respond .comment-form .comment-notes span,
		.woocommerce-Reviews,
		.woocommerce-tabs .comment-respond label,
		.comment-respond .comment-form .comment-notes {
			color: #cccccc;
		}

		.select2-container--default .select2-selection--single .select2-selection__rendered {
			color: #ffffff;
		}

		body .woocommerce .woocommerce-MyAccount-navigation ul li a {
			color: #cccccc;
		}

		body.woocommerce a.added_to_cart,
		body.woocommerce-page a.added_to_cart {
			color: #cccccc;
			border-color: #333333;
		}

		#add_payment_method #payment ul.payment_methods,
		.woocommerce-cart #payment ul.payment_methods,
		.woocommerce-checkout #payment ul.payment_methods,
		.woocommerce form.checkout_coupon,
		.woocommerce form.login,
		.woocommerce form.register {
			border-color: #333333;
		}

		body .select2-container--default .select2-results__option[aria-selected=true],
		body .select2-container--default .select2-results__option[data-selected=true] {
			background-color: inherit;
		}

		.widget.widget_recently_viewed_products li .product-title,
		.widget.widget_recent_reviews li .product-title,
		.widget.widget_products .product_list_widget li .product-title {
			color: #ffffff;
		}

		@media only screen and (max-width: 991px) {

			.mobile-menu-container .slicknav_menu .slicknav_menutxt,
			.alt-menu-icon .iconbar-label {
				color: #D5D5D5;
			}

			header.site-header .alt-menu-icon .icon-bar,
			header.site-header .alt-menu-icon .icon-bar:before,
			header.site-header .alt-menu-icon .icon-bar:after,
			.mobile-menu-container .slicknav_menu .slicknav_btn .slicknav_icon span,
			.mobile-menu-container .slicknav_menu .slicknav_btn .slicknav_icon span:first-child:before,
			.mobile-menu-container .slicknav_menu .slicknav_btn .slicknav_icon span:first-child:after {
				background-color: #D5D5D5;
			}
		}

		@media only screen and (max-width: 575px) {
			.comments-area .comment-list .comment-metadata {
				border-top-color: #1a1a1a;
			}
		}
	</style>
	<style id="kirki-inline-styles">
		.site-header .header-btn a {
			font-family: Rubik;
			font-size: 14px;
			font-weight: 600;
			line-height: 1;
			text-transform: uppercase;
		}

		.site-header .site-branding .site-title {
			font-family: Oswald;
			font-size: 22px;
			font-weight: 600;
			text-transform: none;
		}

		.site-header .site-branding .site-description {
			font-family: Rubik;
			font-size: 14px;
			font-weight: normal;
			text-transform: none;
		}

		.main-navigation ul.menu li a,
		.slicknav_menu .slicknav_nav li a {
			font-family: Oswald;
			font-size: 16px;
			font-weight: 600;
			line-height: 1.5;
		}

		.main-navigation .menu-description,
		.slicknav_menu .menu-description {
			font-family: Rubik;
			font-size: 11px;
			font-weight: normal;
			line-height: 1.3;
			text-transform: none;
		}

		body {
			font-family: Rubik;
			font-size: 15px;
			font-weight: normal;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: Oswald;
			font-weight: 600;
		}

		.page-title {
			font-family: Oswald;
			font-size: 40px;
			font-weight: 700;
		}

		.sidebar .widget .widget-title {
			font-family: Oswald;
			font-size: 15px;
			font-weight: 600;
			line-height: 1.4;
			text-transform: uppercase;
		}

		.site-footer .widget .widget-title {
			font-family: Oswald;
			font-size: 16px;
			font-weight: 600;
			line-height: 1.4;
			text-transform: uppercase;
		}

		.site-footer .footer-menu ul li a,
		.site-footer .site-info {
			font-family: Oswald;
			font-size: 14px;
			font-weight: 700;
			line-height: 1.6;
			text-transform: uppercase;
		}

		.section-banner .banner-content .entry-title {
			font-family: Oswald;
			font-size: 50px;
			font-weight: 700;
			line-height: 1.4;
			text-transform: uppercase;
		}

		.section-banner .banner-content .entry-header .cat-links a {
			font-family: Rubik;
			font-size: 15px;
			font-weight: 400;
			line-height: 1.6;
			text-transform: uppercase;
		}

		.section-banner .banner-content .entry-meta a {
			font-family: Rubik;
			font-size: 13px;
			font-weight: 400;
			line-height: 1.6;
			text-transform: capitalize;
		}

		.section-banner .banner-content .entry-text p {
			font-family: Rubik;
			font-size: 16px;
			font-weight: 400;
			line-height: 1.8;
			text-transform: initial;
		}

		.section-banner .slide-inner .banner-content .button-container a {
			font-family: Rubik;
			font-size: 15px;
			font-weight: 600;
			line-height: 1;
			text-transform: capitalize;
		}

		.feature-posts-content-wrap .feature-posts-content .feature-posts-title {
			font-family: Oswald;
			font-size: 20px;
			font-weight: 700;
			line-height: 1.4;
			text-transform: uppercase;
		}

		.post .feature-posts-content .cat-links a {
			font-family: Rubik;
			font-size: 12px;
			font-weight: 400;
			line-height: 1;
			text-transform: capitalize;
		}

		.post .feature-posts-content .entry-meta a {
			font-family: Poppins;
			font-size: 13px;
			font-weight: 400;
			line-height: 1.6;
			text-transform: capitalize;
		}

		.highlight-post-slider .post .cat-links a {
			font-family: Rubik;
			font-size: 10px;
			font-weight: 600;
			line-height: 1;
			text-transform: uppercase;
		}

		.highlight-post-slider .post .entry-content .entry-title {
			font-family: Oswald;
			font-size: 18px;
			font-weight: 600;
			line-height: 1.4;
			text-transform: uppercase;
		}

		.highlight-post-slider .post .entry-meta a {
			font-family: Rubik;
			font-size: 13px;
			font-weight: 500;
			line-height: 1.6;
			text-transform: capitalize;
		}

		#primary article .entry-title {
			font-family: Oswald;
			font-size: 22px;
			font-weight: 600;
			line-height: 1.4;
			text-transform: uppercase;
		}

		#primary .post .entry-content .entry-header .cat-links a {
			font-family: Rubik;
			font-size: 13px;
			font-weight: 500;
			line-height: 1.6;
			text-transform: uppercase;
		}

		#primary .entry-meta {
			font-family: Rubik;
			font-size: 13px;
			font-weight: 400;
			line-height: 1.6;
			text-transform: capitalize;
		}

		#primary .entry-text p {
			font-family: Rubik;
			font-size: 15px;
			font-weight: 400;
			line-height: 1.8;
			text-transform: initial;
		}

		.section-post-area .section-title {
			font-family: Oswald;
			font-size: 24px;
			font-weight: 600;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'Rubik';
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url(./../wp-content/fonts/rubik/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYiFWkUzdYPFkaVNA6w.woff) format('woff');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'Rubik';
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url(./../wp-content/fonts/rubik/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYiFU0UzdYPFkaVNA6w.woff) format('woff');
			unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* hebrew */
		@font-face {
			font-family: 'Rubik';
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url(./../wp-content/fonts/rubik/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYiFVUUzdYPFkaVNA6w.woff) format('woff');
			unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Rubik';
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url(./../wp-content/fonts/rubik/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYiFWUUzdYPFkaVNA6w.woff) format('woff');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Rubik';
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url(./../wp-content/fonts/rubik/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYiFV0UzdYPFkaVN.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'Rubik';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(./../wp-content/fonts/rubik/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-FWkUzdYPFkaVNA6w.woff) format('woff');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'Rubik';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(./../wp-content/fonts/rubik/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-FU0UzdYPFkaVNA6w.woff) format('woff');
			unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* hebrew */
		@font-face {
			font-family: 'Rubik';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(./../wp-content/fonts/rubik/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-FVUUzdYPFkaVNA6w.woff) format('woff');
			unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Rubik';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(./../wp-content/fonts/rubik/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-FWUUzdYPFkaVNA6w.woff) format('woff');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Rubik';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(./../wp-content/fonts/rubik/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-FV0UzdYPFkaVN.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'Oswald';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(./../wp-content/fonts/oswald/TK3_WkUHHAIjg75cFRf3bXL8LICs1y9osUtiYySUhiCnAxTV.woff) format('woff');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'Oswald';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(./../wp-content/fonts/oswald/TK3_WkUHHAIjg75cFRf3bXL8LICs1y9osUJiYySUhiCnAxTV.woff) format('woff');
			unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* vietnamese */
		@font-face {
			font-family: 'Oswald';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(./../wp-content/fonts/oswald/TK3_WkUHHAIjg75cFRf3bXL8LICs1y9osUliYySUhiCnAxTV.woff) format('woff');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Oswald';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(./../wp-content/fonts/oswald/TK3_WkUHHAIjg75cFRf3bXL8LICs1y9osUhiYySUhiCnAxTV.woff) format('woff');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Oswald';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(./../wp-content/fonts/oswald/TK3_WkUHHAIjg75cFRf3bXL8LICs1y9osUZiYySUhiCnAw.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'Oswald';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(./../wp-content/fonts/oswald/TK3_WkUHHAIjg75cFRf3bXL8LICs1xZosUtiYySUhiCnAxTV.woff) format('woff');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'Oswald';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(./../wp-content/fonts/oswald/TK3_WkUHHAIjg75cFRf3bXL8LICs1xZosUJiYySUhiCnAxTV.woff) format('woff');
			unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* vietnamese */
		@font-face {
			font-family: 'Oswald';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(./../wp-content/fonts/oswald/TK3_WkUHHAIjg75cFRf3bXL8LICs1xZosUliYySUhiCnAxTV.woff) format('woff');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Oswald';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(./../wp-content/fonts/oswald/TK3_WkUHHAIjg75cFRf3bXL8LICs1xZosUhiYySUhiCnAxTV.woff) format('woff');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Oswald';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(./../wp-content/fonts/oswald/TK3_WkUHHAIjg75cFRf3bXL8LICs1xZosUZiYySUhiCnAw.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* devanagari */
		@font-face {
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(./../wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format('woff');
			unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(./../wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format('woff');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(./../wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format('woff');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
	</style>
</head>

<body class="page-template-default page page-id-458 default-skin no-sidebar site-layout-default elementor-default elementor-kit-316 elementor-page elementor-page-458">

	<div data-elementor-type="header" data-elementor-id="321" class="elementor elementor-321 elementor-location-header" data-elementor-settings="[]">
		<div class="elementor-section-wrap">
			<header class="elementor-section elementor-top-section elementor-element elementor-element-7b34d158 elementor-section-content-middle elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="7b34d158" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<main class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-72141c1" data-id="72141c1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-653ec57 elementor-author-box--layout-image-left elementor-author-box--align-left elementor-widget elementor-widget-author-box" data-id="653ec57" data-element_type="widget" data-widget_type="author-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-author-box">
										<div class="elementor-author-box__avatar">
											<img src="<?php echo get_template_directory_uri(); ?>./../wp-content/uploads/2021/04/WhatsApp-Image-2021-02-19-at-08.32.06-300x300.jpeg" alt="SMNIK">
										</div>

										<div class="elementor-author-box__text">
											<div>
												<h1 class="elementor-author-box__name">SMNIK</h1>
											</div>


										</div>
									</div>
								</div>
							</div>
						</div>
					</main>
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-472837c" data-id="472837c" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-51c6910c elementor-search-form--skin-classic elementor-search-form--button-type-icon elementor-search-form--icon-search elementor-widget elementor-widget-search-form" data-id="51c6910c" data-element_type="widget" data-settings="{&quot;skin&quot;:&quot;classic&quot;}" data-widget_type="search-form.default">
								<div class="elementor-widget-container">
									<form class="elementor-search-form" role="search" action="./../index.html" method="get">
										<div class="elementor-search-form__container">
											<input placeholder="Search..." class="elementor-search-form__input" type="search" name="s" title="Search" value="">
											<button class="elementor-search-form__submit" type="submit" title="Search" aria-label="Search">
												<i class="fa fa-search" aria-hidden="true"></i>
												<span class="elementor-screen-only">Search</span>
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<nav class="elementor-section elementor-top-section elementor-element elementor-element-576df24b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="576df24b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7a9056d8" data-id="7a9056d8" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-530ea367 elementor-nav-menu__align-justify elementor-nav-menu--dropdown-mobile elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-widget__width-initial elementor-nav-menu--indicator-classic elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="530ea367" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
								<div class="elementor-widget-container">
									<nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-background e--animation-sweep-right">
										<ul id="menu-1-530ea367" class="elementor-nav-menu">
											<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-910"><a href="./../index.php" class="elementor-item">Home</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-458 current_page_item menu-item-466"><a href="./index.php" aria-current="page" class="elementor-item elementor-item-active">CV</a></li>
										</ul>
									</nav>
									<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
										<i class="eicon-menu-bar" aria-hidden="true"></i>
										<span class="elementor-screen-only">Menu</span>
									</div>
									<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
										<ul id="menu-2-530ea367" class="elementor-nav-menu">
											<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-910"><a href="./../index.php" class="elementor-item">Home</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-458 current_page_item menu-item-466"><a href="./index.php" aria-current="page" class="elementor-item elementor-item-active">CV</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6b45cdb3" data-id="6b45cdb3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-385b077c elementor-shape-circle e-grid-align-right e-grid-align-center elementor-widget-tablet__width-initial elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="385b077c" data-element_type="widget" data-widget_type="social-icons.default">
								<div class="elementor-widget-container">
									<div class="elementor-social-icons-wrapper elementor-grid">
										<div class="elementor-grid-item">
											<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-022bbc9" target="_blank">
												<span class="elementor-screen-only">Twitter</span>
												<i class="fab fa-twitter"></i> </a>
										</div>
										<div class="elementor-grid-item">
											<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-c58d333" target="_blank">
												<span class="elementor-screen-only">Instagram</span>
												<i class="fab fa-instagram"></i> </a>
										</div>
										<div class="elementor-grid-item">
											<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-eb03bd5" target="_blank">
												<span class="elementor-screen-only">Linkedin</span>
												<i class="fab fa-linkedin"></i> </a>
										</div>
										<div class="elementor-grid-item">
											<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-23a5e6c" target="_blank">
												<span class="elementor-screen-only">Youtube</span>
												<i class="fab fa-youtube"></i> </a>
										</div>
										<div class="elementor-grid-item">
											<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-6cdd4d3" target="_blank">
												<span class="elementor-screen-only">Facebook</span>
												<i class="fab fa-facebook"></i> </a>
										</div>
										<div class="elementor-grid-item">
											<a class="elementor-icon elementor-social-icon elementor-social-icon-github elementor-repeater-item-52c39f3" target="_blank">
												<span class="elementor-screen-only">Github</span>
												<i class="fab fa-github"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>

	<div id="content" class="site-content">
		<div class="container">
			<section class="wrap-detail-page">
				<h1 class="page-title entry-title">Curriculum vitae</h1>


				<div class="row">
					<div id="primary" class="content-area col-12">
						<main id="main" class="site-main">

							<article id="post-458" class="post-458 page type-page status-publish hentry">
								<div class="entry-content">
									<div data-elementor-type="wp-page" data-elementor-id="458" class="elementor elementor-458" data-elementor-settings="[]">
										<div class="elementor-section-wrap">
											<section class="elementor-section elementor-top-section elementor-element elementor-element-19f9d7d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="19f9d7d" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4820c9f" data-id="4820c9f" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-913fd20 elementor-author-box--layout-image-above elementor-author-box--align-center elementor-widget elementor-widget-author-box" data-id="913fd20" data-element_type="widget" data-widget_type="author-box.default">
																<div class="elementor-widget-container">
																	<div class="elementor-author-box">
																		<div class="elementor-author-box__avatar">
																			<img src="<?php echo get_template_directory_uri(); ?>./../wp-content/uploads/2021/04/IMG_4978-225x300.jpg">
																		</div>

																		<div class="elementor-author-box__text">


																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6914fc4" data-id="6914fc4" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-5badfc5 elementor-widget elementor-widget-post-info" data-id="5badfc5" data-element_type="widget" data-widget_type="post-info.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">
																		<li class="elementor-icon-list-item elementor-repeater-item-a833ffc elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="far fa-user-circle"></i> </span>
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-custom">
																				SMNIK </span>
																		</li>
																		<li class="elementor-icon-list-item elementor-repeater-item-1fcbddd elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-calendar-alt"></i> </span>
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-custom">
																				April 12, 2021 </span>
																		</li>
																		<li class="elementor-icon-list-item elementor-repeater-item-06b9cb6 elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="far fa-clock"></i> </span>
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-time">
																				1:44 am </span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-4da9250 elementor-widget elementor-widget-text-editor" data-id="4da9250" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<div class="elementor-text-editor elementor-clearfix">
																		<h2><span style="color: #ccffff; font-family: Time new Romo;"><strong>Nik (Seyedmasood Nikkhah)</strong></span></h2>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-257418a elementor-widget elementor-widget-post-info" data-id="257418a" data-element_type="widget" data-widget_type="post-info.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">
																		<li class="elementor-icon-list-item elementor-repeater-item-1fcbddd elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-birthday-cake"></i> </span>
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-custom">
																				25/12/1987 </span>
																		</li>
																		<li class="elementor-icon-list-item elementor-repeater-item-98bce5a elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-dna"></i> </span>
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-custom">
																				Iranian </span>
																		</li>
																		<li class="elementor-icon-list-item elementor-repeater-item-a833ffc elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="far fa-user-circle"></i> </span>
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-custom">
																				Male </span>
																		</li>
																		<li class="elementor-icon-list-item elementor-repeater-item-06540be elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-mobile-alt"></i> </span>
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-custom">
																				(+39) 3381529638 </span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-12f9bcc elementor-widget elementor-widget-post-info" data-id="12f9bcc" data-element_type="widget" data-widget_type="post-info.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">
																		<li class="elementor-icon-list-item elementor-repeater-item-1fcbddd elementor-inline-item">
																			<a href="<?php echo get_template_directory_uri(); ?>http://seyedmasood.nikkhah@studio.unibo.it/">
																				<span class="elementor-icon-list-icon">
																					<i aria-hidden="true" class="fas fa-envelope-open-text"></i> </span>
																				<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-custom">
																					seyedmasood.nikkhah@studio.unibo.it </span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-0c670b9 elementor-widget elementor-widget-post-info" data-id="0c670b9" data-element_type="widget" data-widget_type="post-info.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">
																		<li class="elementor-icon-list-item elementor-repeater-item-1fcbddd elementor-inline-item">
																			<a href="<?php echo get_template_directory_uri(); ?>https://goo.gl/maps/CaY3ZSf4JxFKbcCY9">
																				<span class="elementor-icon-list-icon">
																					<i aria-hidden="true" class="far fa-address-card"></i> </span>
																				<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-custom">
																					Via Mario Musolesi, 40138 Bologna BO, 40138, Bologna, Italy </span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-5cb9027 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5cb9027" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-29c26ac elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="29c26ac" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-90a4eab" data-id="90a4eab" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-ef082a8 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="ef082a8" data-element_type="widget" data-widget_type="divider.default">
																<div class="elementor-widget-container">
																	<div class="elementor-divider">
																		<span class="elementor-divider-separator">
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-6a6a92a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6a6a92a" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f9006d6" data-id="f9006d6" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-151cd5c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="151cd5c" data-element_type="widget" data-widget_type="icon-list.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-icon-list-items">
																		<li class="elementor-icon-list-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-user-graduate"></i> </span>
																			<span class="elementor-icon-list-text">EDUCATION AND TRAINING</span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-77053ad elementor-widget elementor-widget-text-editor" data-id="77053ad" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<div class="elementor-text-editor elementor-clearfix">
																		<ul>
																			<li>
																				<span style="color: #ffff99;">HTML, CSS, AND JAVASCRIPT FOR WEB DEVELOPERS COURSE – coursera</span>
																				<p style="color: #999999; line-height: 0.3cm;"><span style="color: #999999; line-height: 0.3cm; font-size: 16px;">Nov 2020 &#8211; Dec 2020</span></p>


																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px; margin-top: -15px;">

																			</li>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: 10px; color: #fff8dc; text-align: justify;">The course is so professional under the high-quality education system of Johns Hopkins University. The last grade
																					completed as a restaurant web and published on GitHub.</p>
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: -17px; color: #fff8dc; text-align: justify;"><strong>
																						Field(s) of studdy:
																					</strong></p>

																				<ul>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: -17px;">Web Designing</li>
																				</ul>
																				<ul><a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/coursera-web/module5-solution/index.html">https://smnik.github.io/coursera-web/module5-solution/index.html
																					</a></ul>
																				<ul>
																					<a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/coursera-web/Coursera%20BLJCNACYQ2LX.pdf">Certificate</a>
																				</ul>
																			</li>
																		</ul>
																		<ul>
																			<li>
																				<span style="color: #ffff99;">ONLINE SCHOOL – mimo</span>
																				<p style="color: #999999; line-height: 0.3cm;"><span style="color: #999999; line-height: 0.3cm; font-size: 16px;">2019 &#8211; 2020</span></p>


																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px; margin-top: -15px;">

																			</li>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: 12px; color: #ffff99; text-align: justify;">Make a website</p>

																				<ul>
																					<li>
																						<p style="font-size: 16px; line-height: 0.6cm; margin-top: -20px; color: #fff8dc; text-align: justify;">An understanding of HTML required to structure a web page, the CSS techniques needed for styling. And the
																							fundamentals of JavaScript. The practical knowledge needed to combine these technologies and publish a website on the internet.</p>
																						<a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/optical-fiber.html">https://smnik.github.io/optical-fiber.html
																						</a>

																						<hr>

																						<a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/onlinestore.html">https://smnik.github.io/onlinestore.html
																						</a>

																						<hr>

																						<a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/homeflix.html">https://smnik.github.io/homeflix.html
																						</a>

																						<hr>

																						<a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/color.html">https://smnik.github.io/color.html
																						</a>

																						<hr>

																						<a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/button.html">https://smnik.github.io/button.html
																						</a>

																						<hr>

																						<a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/Make%20a%20Website.pdf">Certificate</a>
																					</li>
																				</ul>
																			</li>
																		</ul>

																		<hr>

																		<ul>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: 12px; color: #ffff99; text-align: justify;">Programming for Games</p>

																				<ul>
																					<li>
																						<p style="font-size: 16px; line-height: 0.6cm; margin-top: -20px; color: #fff8dc; text-align: justify;">An understanding of fundamental concepts needed to program in C#, such as variables, control statements, loops,
																							data structures, and functions.</p>
																						<a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/Programming%20for%20Games.pdf">Certificate</a>
																					</li>
																				</ul>
																			</li>
																		</ul>
																		<ul>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: 12px; color: #ffff99; text-align: justify;">Code for IOS Apps</p>

																				<ul>
																					<li>
																						<p style="font-size: 16px; line-height: 0.6cm; margin-top: -20px; color: #fff8dc; text-align: justify;">An understanding of fundamental concepts needed to program in Swift, such as variables, control statement, loops,
																							data structures, and functions.</p>
																						<a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/Code%20for%20IOS%20apps.pdf">Certificate</a>
																					</li>
																				</ul>
																			</li>
																		</ul>
																		<ul>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: 12px; color: #ffff99; text-align: justify;">Code for Android Apps</p>

																				<ul>
																					<li>
																						<p style="font-size: 16px; line-height: 0.6cm; margin-top: -20px; color: #fff8dc; text-align: justify;">An understanding of fundamental concepts needed to program in Kotlin, such as variables, control statements,
																							loops, data structures, classes, functions, and null safety.</p>
																						<a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://smnik.github.io/Code%20for%20Android%20Apps.pdf">Certificate</a>
																					</li>
																				</ul>
																			</li>
																		</ul>
																		<ul>
																			<li>
																				<span style="color: #ffff99;">MASTER DEGREE – &#8220;Alma Mater Studiorum&#8221; Università di Bologna</span>
																				<p style="color: #999999; line-height: 0.3cm;"><span style="color: #999999; line-height: 0.3cm; font-size: 16px;">2018 – CURRENT – Viale Carlo Berti Pichat, 6, Bologna, Italy</span></p>


																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px; margin-top: -15px;">

																			</li>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: 10px; color: #fff8dc; text-align: justify;">Knowledge:</p>

																				<ul>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: -17px;">Characterization and transformation of organic transistors</li>
																					<li style="color: #fff8dc; font-size: 14px;">Laboratory projects, GitHub, Machine learning</li>
																					<li style="color: #fff8dc; font-size: 14px;">Scanning Probe Microscopy (SPM)</li>
																				</ul>
																				<ul><a style="font-size: 14px;" href="<?php echo get_template_directory_uri(); ?>https://SMNIK.github.io/Certificate of Attendance NSFE2019_ SEYEDMASOOD NIKKHAH.pdf">Certificate</a></ul>
																			</li>
																		</ul>
																		<ul>
																			<li>
																				<span style="color: #ffff99;">BACHELOR DEGREE – Science and Research Branch, Islamic Azad University</span>
																				<p style="color: #999999; line-height: 0.3cm;"><span style="color: #999999; line-height: 0.3cm; font-size: 16px;">2009 – 2012 – Tehran, Iran</span></p>


																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px; margin-top: -15px;">

																			</li>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: 10px; color: #fff8dc; text-align: justify;">Skills from Bachelor degree:</p>

																				<ul>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: -17px;">Mathematics skills</li>
																					<li style="color: #fff8dc; font-size: 14px;">Reporting</li>
																					<li style="color: #fff8dc; font-size: 14px;">Analyzing data</li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-def55db elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="def55db" data-element_type="widget" data-widget_type="divider.default">
																<div class="elementor-widget-container">
																	<div class="elementor-divider">
																		<span class="elementor-divider-separator">
																		</span>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-8d8a249 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="8d8a249" data-element_type="widget" data-widget_type="icon-list.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-icon-list-items">
																		<li class="elementor-icon-list-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-people-carry"></i> </span>
																			<span class="elementor-icon-list-text">WORK EXPERIENCE</span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-182041a elementor-widget elementor-widget-text-editor" data-id="182041a" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<div class="elementor-text-editor elementor-clearfix">
																		<ul>
																			<li>
																				<span style="color: #ffff99;">MANAGER OF A SPARE PARTS SHOP FOR CARS – Nikkhah Store</span>
																				<p style="color: #999999; line-height: 0.3cm;"><span style="color: #999999; line-height: 0.3cm; font-size: 16px;">2012 – 2018 – Tehran, Iran</span></p>


																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px; margin-top: -15px;">

																			</li>
																			<li style="list-style-type: none;">
																				<ul>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 10px;">Supplier management</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Customer service</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Stock, store, and inventory management</li>
																				</ul>
																			</li>
																		</ul>
																		<ul>
																			<li>
																				<span style="color: #ffff99;">MILITARY SERVICE – Iranian military aeronautical postal service</span>
																				<p style="color: #999999; line-height: 0.3cm;"><span style="color: #999999; line-height: 0.3cm; font-size: 16px;">2010 – 2012 – Tehran, Iran</span></p>


																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px; margin-top: -15px;">

																			</li>
																			<li style="list-style-type: none;">
																				<ul>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 10px;">Preparation of dispatches</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Drawing up of office papers</li>
																				</ul>
																			</li>
																		</ul>

																		<hr>

																		<ul>
																			<li>
																				<span style="color: #ffff99;">COOK ASSISTANT – Tehran Jalal Catering</span>
																				<p style="color: #999999; line-height: 0.3cm;"><span style="color: #999999; line-height: 0.3cm; font-size: 16px;">2009 – 2010 – Tehran, Iran</span></p>


																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px; margin-top: -15px;">

																			</li>
																			<li style="list-style-type: none;">
																				<ul>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 10px;">Apprenticeship for a large kitchen workshop, main supplier of the major services of Tehran catering (6 months)</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Kitchen care, cleaning of work environments</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Assistance in the preparation of dishes</li>
																				</ul>
																			</li>
																		</ul>
																		<ul>
																			<li>
																				<span style="color: #ffff99;">CAR MECHANIC – Autoservices Kashananak</span>
																				<p style="color: #999999; line-height: 0.3cm;"><span style="color: #999999; line-height: 0.3cm; font-size: 16px;">2007 – 2008 – Tehran, Iran</span></p>


																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px; margin-top: -15px;">

																			</li>
																			<li style="list-style-type: none;">
																				<ul>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 10px;">Oil change and general engine control</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Replacing the brake pads, filters, and spark plugs</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Repairing of the gearbox and clutch</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Replacing and repairing of lights</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Repairing of suspensions, springs and homokinetic joint</li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-e2ef016 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="e2ef016" data-element_type="widget" data-widget_type="divider.default">
																<div class="elementor-widget-container">
																	<div class="elementor-divider">
																		<span class="elementor-divider-separator">
																		</span>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-d3a9646 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="d3a9646" data-element_type="widget" data-widget_type="icon-list.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-icon-list-items">
																		<li class="elementor-icon-list-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-language"></i> </span>
																			<span class="elementor-icon-list-text">LANGUAGE SKILLS</span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-ab298d1 elementor-widget elementor-widget-text-editor" data-id="ab298d1" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<div class="elementor-text-editor elementor-clearfix">
																		<ul>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: -5px; color: #fff8dc; text-align: justify;">Mother tongue(s): <strong>PERSIAN</strong><span style="color: var( --e-global-color-text ); font-size: 20px; text-align: left;"> </span></p>
																			</li>
																		</ul>
																		<style>
																			table,
																			th,
																			td {
																				border: 0px solid black;
																				border-collapse: collapse;
																			}

																			th,
																			td {
																				padding: 5px;
																				text-align: center;
																				color: #fff8dc;
																			}

																			#smnik {
																				background-color: #101b1b;
																			}
																		</style>
																		<table style="width: 100%; margin-top: 0px;">
																			<tbody>
																				<tr>
																					<th></th>
																					<td colspan="2">UNDERSTANDING</td>
																					<td colspan="2">SPEAKING</td>
																					<td>WRITING</td>
																				</tr>
																				<tr>
																					<th></th>
																					<td>Listening</td>
																					<td>Reading</td>
																					<td>Spoken production</td>
																					<td>Spoken interaction</td>
																					<td></td>
																				</tr>
																				<tr id="smnik">
																					<th rowspan="1">ENGLISH</th>
																					<td>B2</td>
																					<td>B2</td>
																					<td>B2</td>
																					<td>B2</td>
																					<td>B2</td>
																				</tr>
																			</tbody>
																		</table>
																		<p style="margin-top: 5px; color: #fff8dc; font-size: 14px;">Levels: A1 and A2: Basic user; B1 and B2: Independent user; C1 and C2: Proficient user</p>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-3033602 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="3033602" data-element_type="widget" data-widget_type="divider.default">
																<div class="elementor-widget-container">
																	<div class="elementor-divider">
																		<span class="elementor-divider-separator">
																		</span>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-08355f7 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="08355f7" data-element_type="widget" data-widget_type="icon-list.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-icon-list-items">
																		<li class="elementor-icon-list-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-laptop-code"></i> </span>
																			<span class="elementor-icon-list-text">DIGITAL SKILLS</span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-7e9c884 elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="7e9c884" data-element_type="widget" data-widget_type="icon-list.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-icon-list-items elementor-inline-items">
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Microsoft Office</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Windows</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Linux</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Video editing Windows Movie Maker Camtasia Studio Biteable etc</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Python</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Java</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">HTML</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Javascript</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">CSS</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Ruby</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">PHP</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">WordPress</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">GitHub</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Origin</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Visual Studio Code</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Sublime</span>
																		</li>
																		<li class="elementor-icon-list-item elementor-inline-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i> </span>
																			<span class="elementor-icon-list-text">Jupyter</span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-796ebfd elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="796ebfd" data-element_type="widget" data-widget_type="divider.default">
																<div class="elementor-widget-container">
																	<div class="elementor-divider">
																		<span class="elementor-divider-separator">
																		</span>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-0e2afea elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="0e2afea" data-element_type="widget" data-widget_type="icon-list.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-icon-list-items">
																		<li class="elementor-icon-list-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-head-side-virus"></i> </span>
																			<span class="elementor-icon-list-text">PERSONAL SKILLS</span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-c063be7 elementor-widget elementor-widget-text-editor" data-id="c063be7" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<div class="elementor-text-editor elementor-clearfix">
																		<ul>
																			<li>
																				<span style="color: #ffff99;">Communication skills</span>

																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px;">

																			</li>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: 10px; color: #fff8dc; text-align: justify;">Good communication skills gained also during the experience as a freelance photographer and thanks to the predisposition
																					to the meeting with people gained thanks to the contact with the public.</p>
																			</li>
																		</ul>

																		<hr>

																		<ul>
																			<li>
																				<span style="color: #ffff99;">Organizational and management skills</span>

																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px;">

																			</li>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: 10px; color: #fff8dc; text-align: justify;">Good leadership skills gained in the management of scientific connection groups between the University of Bologna and
																					the local community (eg technological assistance to the elderly). Currently responsible for a team of 5 people.</p>
																			</li>
																		</ul>

																		<hr>

																		<ul>
																			<li>
																				<span style="color: #ffff99;">Professional skills</span>

																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px;">

																			</li>
																			<li style="list-style-type: none;">
																				<p style="font-size: 16px; line-height: 0.6cm; margin-top: 10px; color: #fff8dc; text-align: justify;">Good communication skills gained also during the experience as a freelance photographer and thanks to the predisposition
																					to the meeting with people gained thanks to the contact with the public.</p>
																			</li>
																		</ul>

																		<hr>

																		<ul>
																			<li>
																				<span style="color: #ffff99;">Professional skills</span>

																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px;">

																			</li>
																			<li style="list-style-type: none;">
																				<ul>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 10px;">Great enthusiasm for scientific projects and care of relationships with different companies, businesses, and groups.</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Excellent aptitude for practical work and new results in the industrial field.</li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-5bc0681 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5bc0681" data-element_type="widget" data-widget_type="divider.default">
																<div class="elementor-widget-container">
																	<div class="elementor-divider">
																		<span class="elementor-divider-separator">
																		</span>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-44c622c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="44c622c" data-element_type="widget" data-widget_type="icon-list.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-icon-list-items">
																		<li class="elementor-icon-list-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-info-circle"></i> </span>
																			<span class="elementor-icon-list-text">FURTHER INFORMATION</span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-bfa525a elementor-widget elementor-widget-text-editor" data-id="bfa525a" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<div class="elementor-text-editor elementor-clearfix">
																		<ul>
																			<li>
																				<span style="color: #ffff99;">Professional skills</span>

																				<hr class="rounded" style="border-top: 4px solid #bbb; border-radius: 5px;">

																			</li>
																			<li style="list-style-type: none;">
																				<ul>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 10px;">Photographic post-production work with editing programs.</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Use of analog and digital machines, lenses and flash devices to create innovative photographic effects with light.</li>
																					<li style="color: #fff8dc; font-size: 14px; margin-top: 0px;">Sharing photographic works on Instagram (masoud_nikkhahh).</li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-e33043e elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="e33043e" data-element_type="widget" data-widget_type="divider.default">
																<div class="elementor-widget-container">
																	<div class="elementor-divider">
																		<span class="elementor-divider-separator">
																		</span>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-b78fa69 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="b78fa69" data-element_type="widget" data-widget_type="icon-list.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-icon-list-items">
																		<li class="elementor-icon-list-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-info"></i> </span>
																			<span class="elementor-icon-list-text">Treatment of personal data</span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-4d9dd67 elementor-widget elementor-widget-text-editor" data-id="4d9dd67" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<div class="elementor-text-editor elementor-clearfix">
																		<p style="font-size: 16px; line-height: 0.6cm; color: #fff8dc; text-align: center;">I authorize the processing of personal data contained in my curriculum vitae on the basis of art. 13 of D. Lgs. 196/2003 and<br>art. 13 of UE Regulation 2016/679 concerning the protection of individuals with regard to the processing of personal data.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
								<!-- .entry-content -->

							</article><!-- #post-458 -->
						</main><!-- #main -->
					</div>
					<!-- #primary -->
				</div>
			</section>
		</div>
		<!-- #container -->
	</div>
	<!-- #content -->
	<div data-elementor-type="footer" data-elementor-id="332" class="elementor elementor-332 elementor-location-footer" data-elementor-settings="[]">
		<div class="elementor-section-wrap">
			<footer class="elementor-section elementor-top-section elementor-element elementor-element-6771572a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6771572a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7697492" data-id="7697492" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-fa15c9f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fa15c9f" data-element_type="section">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a073b25" data-id="a073b25" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-56fd7e1 elementor-widget elementor-widget-heading" data-id="56fd7e1" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h4 class="elementor-heading-title elementor-size-default">Products</h4>
												</div>
											</div>
											<div class="elementor-element elementor-element-f290800 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="f290800" data-element_type="widget" data-widget_type="icon-list.default">
												<div class="elementor-widget-container">
													<ul class="elementor-icon-list-items">
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Pricing</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Teams</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Education</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Refer a friend</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Updates</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1a47e57" data-id="1a47e57" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-230bd59 elementor-widget elementor-widget-heading" data-id="230bd59" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h4 class="elementor-heading-title elementor-size-default">Features</h4>
												</div>
											</div>
											<div class="elementor-element elementor-element-11608a5 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="11608a5" data-element_type="widget" data-widget_type="icon-list.default">
												<div class="elementor-widget-container">
													<ul class="elementor-icon-list-items">
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Overview</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Design</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Code</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Collaborate</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Sletch Plugin</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-62c4c8a" data-id="62c4c8a" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-3439048 elementor-widget elementor-widget-heading" data-id="3439048" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h4 class="elementor-heading-title elementor-size-default">Get Started</h4>
												</div>
											</div>
											<div class="elementor-element elementor-element-f239a14 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="f239a14" data-element_type="widget" data-widget_type="icon-list.default">
												<div class="elementor-widget-container">
													<ul class="elementor-icon-list-items">
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Tutorials</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Resources</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Guides</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Examples</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Docs</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-340b75e" data-id="340b75e" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-f961827 elementor-widget elementor-widget-heading" data-id="f961827" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h4 class="elementor-heading-title elementor-size-default">About</h4>
												</div>
											</div>
											<div class="elementor-element elementor-element-3af8e3e elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3af8e3e" data-element_type="widget" data-widget_type="icon-list.default">
												<div class="elementor-widget-container">
													<ul class="elementor-icon-list-items">
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Stories</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Community</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Blog</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Careers</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-text">Brand Assets</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-3fd40ff elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3fd40ff" data-element_type="section">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d0fd31a" data-id="d0fd31a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-3f5c03a elementor-widget elementor-widget-heading" data-id="3f5c03a" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<p class="elementor-heading-title elementor-size-default">Copyright © 2021-2030 SMNIK Developed with SMNIK</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-includes/js/imagesloaded.min.js?ver=4.1.4" id="imagesloaded-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-includes/js/masonry.min.js?ver=4.2.2" id="masonry-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-includes/js/jquery/jquery.masonry.min.js?ver=3.1.2b" id="jquery-masonry-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/bootstrap/js/bootstrap.min.js?ver=0.8" id="bootstrap-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/slick/slick.min.js?ver=0.8" id="slick-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/js/jquery.slicknav.min.js?ver=0.8" id="slicknav-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/js/skip-link-focus-fix.js?ver=0.8" id="bosa-skip-link-focus-fix-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/js/navigation.js?ver=0.8" id="bosa-navigation-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/js/theia-sticky-sidebar.min.js?ver=0.8" id="theia-sticky-sidebar-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/js/html5shiv.min.js?ver=0.8" id="html5shiv-js"></script>
	<script type="text/javascript" id="bosa-custom-js-extra">
		/* <![CDATA[ */
		var BOSA = {
			"is_rtl": "",
			"is_admin_bar_showing": "",
			"responsive_header_menu_text": "MENU",
			"disable_header_slider_dots": "",
			"disable_slider_dots": "",
			"disable_highlight_posts_dots": "",
			"header_image_slider": {
				"fade": true,
				"autoplay": 0,
				"autoplaySpeed": 4000,
				"fadeControl": 500
			},
			"main_slider": {
				"fade": true,
				"autoplay": 0,
				"autoplaySpeed": 4000,
				"fadeControl": 500
			},
			"home_highlight_posts": {
				"autoplay": 0,
				"autoplaySpeed": 4000,
				"slidesToShow": 3
			},
			"fixed_nav": "",
			"disable_scroll_top": "",
			"sticky_sidebar": "1",
			"header_two_logo": "",
			"is_header_two": "1",
			"is_frame_layout": "",
			"fixed_header_logo": "1",
			"separate_logo": "",
			"is_front_page": "",
			"the_custom_logo": ""
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/themes/bosa/assets/js/custom.min.js?ver=0.8" id="bosa-custom-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-includes/js/wp-embed.min.js?ver=5.7.1" id="wp-embed-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1" id="smartmenus-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.1.1" id="elementor-pro-webpack-runtime-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.1.4" id="elementor-webpack-runtime-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.1.4" id="elementor-frontend-modules-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.1.1" id="elementor-sticky-js"></script>
	<script type="text/javascript" id="elementor-pro-frontend-js-before">
		var ElementorProFrontendConfig = {
			"ajaxurl": ".\/wp-admin\/admin-ajax.php",
			"nonce": "7cf0612fe9",
			"urls": {
				"assets": ".\/wp-content\/plugins\/elementor-pro\/assets\/"
			},
			"i18n": {
				"toc_no_headings_found": "No headings were found on this page."
			},
			"shareButtonsNetworks": {
				"facebook": {
					"title": "Facebook",
					"has_counter": true
				},
				"twitter": {
					"title": "Twitter"
				},
				"google": {
					"title": "Google+",
					"has_counter": true
				},
				"linkedin": {
					"title": "LinkedIn",
					"has_counter": true
				},
				"pinterest": {
					"title": "Pinterest",
					"has_counter": true
				},
				"reddit": {
					"title": "Reddit",
					"has_counter": true
				},
				"vk": {
					"title": "VK",
					"has_counter": true
				},
				"odnoklassniki": {
					"title": "OK",
					"has_counter": true
				},
				"tumblr": {
					"title": "Tumblr"
				},
				"digg": {
					"title": "Digg"
				},
				"skype": {
					"title": "Skype"
				},
				"stumbleupon": {
					"title": "StumbleUpon",
					"has_counter": true
				},
				"mix": {
					"title": "Mix"
				},
				"telegram": {
					"title": "Telegram"
				},
				"pocket": {
					"title": "Pocket",
					"has_counter": true
				},
				"xing": {
					"title": "XING",
					"has_counter": true
				},
				"whatsapp": {
					"title": "WhatsApp"
				},
				"email": {
					"title": "Email"
				},
				"print": {
					"title": "Print"
				}
			},
			"facebook_sdk": {
				"lang": "en_US",
				"app_id": ""
			},
			"lottie": {
				"defaultAnimationUrl": ".\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
			}
		};
	</script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.1.1" id="elementor-pro-frontend-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-includes/js/jquery/ui/core.min.js?ver=1.12.1" id="jquery-ui-core-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1" id="elementor-dialog-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.1.4" id="share-link-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6" id="swiper-js"></script>
	<script type="text/javascript" id="elementor-frontend-js-before">
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false,
				"isImprovedAssetsLoading": false
			},
			"i18n": {
				"shareOnFacebook": "Share on Facebook",
				"shareOnTwitter": "Share on Twitter",
				"pinIt": "Pin it",
				"download": "Download",
				"downloadImage": "Download image",
				"fullscreen": "Fullscreen",
				"zoom": "Zoom",
				"share": "Share",
				"playVideo": "Play Video",
				"previous": "Previous",
				"next": "Next",
				"close": "Close"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"version": "3.1.4",
			"is_static": false,
			"experimentalFeatures": {
				"e_dom_optimization": true,
				"a11y_improvements": true,
				"landing-pages": true
			},
			"urls": {
				"assets": ".\/wp-content\/plugins\/elementor\/assets\/"
			},
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description"
			},
			"post": {
				"id": 458,
				"title": "Curriculum%20vitae%20%E2%80%93%20smnik",
				"excerpt": "",
				"featuredImage": false
			}
		};
	</script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.1.4" id="elementor-frontend-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.1.1" id="pro-preloaded-elements-handlers-js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>./../wp-content/plugins/elementor/assets/js/preloaded-elements-handlers.min.js?ver=3.1.4" id="preloaded-elements-handlers-js"></script>

</body>

</html>


<?php
get_footer(); ?>