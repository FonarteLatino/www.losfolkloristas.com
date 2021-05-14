/*
 *
 * General Colors and Fonts
 *
 */
body {
	font-family: <?php echo omni_option('typo_body_font_family'); ?>, sans-serif;
	font-size: <?php echo omni_option('typo_body_font_size'); ?>px;
	line-height: <?php echo omni_option('typo_body_line_height'); ?>px;
	color: <?php if (omni_option('general_color_body')) echo omni_option('general_color_body'); ?>;
	font-weight: <?php echo omni_option('typo_body_font_weight'); ?>;
}
.profile-text {
	color: <?php if (omni_option('general_color_body')) echo omni_option('general_color_body'); ?>;
}
h1, h2, h3, h4, h5, h6, .slogan {
	font-family: <?php echo omni_option('typo_title_font_family'); ?>, sans-serif;
	text-transform: <?php echo omni_option('typo_title_transform'); ?>;
	font-weight: <?php if (omni_option('typo_title_font_weight')) echo omni_option('typo_title_font_weight'); ?>;
	color: <?php echo omni_option('general_color_titles'); ?>;
}
a {
  color: <?php echo omni_option('general_color_links'); ?>;
}
a:hover,
a:focus {
  color: <?php echo omni_option('general_color_links_hover'); ?>;
}

.border-btn,
.form-submit input[type="submit"],
.filter ul li a,
.social-btn {
	font-family: <?php echo omni_option('typo_title_font_family'); ?>, sans-serif;
	border: 1px solid <?php echo omni_option('general_color_button_border'); ?>;
	text-transform: <?php echo omni_option('typo_title_transform'); ?>;
	color: <?php echo omni_option('general_color_button'); ?>;
}
.filter ul li a:hover,
.filter ul li a:focus,
.filter ul li.active a,
.social-btn:hover,
.social-btn:focus,
.border-btn:hover, 
.border-btn:focus,
.form-submit input[type="submit"]:hover,
.form-submit input[type="submit"]:focus {
	background: <?php echo omni_option('general_color_button_bg_hover'); ?>;
	border: 1px solid <?php echo omni_option('general_color_button_border_hover'); ?>;
	color: <?php echo omni_option('general_color_button_hover'); ?>;
}

/* Background Colors */
.header-type {
	background: <?php echo omni_option('general_bg_top'); ?>;
	color: <?php echo omni_option('general_bg_top_color'); ?>;
}
.footer-type {
	background: <?php echo omni_option('general_bg_footer'); ?>;
	color: <?php echo omni_option('general_bg_footer_color'); ?>;
}
<?php if ( !omni_option('header_arrows')) { ?>
.header-type:before {
   content: inherit;
   display: none;
   position: inherit;
}
<?php } ?>
<?php if ( !omni_option('footer_arrows')) { ?>
.footer-type:before {
   content: inherit;
   display: none;
   position: inherit;
}
<?php } ?>
.nav-container {
	background: <?php echo omni_option('general_bg_nav'); ?>;
}
.main-nav {
	font-family: <?php echo omni_option('typo_title_font_family'); ?>, sans-serif;
	background: <?php echo omni_option('general_bg_nav'); ?>;
}
.service .front {
	background: <?php echo omni_option('general_bg_service'); ?>;
}
.price-package .name,
.price-package .price {
	font-family: <?php echo omni_option('typo_title_font_family'); ?>, sans-serif;
}
.price-package:hover .package-price {
	background: <?php echo omni_option('general_bg_price'); ?>;
}
.portfolio .item .back,
.tiled-items .item .back {
	background: <?php echo omni_option('general_portfolio_item'); ?>;
}
.portfolio .item-icons a:hover,
.tiled-items .item-icons a:hover {
	color: <?php echo omni_option('general_portfolio_icons_hover'); ?>;
}
.main-nav li a{
	color: <?php echo omni_option('general_bg_nav_a'); ?>;
}
.nav > li > a:hover,
.nav > li > a:focus,
.nav > li.current-menu-item > a {
	color: <?php echo omni_option('general_bg_nav_hover'); ?>;
}

.newsletter .news-title {
	font-family: <?php echo omni_option('typo_title_font_family'); ?>, sans-serif;
	background: <?php echo omni_option('general_newsletter_color'); ?>;
}
.newsletter .news-title:after {
	border-left-color: <?php echo omni_option('general_newsletter_color'); ?>;
}
.newsletter .news-icon:hover {
	color: <?php echo omni_option('general_newsletter_color'); ?>;
}

.tweet-box .icon-twitter,
.quote-box .icon-quote {
	color: <?php echo omni_option('general_box_icon_color'); ?>;
}

.rev_slider_wrapper .tparrows,
.tiled-items .direction-nav a {
	background-color: <?php echo omni_option('general_headslider_arrow_color'); ?>;
}

/* Sliders */
.portfolio-slider .flex-direction-nav a,
.item-media .flex-direction-nav a {
    border-color: <?php echo omni_option('general_slider_navborder'); ?>;
    background-color: <?php echo omni_option('general_slider_navbg'); ?>;
}
.portfolio-slider .flex-direction-nav [class^="icon-"],
.portfolio-slider .flex-direction-nav [class*=" icon-"],
.item-media .flex-direction-nav [class^="icon-"],
.item-media .flex-direction-nav [class*=" icon-"]  {
    color: <?php echo omni_option('general_slider_navarrow'); ?>;
}
.portfolio-slider .flex-direction-nav a:hover [class^="icon-"],
.portfolio-slider .flex-direction-nav a:hover [class*=" icon-"],
.item-media .flex-direction-nav a:hover [class^="icon-"],
.item-media .flex-direction-nav a:hover [class*=" icon-"] {
    color: <?php echo omni_option('general_slider_navarrow_hover'); ?>;
}
.portfolio-slider:hover .flex-next:hover, 
.portfolio-slider:hover .flex-prev:hover,
.item-media:hover .flex-next:hover, 
.item-media:hover .flex-prev:hover {
    border-color: <?php echo omni_option('general_slider_navborder_hover'); ?>;
    background-color: <?php echo omni_option('general_slider_navbg_hover'); ?>;
}
.portfolio-slider .flexslider .flex-next:focus, 
.portfolio-slider .flexslider .flex-prev:focus,
.item-media .flexslider .flex-next:focus, 
.item-media .flexslider .flex-prev:focus {
    border-color: <?php echo omni_option('general_slider_navborder_hover'); ?>;
    background-color: <?php echo omni_option('general_slider_navbg_hover'); ?>;
}

/* Profile Carousels */
.profile-carousel .flex-direction-nav a {
    border-color: <?php echo omni_option('general_carprofile_navborder'); ?>;
    background-color: <?php echo omni_option('general_carprofile_navbg'); ?>;
}
.profile-carousel .flex-direction-nav [class^="icon-"],
.profile-carousel .flex-direction-nav [class*=" icon-"] {
    color: <?php echo omni_option('general_carprofile_navarrow'); ?>;
}
.profile-carousel:hover .flex-next:hover, 
.profile-carousel:hover .flex-prev:hover {
    border-color: <?php echo omni_option('general_carprofile_navborder_hover'); ?>;
    background-color: <?php echo omni_option('general_carprofile_navbg_hover'); ?>;
}
.profile-carousel .flex-direction-nav a:hover [class^="icon-"],
.profile-carousel .flex-direction-nav a:hover [class*=" icon-"] {
    color: <?php echo omni_option('general_carprofile_navarrow_hover'); ?>;
}
.flex-control-paging li a {
     background-color: <?php echo omni_option('general_carprofile_bullet'); ?>;
}
.flex-control-paging li a:hover {
     background-color: <?php echo omni_option('general_carprofile_bullet_hover'); ?>;
}
.flex-control-paging li a.flex-active {
     background-color: <?php echo omni_option('general_carprofile_bullet_hover'); ?>;
}

/* Clients Carousels */
.clients .flex-direction-nav a {
    border-color: <?php echo omni_option('general_carclients_navborder'); ?>;
    background-color: <?php echo omni_option('general_carclients_navbg'); ?>;
}
.clients .flex-direction-nav [class^="icon-"],
.clients .flex-direction-nav [class*=" icon-"] {
    color: <?php echo omni_option('general_carclients_navarrow'); ?>;
}
.clients:hover .flex-next:hover, 
.clients:hover .flex-prev:hover {
    border-color: <?php echo omni_option('general_carclients_navborder_hover'); ?>;
    background-color: <?php echo omni_option('general_carclients_navbg_hover'); ?>;
}
.clients .flex-direction-nav a:hover [class^="icon-"],
.clients .flex-direction-nav a:hover [class*=" icon-"] {
    color: <?php echo omni_option('general_carclients_navarrow_hover'); ?>;
}

/*
 *
 * All Presets
 *
 */
 
.page.green-bg {
	background-color: <?php echo omni_option('preset_background_green'); ?>;
}
.page.dark-bg {
	background-color: <?php echo omni_option('preset_background_dark'); ?>;
}
.page.red-bg {
	background-color: <?php echo omni_option('preset_background_red'); ?>;
}
.page.blue-bg {
	background-color: <?php echo omni_option('preset_background_blue'); ?>;
}
.page.grey-bg {
	background-color: <?php echo omni_option('preset_background_grey'); ?>;
}
.page.lightgrey-bg {
	background-color: <?php echo omni_option('preset_background_lightgrey'); ?>;
}

/*
 *
 * Bottom Arrows
 *
 */
.page.green-bg.bottom-arrow:after {
	border-top-color: <?php echo omni_option('preset_bottom_arrow_green'); ?>;
}
.page.dark-bg.bottom-arrow:after {
	border-top-color: <?php echo omni_option('preset_bottom_arrow_dark'); ?>;
}
.page.red-bg.bottom-arrow:after {
	border-top-color: <?php echo omni_option('preset_bottom_arrow_red'); ?>;
}
.page.blue-bg.bottom-arrow:after {
	border-top-color: <?php echo omni_option('preset_bottom_arrow_blue'); ?>;
}
.page.grey-bg.bottom-arrow:after {
	border-top-color: <?php echo omni_option('preset_bottom_arrow_grey'); ?>;
}
.page.lightgrey-bg.bottom-arrow:after {
	border-top-color: <?php echo omni_option('preset_bottom_arrow_lightgrey'); ?>;
}



/*
 *
 * Font Colors
 *
 */
/* green */
.page.green-bg h1, .page.green-bg h2, .page.green-bg h3, .page.green-bg h4, .page.green-bg h5, .page.green-bg h6 {
	color: <?php echo omni_option('preset_title_green'); ?>;
}
.page.green-bg {
	color: <?php echo omni_option('preset_paragraph_green'); ?>;
}

/* dark */
.page.dark-bg h1, .page.dark-bg h2, .page.dark-bg h3, .page.dark-bg h4, .page.dark-bg h5, .page.dark-bg h6 {
	color: <?php echo omni_option('preset_title_dark'); ?>;
}
.page.dark-bg {
	color: <?php echo omni_option('preset_paragraph_dark'); ?>;
}

/* red */
.page.red-bg h1, .page.red-bg h2, .page.red-bg h3, .page.red-bg h4, .page.red-bg h5, .page.red-bg h6 {
	color: <?php echo omni_option('preset_title_red'); ?>;
}
.page.red-bg {
	color: <?php echo omni_option('preset_paragraph_red'); ?>;
}

/* red */
.page.blue-bg h1, .page.blue-bg h2, .page.blue-bg h3, .page.blue-bg h4, .page.blue-bg h5, .page.blue-bg h6 {
	color: <?php echo omni_option('preset_title_blue'); ?>;
}
.page.blue-bg {
	color: <?php echo omni_option('preset_paragraph_blue'); ?>;
}

/* grey */
.page.grey-bg h1, .page.grey-bg h2, .page.grey-bg h3, .page.grey-bg h4, .page.grey-bg h5, .page.grey-bg h6 {
	color: <?php echo omni_option('preset_title_grey'); ?>;
}
.page.grey-bg {
	color: <?php echo omni_option('preset_paragraph_grey'); ?>;
}

/* lightgrey */
.page.lightgrey-bg h1, .page.lightgrey-bg h2, .page.lightgrey-bg h3, .page.lightgrey-bg h4, .page.lightgrey-bg h5, .page.lightgrey-bg h6 {
	color: <?php echo omni_option('preset_title_lightgrey'); ?>;
}
.page.lightgrey-bg {
	color: <?php echo omni_option('preset_paragraph_lightgrey'); ?>;
}

.page.blog-page p, .page.blog-page {
	color: <?php if (omni_option('general_color_body')) echo omni_option('general_color_body'); ?>;
}

<?php echo omni_option('styling_custom_css'); ?>