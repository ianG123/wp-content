<?php
	/*	
	*	Goodlayers Option
	*	---------------------------------------------------------------------
	*	This file store an array of theme options
	*	---------------------------------------------------------------------
	*/	

	// add custom css for theme option
	add_filter('gdlr_core_theme_option_top_file_write', 'seocrawler_gdlr_core_theme_option_top_file_write', 10, 2);
	if( !function_exists('seocrawler_gdlr_core_theme_option_top_file_write') ){
		function seocrawler_gdlr_core_theme_option_top_file_write( $css, $option_slug ){
			if( $option_slug != 'goodlayers_main_menu' ) return;

			ob_start();
?>
.seocrawler-body h1, .seocrawler-body h2, .seocrawler-body h3, .seocrawler-body h4, .seocrawler-body h5, .seocrawler-body h6{ margin-top: 0px; margin-bottom: 20px; line-height: 1.2; font-weight: 700; }
#poststuff .gdlr-core-page-builder-body h2{ padding: 0px; margin-bottom: 20px; line-height: 1.2; font-weight: 700; }
#poststuff .gdlr-core-page-builder-body h1{ padding: 0px; font-weight: 700; }

.gdlr-core-blog-info-wrapper .gdlr-core-head{ vertical-align: baseline; line-height: inherit; }
.gdlr-core-block-item-title-wrap.gdlr-core-left-align .gdlr-core-block-item-title-inner{ margin-bottom: 15px; }
.gdlr-core-center-align .gdlr-core-title-item-title i{ margin-right: 10px; }
.gdlr-core-column-service-item .gdlr-core-column-service-read-more{ font-size: 14px; font-style: normal; display: inline-block; font-weight: 600; }
.gdlr-core-input-wrap input[type="button"], .gdlr-core-input-wrap input[type="submit"], .gdlr-core-input-wrap input[type="reset"]{ font-size: 16px; font-weight: 600; letter-spacing: 0; text-transform: none; }
.gdlr-core-button{ font-size: 16px; font-weight: 600; text-transform: none; letter-spacing: 0; }
.gdlr-core-block-item-title-wrap .gdlr-core-block-item-title{ font-weight: 500; letter-spacing: 0px; }
.gdlr-core-block-item-title-wrap .gdlr-core-block-item-caption{ letter-spacing: 0; }
.gdlr-core-call-to-action-item .gdlr-core-call-to-action-item-title{ font-weight: 600; letter-spacing: 0px; }
h3.gdlr-core-portfolio-single-related-head.gdlr-core-item-pdlr{ font-weight: 500; font-size: 26px; }
.gdlr-core-portfolio-single-related h3.gdlr-core-portfolio-title.gdlr-core-skin-title{ text-transform: none; letter-spacing: 0; text-align: center; }
.gdlr-core-flexslider-nav.gdlr-core-plain-style li a{ font-size: 34px; }
.gdlr-core-input-wrap.gdlr-core-full-width input:not([type="button"]):not([type="reset"]):not([type="submit"]):not([type="file"]):not([type="checkbox"]):not([type="radio"]),  .gdlr-core-input-wrap.gdlr-core-full-width textarea{ margin-bottom: 20px; }
.gdlr-core-testimonial-item h3.gdlr-core-block-item-title{ font-weight: 500; }
.gdlr-core-testimonial-item .gdlr-core-testimonial-title{ font-size: 17px; font-weight: 600; text-transform: none; letter-spacing: 0px; }
.gdlr-core-testimonial-item .gdlr-core-testimonial-position{ font-size: 14px; font-style: normal; }
.gdlr-core-price-table .gdlr-core-price-table-price{ padding: 40px 20px 40px; }
.gdlr-core-price-table.gdlr-core-active .gdlr-core-price-table-price{ padding: 52px 20px 50px; }
.gdlr-core-price-table-item.gdlr-core-style-2 .gdlr-core-price-table-head{ text-align: center; }
.gdlr-core-price-table-item.gdlr-core-style-2 .gdlr-core-price-table-price{ text-align: center; padding: 0px 35px 10px; }
.gdlr-core-price-table-item.gdlr-core-style-2 .gdlr-core-price-table{ border-width: 1px; border-style: solid; box-shadow: none; -webkit-box-shadow: none; }
.gdlr-core-price-table-item.gdlr-core-style-2 .gdlr-core-price-table.gdlr-core-active { box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.2); -moz-box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.2); -webkit-box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.2); }

.gdlr-core-product-item.woocommerce .gdlr-core-product-thumbnail-info > a{ font-size: 11px; font-weight: 700; }

.gdlr-core-custom-menu-widget .gdlr-core-nav-side-text.gdlr-core-with-bg{ padding: 1px 8px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; vertical-align: text-top; text-transform: none; color: #fff; }
.gdlr-core-custom-menu-widget .gdlr-core-nav-side-text{ margin-left: 10px; }
.gdlr-core-custom-menu-widget.gdlr-core-menu-style-plain a{ border-color: transparent; border-bottom-width: 1px; border-bottom-style: solid; }

.wp-block-image .alignleft{ margin-right: 2em; }
ul.wp-block-gallery{ margin-left: 0; }
ul.gdlr-core-custom-menu-widget.gdlr-core-menu-style-plain li{ margin-bottom: 15px; }
.gdlr-core-icon-list-item .gdlr-core-icon-list-caption{ margin-right: 30px; }
.gdlr-core-testimonial-item .gdlr-core-testimonial-frame{ padding: 35px 40px 50px; }
<?php
			$css .= ob_get_contents();
			ob_end_clean(); 

			return $css;
		}
	}
	add_filter('gdlr_core_theme_option_bottom_file_write', 'seocrawler_gdlr_core_theme_option_bottom_file_write', 10, 2);
	if( !function_exists('seocrawler_gdlr_core_theme_option_bottom_file_write') ){
		function seocrawler_gdlr_core_theme_option_bottom_file_write( $css, $option_slug ){
			if( $option_slug != 'goodlayers_main_menu' ) return;

			$general = get_option('seocrawler_general');

			if( !empty($general['item-padding']) ){
				$margin = 2 * intval(str_replace('px', '', $general['item-padding']));
				if( !empty($margin) && is_numeric($margin) ){
					$css .= '.seocrawler-item-mgb, .gdlr-core-item-mgb{ margin-bottom: ' . $margin . 'px; }';

					$margin -= 1;
					$css .= '.seocrawler-body .gdlr-core-testimonial-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport, '; 
					$css .= '.seocrawler-body .gdlr-core-personnel-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport, '; 
					$css .= '.seocrawler-body .gdlr-core-hover-box-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport,'; 
					$css .= '.seocrawler-body .gdlr-core-portfolio-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport, '; 
					$css .= '.seocrawler-body .gdlr-core-blog-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport{ '; 
					$css .= 'padding-top: ' . $margin . 'px; margin-top: -' . $margin . 'px; padding-right: ' . $margin . 'px; margin-right: -' . $margin . 'px; ';
					$css .= 'padding-left: ' . $margin . 'px; margin-left: -' . $margin . 'px; padding-bottom: ' . $margin . 'px; margin-bottom: -' . $margin . 'px; ';
					$css .= '}';
				}
			}

			if( !empty($general['enable-slidebar-on-main-navigation-sticky']) && $general['enable-slidebar-on-main-navigation-sticky'] == 'disable' ){
				$css .= '.seocrawler-fixed-navigation .seocrawler-navigation-slide-bar{ display: none; }';
			}

			return $css;
		}
	}

	$seocrawler_admin_option->add_element(array(
	
		// general head section
		'title' => esc_html__('General', 'seocrawler'),
		'slug' => 'seocrawler_general',
		'icon' => get_template_directory_uri() . '/include/options/images/general.png',
		'options' => array(
		
			'layout' => array(
				'title' => esc_html__('Layout', 'seocrawler'),
				'options' => array(
					
					'layout' => array(
						'title' => esc_html__('Layout', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'full' => esc_html__('Full', 'seocrawler'),
							'boxed' => esc_html__('Boxed', 'seocrawler'),
						)
					),
					'boxed-layout-top-margin' => array(
						'title' => esc_html__('Box Layout Top/Bottom Margin', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '150',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => 'body.seocrawler-boxed .seocrawler-body-wrapper{ margin-top: #gdlr#; margin-bottom: #gdlr#; }',
						'condition' => array( 'layout' => 'boxed' ) 
					),
					'boxed-layout-border-radius' => array(
						'title' => esc_html__('Box Layout Border Radius', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '10',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => 'body.seocrawler-boxed .seocrawler-body-wrapper{ overflow: hidden; border-radius: #gdlr#; -moz-border-radius: #gdlr#; -webkit-border-radius: #gdlr#; }',
						'condition' => array( 'layout' => 'boxed' ) 
					),
					'body-margin' => array(
						'title' => esc_html__('Body Magin ( Frame Spaces )', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => '.seocrawler-body-wrapper.seocrawler-with-frame, body.seocrawler-full .seocrawler-fixed-footer{ margin: #gdlr#; }',
						'condition' => array( 'layout' => 'full' ),
						'description' => esc_html__('This value will be automatically omitted for side header style.', 'seocrawler'),
					),
					'background-type' => array(
						'title' => esc_html__('Background Type', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'color' => esc_html__('Color', 'seocrawler'),
							'image' => esc_html__('Image', 'seocrawler'),
							'pattern' => esc_html__('Pattern', 'seocrawler'),
						),
						'condition' => array( 'layout' => 'boxed' )
					),
					'background-image' => array(
						'title' => esc_html__('Background Image', 'seocrawler'),
						'type' => 'upload',
						'data-type' => 'file', 
						'selector' => '.seocrawler-body-background{ background-image: url(#gdlr#); }',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'image' )
					),
					'background-image-opacity' => array(
						'title' => esc_html__('Background Image Opacity', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '100',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'image' ),
						'selector' => '.seocrawler-body-background{ opacity: #gdlr#; }'
					),
					'background-pattern' => array(
						'title' => esc_html__('Background Type', 'seocrawler'),
						'type' => 'radioimage',
						'data-type' => 'text',
						'options' => 'pattern', 
						'selector' => '.seocrawler-background-pattern .seocrawler-body-outer-wrapper{ background-image: url(' . GDLR_CORE_URL . '/include/images/pattern/#gdlr#.png); }',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'pattern' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'enable-boxed-border' => array(
						'title' => esc_html__('Enable Boxed Border', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'pattern' ),
					),
					'item-padding' => array(
						'title' => esc_html__('Item Left/Right Spaces', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '40',
						'data-type' => 'pixel',
						'default' => '15px',
						'description' => 'Space between each page items',
						'selector' => '.seocrawler-item-pdlr, .gdlr-core-item-pdlr{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.seocrawler-item-rvpdlr, .gdlr-core-item-rvpdlr{ margin-left: -#gdlr#; margin-right: -#gdlr#; }' .
							'.gdlr-core-metro-rvpdlr{ margin-top: -#gdlr#; margin-right: -#gdlr#; margin-bottom: -#gdlr#; margin-left: -#gdlr#; }' .
							'.seocrawler-item-mglr, .gdlr-core-item-mglr, .seocrawler-navigation .sf-menu > .seocrawler-mega-menu .sf-mega{ margin-left: #gdlr#; margin-right: #gdlr#; }'
					),
					'container-width' => array(
						'title' => esc_html__('Container Width', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '1180px',
						'selector' => '.seocrawler-container, .gdlr-core-container, body.seocrawler-boxed .seocrawler-body-wrapper, ' . 
							'body.seocrawler-boxed .seocrawler-fixed-footer .seocrawler-footer-wrapper, body.seocrawler-boxed .seocrawler-fixed-footer .seocrawler-copyright-wrapper{ max-width: #gdlr#; }' 
					),
					'container-padding' => array(
						'title' => esc_html__('Container Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.seocrawler-body-front .gdlr-core-container, .seocrawler-body-front .seocrawler-container{ padding-left: #gdlr#; padding-right: #gdlr#; }'  . 
							'.seocrawler-body-front .seocrawler-container .seocrawler-container, .seocrawler-body-front .seocrawler-container .gdlr-core-container, '.
							'.seocrawler-body-front .gdlr-core-container .gdlr-core-container{ padding-left: 0px; padding-right: 0px; }'
					),
					'sidebar-width' => array(
						'title' => esc_html__('Sidebar Width', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'30' => '50%', '20' => '33.33%', '15' => '25%', '12' => '20%', '10' => '16.67%'
						),
						'default' => 20,
					),
					'both-sidebar-width' => array(
						'title' => esc_html__('Both Sidebar Width', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'30' => '50%', '20' => '33.33%', '15' => '25%', '12' => '20%', '10' => '16.67%'
						),
						'default' => 15,
					),
					
				) // header-options
			), // header-nav

			'top-bar' => array(
				'title' => esc_html__('Top Bar', 'seocrawler'),
				'options' => array(

					'enable-top-bar' => array(
						'title' => esc_html__('Enable Top Bar', 'seocrawler'),
						'type' => 'checkbox',
					),
					'enable-top-bar-on-mobile' => array(
						'title' => esc_html__('Enable Top Bar On Mobile', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'top-bar-width' => array(
						'title' => esc_html__('Top Bar Width', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'boxed' => esc_html__('Boxed ( Within Container )', 'seocrawler'),
							'full' => esc_html__('Full', 'seocrawler'),
							'custom' => esc_html__('Custom', 'seocrawler'),
						),
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-width-pixel' => array(
						'title' => esc_html__('Top Bar Width Pixel', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'default' => '1140px',
						'condition' => array( 'enable-top-bar' => 'enable', 'top-bar-width' => 'custom' ),
						'selector' => '.seocrawler-top-bar-container.seocrawler-top-bar-custom-container{ max-width: #gdlr#; }'
					),
					'top-bar-full-side-padding' => array(
						'title' => esc_html__('Top Bar Full ( Left/Right ) Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.seocrawler-top-bar-container.seocrawler-top-bar-full{ padding-right: #gdlr#; padding-left: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable', 'top-bar-width' => 'full' )
					),
					'top-bar-left-text' => array(
						'title' => esc_html__('Top Bar Left Text', 'seocrawler'),
						'type' => 'textarea',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-right-text' => array(
						'title' => esc_html__('Top Bar Right Text', 'seocrawler'),
						'type' => 'textarea',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-top-padding' => array(
						'title' => esc_html__('Top Bar Top Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
 						'default' => '10px',
						'selector' => '.seocrawler-top-bar{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-bottom-padding' => array(
						'title' => esc_html__('Top Bar Bottom Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '10px',
						'selector' => '.seocrawler-top-bar{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-text-size' => array(
						'title' => esc_html__('Top Bar Text Size', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.seocrawler-top-bar{ font-size: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-bottom-border' => array(
						'title' => esc_html__('Top Bar Bottom Border', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '10',
						'default' => '0',
						'selector' => '.seocrawler-top-bar{ border-bottom-width: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),

				)
			), // top bar

			'top-bar-social' => array(
				'title' => esc_html__('Top Bar Social', 'seocrawler'),
				'options' => array(
					'enable-top-bar-social' => array(
						'title' => esc_html__('Enable Top Bar Social', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'top-bar-social-delicious' => array(
						'title' => esc_html__('Top Bar Social Delicious Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-email' => array(
						'title' => esc_html__('Top Bar Social Email Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-deviantart' => array(
						'title' => esc_html__('Top Bar Social Deviantart Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-digg' => array(
						'title' => esc_html__('Top Bar Social Digg Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-facebook' => array(
						'title' => esc_html__('Top Bar Social Facebook Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-flickr' => array(
						'title' => esc_html__('Top Bar Social Flickr Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-google-plus' => array(
						'title' => esc_html__('Top Bar Social Google Plus Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-lastfm' => array(
						'title' => esc_html__('Top Bar Social Lastfm Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-linkedin' => array(
						'title' => esc_html__('Top Bar Social Linkedin Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-pinterest' => array(
						'title' => esc_html__('Top Bar Social Pinterest Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-rss' => array(
						'title' => esc_html__('Top Bar Social RSS Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-skype' => array(
						'title' => esc_html__('Top Bar Social Skype Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-stumbleupon' => array(
						'title' => esc_html__('Top Bar Social Stumbleupon Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-tumblr' => array(
						'title' => esc_html__('Top Bar Social Tumblr Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-twitter' => array(
						'title' => esc_html__('Top Bar Social Twitter Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-vimeo' => array(
						'title' => esc_html__('Top Bar Social Vimeo Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-youtube' => array(
						'title' => esc_html__('Top Bar Social Youtube Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-instagram' => array(
						'title' => esc_html__('Top Bar Social Instagram Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-snapchat' => array(
						'title' => esc_html__('Top Bar Social Snapchat Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),

				)
			),			

			'header' => array(
				'title' => esc_html__('Header', 'seocrawler'),
				'options' => array(

					'header-style' => array(
						'title' => esc_html__('Header Style', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'plain' => esc_html__('Plain', 'seocrawler'),
							'bar' => esc_html__('Bar', 'seocrawler'),
							'boxed' => esc_html__('Boxed', 'seocrawler'),
							'side' => esc_html__('Side Menu', 'seocrawler'),
							'side-toggle' => esc_html__('Side Menu Toggle', 'seocrawler'),
						),
						'default' => 'plain',
					),
					'header-plain-style' => array(
						'title' => esc_html__('Header Plain Style', 'seocrawler'),
						'type' => 'radioimage',
						'options' => array(
							'menu-right' => get_template_directory_uri() . '/images/header/plain-menu-right.jpg',
							'center-logo' => get_template_directory_uri() . '/images/header/plain-center-logo.jpg',
							'center-menu' => get_template_directory_uri() . '/images/header/plain-center-menu.jpg',
							'splitted-menu' => get_template_directory_uri() . '/images/header/plain-splitted-menu.jpg',
						),
						'default' => 'menu-right',
						'condition' => array( 'header-style' => 'plain' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-plain-bottom-border' => array(
						'title' => esc_html__('Plain Header Bottom Border', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '10',
						'default' => '0',
						'selector' => '.seocrawler-header-style-plain{ border-bottom-width: #gdlr#; }',
						'condition' => array( 'header-style' => array('plain') )
					),
					'header-bar-navigation-align' => array(
						'title' => esc_html__('Header Bar Style', 'seocrawler'),
						'type' => 'radioimage',
						'options' => array(
							'left' => get_template_directory_uri() . '/images/header/bar-left.jpg',
							'center' => get_template_directory_uri() . '/images/header/bar-center.jpg',
							'center-logo' => get_template_directory_uri() . '/images/header/bar-center-logo.jpg',
						),
						'default' => 'center',
						'condition' => array( 'header-style' => 'bar' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-background-style' => array(
						'title' => esc_html__('Header/Navigation Background Style', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'solid' => esc_html__('Solid', 'seocrawler'),
							'transparent' => esc_html__('Transparent', 'seocrawler'),
						),
						'default' => 'solid',
						'condition' => array( 'header-style' => array('plain', 'bar') )
					),
					'top-bar-background-opacity' => array(
						'title' => esc_html__('Top Bar Background Opacity', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'plain', 'header-background-style' => 'transparent' ),
						'selector' => '.seocrawler-header-background-transparent .seocrawler-top-bar-background{ opacity: #gdlr#; }'
					),
					'header-background-opacity' => array(
						'title' => esc_html__('Header Background Opacity', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'plain', 'header-background-style' => 'transparent' ),
						'selector' => '.seocrawler-header-background-transparent .seocrawler-header-background{ opacity: #gdlr#; }'
					),
					'navigation-background-opacity' => array(
						'title' => esc_html__('Navigation Background Opacity', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'bar', 'header-background-style' => 'transparent' ),
						'selector' => '.seocrawler-navigation-bar-wrap.seocrawler-style-transparent .seocrawler-navigation-background{ opacity: #gdlr#; }'
					),
					'header-boxed-style' => array(
						'title' => esc_html__('Header Boxed Style', 'seocrawler'),
						'type' => 'radioimage',
						'options' => array(
							'menu-right' => get_template_directory_uri() . '/images/header/boxed-menu-right.jpg',
							'center-menu' => get_template_directory_uri() . '/images/header/boxed-center-menu.jpg',
							'splitted-menu' => get_template_directory_uri() . '/images/header/boxed-splitted-menu.jpg',
						),
						'default' => 'menu-right',
						'condition' => array( 'header-style' => 'boxed' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'boxed-top-bar-background-opacity' => array(
						'title' => esc_html__('Top Bar Background Opacity', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '0',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.seocrawler-header-boxed-wrap .seocrawler-top-bar-background{ opacity: #gdlr#; }'
					),
					'boxed-top-bar-background-extend' => array(
						'title' => esc_html__('Top Bar Background Extend ( Bottom )', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0px',
						'data-max' => '200px',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.seocrawler-header-boxed-wrap .seocrawler-top-bar-background{ margin-bottom: -#gdlr#; }'
					),
					'boxed-header-top-margin' => array(
						'title' => esc_html__('Header Top Margin', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0px',
						'data-max' => '200px',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.seocrawler-header-style-boxed{ margin-top: #gdlr#; }'
					),
					'header-side-style' => array(
						'title' => esc_html__('Header Side Style', 'seocrawler'),
						'type' => 'radioimage',
						'options' => array(
							'top-left' => get_template_directory_uri() . '/images/header/side-top-left.jpg',
							'middle-left' => get_template_directory_uri() . '/images/header/side-middle-left.jpg',
							'middle-left-2' => get_template_directory_uri() . '/images/header/side-middle-left-2.jpg',
							'top-right' => get_template_directory_uri() . '/images/header/side-top-right.jpg',
							'middle-right' => get_template_directory_uri() . '/images/header/side-middle-right.jpg',
							'middle-right-2' => get_template_directory_uri() . '/images/header/side-middle-right-2.jpg',
						),
						'default' => 'top-left',
						'condition' => array( 'header-style' => 'side' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-side-align' => array(
						'title' => esc_html__('Header Side Text Align', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left',
						'condition' => array( 'header-style' => 'side' )
					),
					'header-side-toggle-style' => array(
						'title' => esc_html__('Header Side Toggle Style', 'seocrawler'),
						'type' => 'radioimage',
						'options' => array(
							'left' => get_template_directory_uri() . '/images/header/side-toggle-left.jpg',
							'right' => get_template_directory_uri() . '/images/header/side-toggle-right.jpg',
						),
						'default' => 'left',
						'condition' => array( 'header-style' => 'side-toggle' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-side-toggle-menu-type' => array(
						'title' => esc_html__('Header Side Toggle Menu Type', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left Slide Menu', 'seocrawler'),
							'right' => esc_html__('Right Slide Menu', 'seocrawler'),
							'overlay' => esc_html__('Overlay Menu', 'seocrawler'),
						),
						'default' => 'overlay',
						'condition' => array( 'header-style' => 'side-toggle' )
					),
					'header-side-toggle-display-logo' => array(
						'title' => esc_html__('Display Logo', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'header-style' => 'side-toggle' )
					),
					'header-width' => array(
						'title' => esc_html__('Header Width', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'boxed' => esc_html__('Boxed ( Within Container )', 'seocrawler'),
							'full' => esc_html__('Full', 'seocrawler'),
							'custom' => esc_html__('Custom', 'seocrawler'),
						),
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'))
					),
					'header-width-pixel' => array(
						'title' => esc_html__('Header Width Pixel', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'default' => '1140px',
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'), 'header-width' => 'custom'),
						'selector' => '.seocrawler-header-container.seocrawler-header-custom-container{ max-width: #gdlr#; }'
					),
					'header-full-side-padding' => array(
						'title' => esc_html__('Header Full ( Left/Right ) Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.seocrawler-header-container.seocrawler-header-full{ padding-right: #gdlr#; padding-left: #gdlr#; }',
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'), 'header-width'=>'full')
					),
					'boxed-header-frame-radius' => array(
						'title' => esc_html__('Header Frame Radius', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '3px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.seocrawler-header-boxed-wrap .seocrawler-header-background{ border-radius: #gdlr#; -moz-border-radius: #gdlr#; -webkit-border-radius: #gdlr#; }'
					),
					'boxed-header-content-padding' => array(
						'title' => esc_html__('Header Content ( Left/Right ) Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '30px',
						'selector' => '.seocrawler-header-style-boxed .seocrawler-header-container-item{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.seocrawler-navigation-right{ right: #gdlr#; } .seocrawler-navigation-left{ left: #gdlr#; }',
						'condition' => array( 'header-style' => 'boxed' )
					),
					'navigation-text-top-margin' => array(
						'title' => esc_html__('Navigation Text Top Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '0px',
						'condition' => array( 'header-style' => 'plain', 'header-plain-style' => 'splitted-menu' ),
						'selector' => '.seocrawler-header-style-plain.seocrawler-style-splitted-menu .seocrawler-navigation .sf-menu > li > a{ padding-top: #gdlr#; } ' .
							'.seocrawler-header-style-plain.seocrawler-style-splitted-menu .seocrawler-main-menu-left-wrap,' .
							'.seocrawler-header-style-plain.seocrawler-style-splitted-menu .seocrawler-main-menu-right-wrap{ padding-top: #gdlr#; }'
					),
					'navigation-text-top-margin-boxed' => array(
						'title' => esc_html__('Navigation Text Top Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed', 'header-boxed-style' => 'splitted-menu' ),
						'selector' => '.seocrawler-header-style-boxed.seocrawler-style-splitted-menu .seocrawler-navigation .sf-menu > li > a{ padding-top: #gdlr#; } ' .
							'.seocrawler-header-style-boxed.seocrawler-style-splitted-menu .seocrawler-main-menu-left-wrap,' .
							'.seocrawler-header-style-boxed.seocrawler-style-splitted-menu .seocrawler-main-menu-right-wrap{ padding-top: #gdlr#; }'
					),
					'navigation-text-side-spacing' => array(
						'title' => esc_html__('Navigation Text Right Spaces', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '60',
						'data-type' => 'pixel',
						'default' => '13px',
						'selector' => '.seocrawler-navigation .sf-menu > li{ padding-right: #gdlr#; }',
						'condition' => array( 'header-style' => array('plain', 'bar', 'boxed') )
					),
					'navigation-slide-bar' => array(
						'title' => esc_html__('Navigation Slide Bar', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'disable' => esc_html__('Disable', 'seocrawler'),
							'enable' => esc_html__('Left Bar', 'seocrawler'),
							'dot' => esc_html__('Dot Style', 'seocrawler'),
						),
						'default' => 'enable',
						'condition' => array( 'header-style' => array('plain', 'bar', 'boxed') )
					),
					'navigation-slide-bar-top-margin' => array(
						'title' => esc_html__('Navigation Slide Bar Top Margin', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '',
						'selector' => '.seocrawler-navigation .seocrawler-navigation-slide-bar.seocrawler-style-dot{ margin-top: #gdlr#; }',
						'condition' => array( 'header-style' => array('plain', 'bar', 'boxed'), 'navigation-slide-bar' => array('dot') )
					),
					'side-header-width-pixel' => array(
						'title' => esc_html__('Header Width Pixel', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '600',
						'default' => '340px',
						'condition' => array('header-style' => array('side', 'side-toggle')),
						'selector' => '.seocrawler-header-side-nav{ width: #gdlr#; }' . 
							'.seocrawler-header-side-content.seocrawler-style-left{ margin-left: #gdlr#; }' .
							'.seocrawler-header-side-content.seocrawler-style-right{ margin-right: #gdlr#; }'
					),
					'side-header-side-padding' => array(
						'title' => esc_html__('Header Side Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '70px',
						'condition' => array('header-style' => 'side'),
						'selector' => '.seocrawler-header-side-nav.seocrawler-style-side{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.seocrawler-header-side-nav.seocrawler-style-left .sf-vertical > li > ul.sub-menu{ padding-left: #gdlr#; }' .
							'.seocrawler-header-side-nav.seocrawler-style-right .sf-vertical > li > ul.sub-menu{ padding-right: #gdlr#; }'
					),
					'navigation-text-top-spacing' => array(
						'title' => esc_html__('Navigation Text Top / Bottom Spaces', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '40',
						'data-type' => 'pixel',
						'default' => '16px',
						'selector' => ' .seocrawler-navigation .sf-vertical > li{ padding-top: #gdlr#; padding-bottom: #gdlr#; }',
						'condition' => array( 'header-style' => array('side') )
					),
					'logo-right-text' => array(
						'title' => esc_html__('Header Right Text', 'seocrawler'),
						'type' => 'textarea',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-text-top-padding' => array(
						'title' => esc_html__('Header Right Text Top Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '30px',
						'condition' => array('header-style' => 'bar'),
						'selector' => '.seocrawler-header-style-bar .seocrawler-logo-right-text{ padding-top: #gdlr#; }'
					),

				)
			), // header
			
			'logo' => array(
				'title' => esc_html__('Logo', 'seocrawler'),
				'options' => array(
					'logo' => array(
						'title' => esc_html__('Logo', 'seocrawler'),
						'type' => 'upload'
					),
					'mobile-logo' => array(
						'title' => esc_html__('Mobile Logo', 'seocrawler'),
						'type' => 'upload',
						'description' => esc_html__('Leave this option blank to use the same logo.', 'seocrawler'),
					),
					'logo-top-padding' => array(
						'title' => esc_html__('Logo Top Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.seocrawler-logo{ padding-top: #gdlr#; }',
						'description' => esc_html__('This option will be omitted on splitted menu option.', 'seocrawler'),
					),
					'logo-bottom-padding' => array(
						'title' => esc_html__('Logo Bottom Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.seocrawler-logo{ padding-bottom: #gdlr#; }',
						'description' => esc_html__('This option will be omitted on splitted menu option.', 'seocrawler'),
					),
					'logo-left-padding' => array(
						'title' => esc_html__('Logo Left Padding', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.seocrawler-logo.seocrawler-item-pdlr{ padding-left: #gdlr#; }',
						'description' => esc_html__('Leave this field blank for default value.', 'seocrawler'),
					),
					'max-logo-width' => array(
						'title' => esc_html__('Max Logo Width', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '200px',
						'selector' => '.seocrawler-logo-inner{ max-width: #gdlr#; }'
					),
					'max-mobile-logo-width' => array(
						'title' => esc_html__('Max Mobile Logo Width', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 999px){ .seocrawler-mobile-header .seocrawler-logo-inner{ max-width: #gdlr#; } }'
					),
				
				)
			),
			'navigation' => array(
				'title' => esc_html__('Navigation', 'seocrawler'),
				'options' => array(
					'main-navigation-top-padding' => array(
						'title' => esc_html__('Main Navigation Top Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '25px',
						'selector' => '.seocrawler-navigation{ padding-top: #gdlr#; }' . 
							'.seocrawler-navigation-top{ top: #gdlr#; }'
					),
					'main-navigation-bottom-padding' => array(
						'title' => esc_html__('Main Navigation Bottom Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.seocrawler-navigation .sf-menu > li > a{ padding-bottom: #gdlr#; }'
					),
					'main-navigation-item-right-padding' => array(
						'title' => esc_html__('Main Navigation Item Right Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => '.seocrawler-navigation .seocrawler-main-menu{ padding-right: #gdlr#; }'
					),
					'main-navigation-right-padding' => array(
						'title' => esc_html__('Main Navigation Wrap Right Padding', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.seocrawler-navigation.seocrawler-item-pdlr{ padding-right: #gdlr#; }',
						'description' => esc_html__('Leave this field blank for default value.', 'seocrawler'),
					),
					'enable-main-navigation-submenu-indicator' => array(
						'title' => esc_html__('Enable Main Navigation Submenu Indicator', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable',
					),
					'main-navigation-icon-size' => array(
						'title' => esc_html__('Main Navigation Icon Size (search/cart)', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel', 
						'selector' => '.seocrawler-main-menu-search i, .seocrawler-main-menu-cart i{ font-size: #gdlr#; }',
					),
					'enable-main-navigation-search' => array(
						'title' => esc_html__('Enable Main Navigation Search', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'main-navigation-search-icon' => array(
						'title' => esc_html__('Main Navigation Search Icon', 'seocrawler'),
						'type' => 'text',
						'default' => 'fa fa-search',
						'condition' => array('enable-main-navigation-search' => 'enable')
					),
					'main-navigation-search-icon-top-margin' => array(
						'title' => esc_html__('Main Navigation Search Icon Top Margin', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.seocrawler-main-menu-search{ margin-top: #gdlr#; }',
						'condition' => array('enable-main-navigation-search' => 'enable')
					),
					'mobile-main-navigation-search-icon-top-margin' => array(
						'title' => esc_html__('Mobile Main Navigation Search Icon Top Margin', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 999px){ .seocrawler-main-menu-search{ margin-top: #gdlr#; } }'
					),
					'enable-main-navigation-cart' => array(
						'title' => esc_html__('Enable Main Navigation Cart ( Woocommerce )', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
						'description' => esc_html__('The icon only shows if the woocommerce plugin is activated', 'seocrawler')
					),
					'main-navigation-cart-icon' => array(
						'title' => esc_html__('Main Navigation Cart Icon', 'seocrawler'),
						'type' => 'text',
						'default' => 'fa fa-shopping-cart',
						'condition' => array('enable-main-navigation-search' => 'enable')
					),
					'main-navigation-cart-icon-top-margin' => array(
						'title' => esc_html__('Main Navigation Cart Icon Top Margin', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel', 
						'selector' => '.seocrawler-main-menu-cart{ margin-top: #gdlr#; }',
						'condition' => array('enable-main-navigation-search' => 'enable')
					),
					'mobile-main-navigation-cart-icon-top-margin' => array(
						'title' => esc_html__('Mobile Main Navigation Cart Icon Top Margin', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 999px){ .seocrawler-main-menu-cart{ margin-top: #gdlr#; } }'
					),
					'enable-main-navigation-right-button' => array(
						'title' => esc_html__('Enable Main Navigation Right Button', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable',
						'description' => esc_html__('This option will be ignored on header side style', 'seocrawler')
					),
					'main-navigation-right-button-text' => array(
						'title' => esc_html__('Main Navigation Right Button Text', 'seocrawler'),
						'type' => 'text',
						'default' => esc_html__('Buy Now', 'seocrawler'),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-link' => array(
						'title' => esc_html__('Main Navigation Right Button Link', 'seocrawler'),
						'type' => 'text',
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-link-target' => array(
						'title' => esc_html__('Main Navigation Right Button Link Target', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'_self' => esc_html__('Current Screen', 'seocrawler'),
							'_blank' => esc_html__('New Window', 'seocrawler'),
						),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-left-margin' => array(
						'title' => esc_html__('Main Navigation Right Button Left Margin', 'seocrawler'),
						'type' => 'text',
						'data-input-type' => 'pixel',
						'data-type' => 'pixel',
						'selector' => '.seocrawler-main-menu-right-button{ margin-left: #gdlr#; }',
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'right-menu-type' => array(
						'title' => esc_html__('Secondary/Mobile Menu Type', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left Slide Menu', 'seocrawler'),
							'right' => esc_html__('Right Slide Menu', 'seocrawler'),
							'overlay' => esc_html__('Overlay Menu', 'seocrawler'),
						),
						'default' => 'right'
					),
					'right-menu-style' => array(
						'title' => esc_html__('Secondary/Mobile Menu Style', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'hamburger-with-border' => esc_html__('Hamburger With Border', 'seocrawler'),
							'hamburger' => esc_html__('Hamburger', 'seocrawler'),
						),
						'default' => 'hamburger-with-border'
					),
					
				) // logo-options
			), // logo-navigation			
			
			'fixed-navigation' => array(
				'title' => esc_html__('Fixed Navigation', 'seocrawler'),
				'options' => array(

					'enable-main-navigation-sticky' => array(
						'title' => esc_html__('Enable Fixed Navigation Bar', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'enable-logo-on-main-navigation-sticky' => array(
						'title' => esc_html__('Enable Logo on Fixed Navigation Bar', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' )
					),
					'enable-slidebar-on-main-navigation-sticky' => array(
						'title' => esc_html__('Enable Slide Bar on Fixed Navigation Bar', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' )
					),
					'fixed-navigation-max-logo-width' => array(
						'title' => esc_html__('Fixed Navigation Max Logo Width', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.seocrawler-fixed-navigation.seocrawler-style-slide .seocrawler-logo-inner img{ max-height: none !important; }' .
							'.seocrawler-animate-fixed-navigation.seocrawler-header-style-plain .seocrawler-logo-inner, ' . 
							'.seocrawler-animate-fixed-navigation.seocrawler-header-style-boxed .seocrawler-logo-inner{ max-width: #gdlr#; }'
					),
					'fixed-navigation-logo-top-padding' => array(
						'title' => esc_html__('Fixed Navigation Logo Top Padding', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '20px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.seocrawler-animate-fixed-navigation.seocrawler-header-style-plain .seocrawler-logo, ' . 
							'.seocrawler-animate-fixed-navigation.seocrawler-header-style-boxed .seocrawler-logo{ padding-top: #gdlr#; }'
					),
					'fixed-navigation-logo-bottom-padding' => array(
						'title' => esc_html__('Fixed Navigation Logo Bottom Padding', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '20px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.seocrawler-animate-fixed-navigation.seocrawler-header-style-plain .seocrawler-logo, ' . 
							'.seocrawler-animate-fixed-navigation.seocrawler-header-style-boxed .seocrawler-logo{ padding-bottom: #gdlr#; }'
					),
					'fixed-navigation-top-padding' => array(
						'title' => esc_html__('Fixed Navigation Top Padding', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '30px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.seocrawler-animate-fixed-navigation.seocrawler-header-style-plain .seocrawler-navigation, ' . 
							'.seocrawler-animate-fixed-navigation.seocrawler-header-style-boxed .seocrawler-navigation{ padding-top: #gdlr#; }' . 
							'.seocrawler-animate-fixed-navigation.seocrawler-header-style-plain .seocrawler-navigation-top, ' . 
							'.seocrawler-animate-fixed-navigation.seocrawler-header-style-boxed .seocrawler-navigation-top{ top: #gdlr#; }'
					),
					'fixed-navigation-bottom-padding' => array(
						'title' => esc_html__('Fixed Navigation Bottom Padding', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '25px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.seocrawler-animate-fixed-navigation.seocrawler-header-style-plain .seocrawler-navigation .sf-menu > li > a, ' . 
							'.seocrawler-animate-fixed-navigation.seocrawler-header-style-boxed .seocrawler-navigation .sf-menu > li > a{ padding-bottom: #gdlr#; }'
					),
					'fixed-navigation-anchor-offset' => array(
						'title' => esc_html__('Fixed Navigation Anchor Offset ( Fixed Navigation Height )', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '75px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
					),

				)
			),

			'title-style' => array(
				'title' => esc_html__('Page Title Style', 'seocrawler'),
				'options' => array(

					'default-title-style' => array(
						'title' => esc_html__('Default Page Title Style', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'seocrawler'),
							'medium' => esc_html__('Medium', 'seocrawler'),
							'large' => esc_html__('Large', 'seocrawler'),
							'custom' => esc_html__('Custom', 'seocrawler'),
						),
						'default' => 'small'
					),
					'default-title-align' => array(
						'title' => esc_html__('Default Page Title Alignment', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left'
					),
					'default-title-divider' => array(
						'title' => esc_html__('Default Page Title Divider', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'default-title-top-padding' => array(
						'title' => esc_html__('Default Page Title Top Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '350',
						'default' => '93px',
						'selector' => '.seocrawler-page-title-wrap.seocrawler-style-custom .seocrawler-page-title-content{ padding-top: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-bottom-padding' => array(
						'title' => esc_html__('Default Page Title Bottom Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '350',
						'default' => '87px',
						'selector' => '.seocrawler-page-title-wrap.seocrawler-style-custom .seocrawler-page-title-content{ padding-bottom: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-page-caption-top-margin' => array(
						'title' => esc_html__('Default Page Caption Top Margin', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '13px',						
						'selector' => '.seocrawler-page-title-wrap.seocrawler-style-custom .seocrawler-page-caption{ margin-top: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-font-transform' => array(
						'title' => esc_html__('Default Page Title Font Transform', 'seocrawler'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'default' => esc_html__('Default', 'seocrawler'),
							'none' => esc_html__('None', 'seocrawler'),
							'uppercase' => esc_html__('Uppercase', 'seocrawler'),
							'lowercase' => esc_html__('Lowercase', 'seocrawler'),
							'capitalize' => esc_html__('Capitalize', 'seocrawler'),
						),
						'default' => 'default',
						'selector' => '.seocrawler-page-title-wrap .seocrawler-page-title{ text-transform: #gdlr#; }'
					),
					'default-title-font-size' => array(
						'title' => esc_html__('Default Page Title Font Size', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '37px',
						'selector' => '.seocrawler-page-title-wrap.seocrawler-style-custom .seocrawler-page-title{ font-size: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-font-weight' => array(
						'title' => esc_html__('Default Page Title Font Weight', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.seocrawler-page-title-wrap .seocrawler-page-title{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800. Leave this field blank for default value (700).', 'seocrawler')					
					),
					'default-title-letter-spacing' => array(
						'title' => esc_html__('Default Page Title Letter Spacing', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '20',
						'default' => '0px',
						'selector' => '.seocrawler-page-title-wrap.seocrawler-style-custom .seocrawler-page-title{ letter-spacing: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-caption-font-size' => array(
						'title' => esc_html__('Default Page Caption Font Size', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '16px',
						'selector' => '.seocrawler-page-title-wrap.seocrawler-style-custom .seocrawler-page-caption{ font-size: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-caption-font-weight' => array(
						'title' => esc_html__('Default Page Caption Font Weight', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.seocrawler-page-title-wrap .seocrawler-page-caption{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800. Leave this field blank for default value (400).', 'seocrawler')					
					),
					'default-caption-letter-spacing' => array(
						'title' => esc_html__('Default Page Caption Letter Spacing', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '20',
						'default' => '0px',
						'selector' => '.seocrawler-page-title-wrap.seocrawler-style-custom .seocrawler-page-caption{ letter-spacing: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-background-overlay-opacity' => array(
						'title' => esc_html__('Default Page Title Background Overlay Opacity', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '80',
						'selector' => '.seocrawler-page-title-wrap .seocrawler-page-title-overlay{ opacity: #gdlr#; }'
					),
				) 
			), // title style

			'title-background' => array(
				'title' => esc_html__('Page Title Background', 'seocrawler'),
				'options' => array(

					'default-title-background' => array(
						'title' => esc_html__('Default Page Title Background', 'seocrawler'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.seocrawler-page-title-wrap, body.single-product .seocrawler-header-background-transparent{ background-image: url(#gdlr#); }'
					),
					'default-portfolio-title-background' => array(
						'title' => esc_html__('Default Portfolio Title Background', 'seocrawler'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.single-portfolio .seocrawler-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-personnel-title-background' => array(
						'title' => esc_html__('Default Personnel Title Background', 'seocrawler'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.single-personnel .seocrawler-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-search-title-background' => array(
						'title' => esc_html__('Default Search Title Background', 'seocrawler'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.search .seocrawler-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-archive-title-background' => array(
						'title' => esc_html__('Default Archive Title Background', 'seocrawler'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.archive .seocrawler-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-404-background' => array(
						'title' => esc_html__('Default 404 Background', 'seocrawler'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.seocrawler-not-found-wrap .seocrawler-not-found-background{ background-image: url(#gdlr#); }'
					),
					'default-404-background-opacity' => array(
						'title' => esc_html__('Default 404 Background Opacity', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '27',
						'selector' => '.seocrawler-not-found-wrap .seocrawler-not-found-background{ opacity: #gdlr#; }'
					),

				) 
			), // title background

			'blog-title-style' => array(
				'title' => esc_html__('Blog Title Style', 'seocrawler'),
				'options' => array(

					'default-blog-title-style' => array(
						'title' => esc_html__('Default Blog Title Style', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'seocrawler'),
							'large' => esc_html__('Large', 'seocrawler'),
							'custom' => esc_html__('Custom', 'seocrawler'),
							'inside-content' => esc_html__('Inside Content', 'seocrawler'),
							'none' => esc_html__('None', 'seocrawler'),
						),
						'default' => 'small'
					),
					'default-blog-title-top-padding' => array(
						'title' => esc_html__('Default Blog Title Top Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '400',
						'default' => '93px',
						'selector' => '.seocrawler-blog-title-wrap.seocrawler-style-custom .seocrawler-blog-title-content{ padding-top: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => 'custom' )
					),
					'default-blog-title-bottom-padding' => array(
						'title' => esc_html__('Default Blog Title Bottom Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '400',
						'default' => '87px',
						'selector' => '.seocrawler-blog-title-wrap.seocrawler-style-custom .seocrawler-blog-title-content{ padding-bottom: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => 'custom' )
					),
					'default-blog-feature-image' => array(
						'title' => esc_html__('Default Blog Feature Image Location', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'content' => esc_html__('Inside Content', 'seocrawler'),
							'title-background' => esc_html__('Title Background', 'seocrawler'),
							'none' => esc_html__('None', 'seocrawler'),
						),
						'default' => 'content',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),
					'default-blog-title-background-image' => array(
						'title' => esc_html__('Default Blog Title Background Image', 'seocrawler'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.seocrawler-blog-title-wrap{ background-image: url(#gdlr#); }',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),
					'default-blog-title-background-overlay-opacity' => array(
						'title' => esc_html__('Default Blog Title Background Overlay Opacity', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '80',
						'selector' => '.seocrawler-blog-title-wrap .seocrawler-blog-title-overlay{ opacity: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),

				) 
			), // post title style			

			'blog-style' => array(
				'title' => esc_html__('Blog Style', 'seocrawler'),
				'options' => array(
					'blog-sidebar' => array(
						'title' => esc_html__('Single Blog Sidebar ( Default )', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'none',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'blog-sidebar-left' => array(
						'title' => esc_html__('Single Blog Sidebar Left ( Default )', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'blog-sidebar'=>array('left', 'both') )
					),
					'blog-sidebar-right' => array(
						'title' => esc_html__('Single Blog Sidebar Right ( Default )', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'blog-sidebar'=>array('right', 'both') )
					),
					'blog-max-content-width' => array(
						'title' => esc_html__('Single Blog Max Content Width ( No sidebar layout )', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'text',
						'data-input-type' => 'pixel',
						'default' => '900px',
						'selector' => 'body.single-post .seocrawler-sidebar-style-none, body.blog .seocrawler-sidebar-style-none{ max-width: #gdlr#; }'
					),
					'blog-thumbnail-size' => array(
						'title' => esc_html__('Single Blog Thumbnail Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
					'blog-date-feature' => array(
						'title' => esc_html__('Enable Blog Date Feature', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-date-feature-year' => array(
						'title' => esc_html__('Enable Year on Blog Date Feature', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable',
						'condition' => array( 'blog-date-feature' => 'enable' )
					),
					'meta-option' => array(
						'title' => esc_html__('Meta Option', 'seocrawler'),
						'type' => 'multi-combobox',
						'options' => array( 
							'date' => esc_html__('Date', 'seocrawler'),
							'author' => esc_html__('Author', 'seocrawler'),
							'category' => esc_html__('Category', 'seocrawler'),
							'tag' => esc_html__('Tag', 'seocrawler'),
							'comment' => esc_html__('Comment', 'seocrawler'),
							'comment-number' => esc_html__('Comment Number', 'seocrawler'),
						),
						'default' => array('author', 'category', 'tag', 'comment-number')
					),
					'blog-author' => array(
						'title' => esc_html__('Enable Single Blog Author', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-navigation' => array(
						'title' => esc_html__('Enable Single Blog Navigation', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'pagination-style' => array(
						'title' => esc_html__('Pagination Style', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'plain' => esc_html__('Plain', 'seocrawler'),
							'rectangle' => esc_html__('Rectangle', 'seocrawler'),
							'rectangle-border' => esc_html__('Rectangle Border', 'seocrawler'),
							'round' => esc_html__('Round', 'seocrawler'),
							'round-border' => esc_html__('Round Border', 'seocrawler'),
							'circle' => esc_html__('Circle', 'seocrawler'),
							'circle-border' => esc_html__('Circle Border', 'seocrawler'),
						),
						'default' => 'round'
					),
					'pagination-align' => array(
						'title' => esc_html__('Pagination Alignment', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'right'
					),
				) // blog-style-options
			), // blog-style-nav

			'blog-social-share' => array(
				'title' => esc_html__('Blog Social Share', 'seocrawler'),
				'options' => array(
					'blog-social-share' => array(
						'title' => esc_html__('Enable Single Blog Share', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-social-share-count' => array(
						'title' => esc_html__('Enable Single Blog Share Count', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-social-facebook' => array(
						'title' => esc_html__('Facebook', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-linkedin' => array(
						'title' => esc_html__('Linkedin', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable'
					),			
					'blog-social-google-plus' => array(
						'title' => esc_html__('Google Plus', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-pinterest' => array(
						'title' => esc_html__('Pinterest', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-stumbleupon' => array(
						'title' => esc_html__('Stumbleupon', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable'
					),			
					'blog-social-twitter' => array(
						'title' => esc_html__('Twitter', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-email' => array(
						'title' => esc_html__('Email', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
				) // blog-style-options
			), // blog-style-nav
			
			'search-archive' => array(
				'title' => esc_html__('Search/Archive', 'seocrawler'),
				'options' => array(
					'archive-blog-sidebar' => array(
						'title' => esc_html__('Archive Blog Sidebar', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'right',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-blog-sidebar-left' => array(
						'title' => esc_html__('Archive Blog Sidebar Left', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-blog-sidebar'=>array('left', 'both') )
					),
					'archive-blog-sidebar-right' => array(
						'title' => esc_html__('Archive Blog Sidebar Right', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-blog-sidebar'=>array('right', 'both') )
					),
					'archive-blog-style' => array(
						'title' => esc_html__('Archive Blog Style', 'seocrawler'),
						'type' => 'radioimage',
						'options' => array(
							'blog-full' => GDLR_CORE_URL . '/include/images/blog-style/blog-full.png',
							'blog-full-with-frame' => GDLR_CORE_URL . '/include/images/blog-style/blog-full-with-frame.png',
							'blog-column' => GDLR_CORE_URL . '/include/images/blog-style/blog-column.png',
							'blog-column-with-frame' => GDLR_CORE_URL . '/include/images/blog-style/blog-column-with-frame.png',
							'blog-column-no-space' => GDLR_CORE_URL . '/include/images/blog-style/blog-column-no-space.png',
							'blog-image' => GDLR_CORE_URL . '/include/images/blog-style/blog-image.png',
							'blog-image-no-space' => GDLR_CORE_URL . '/include/images/blog-style/blog-image-no-space.png',
							'blog-left-thumbnail' => GDLR_CORE_URL . '/include/images/blog-style/blog-left-thumbnail.png',
							'blog-right-thumbnail' => GDLR_CORE_URL . '/include/images/blog-style/blog-right-thumbnail.png',
						),
						'default' => 'blog-full',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-blog-full-alignment' => array(
						'title' => esc_html__('Archive Blog Full Alignment', 'seocrawler'),
						'type' => 'combobox',
						'default' => 'enable',
						'options' => array(
							'left' => esc_html__('Left', 'seocrawler'),
							'center' => esc_html__('Center', 'seocrawler'),
						),
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame') )
					),
					'archive-thumbnail-size' => array(
						'title' => esc_html__('Archive Thumbnail Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'thumbnail-size'
					),
					'archive-show-thumbnail' => array(
						'title' => esc_html__('Archive Show Thumbnail', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail') )
					),
					'archive-column-size' => array(
						'title' => esc_html__('Archive Column Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5 ),
						'default' => 20,
						'condition' => array( 'archive-blog-style' => array('blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-image', 'blog-image-no-space') )
					),
					'archive-excerpt' => array(
						'title' => esc_html__('Archive Excerpt Type', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'specify-number' => esc_html__('Specify Number', 'seocrawler'),
							'show-all' => esc_html__('Show All ( use <!--more--> tag to cut the content )', 'seocrawler'),
						),
						'default' => 'specify-number',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail'))
					),
					'archive-excerpt-number' => array(
						'title' => esc_html__('Archive Excerpt Number', 'seocrawler'),
						'type' => 'text',
						'default' => 55,
						'data-input-type' => 'number',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail'), 'archive-excerpt' => 'specify-number')
					),
					'archive-date-feature' => array(
						'title' => esc_html__('Enable Blog Date Feature', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-left-thumbnail', 'blog-right-thumbnail') )
					),
					'archive-meta-option' => array(
						'title' => esc_html__('Archive Meta Option', 'seocrawler'),
						'type' => 'multi-combobox',
						'options' => array( 
							'date' => esc_html__('Date', 'seocrawler'),
							'author' => esc_html__('Author', 'seocrawler'),
							'category' => esc_html__('Category', 'seocrawler'),
							'tag' => esc_html__('Tag', 'seocrawler'),
							'comment' => esc_html__('Comment', 'seocrawler'),
							'comment-number' => esc_html__('Comment Number', 'seocrawler'),
						),
						'default' => array('date', 'author', 'category')
					),
					'archive-show-read-more' => array(
						'title' => esc_html__('Archive Show Read More Button', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-left-thumbnail', 'blog-right-thumbnail'),)
					),
				)
			),

			'woocommerce-style' => array(
				'title' => esc_html__('Woocommerce Style', 'seocrawler'),
				'options' => array(

					'woocommerce-archive-sidebar' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'right',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'woocommerce-archive-sidebar-left' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar Left', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'woocommerce-archive-sidebar'=>array('left', 'both') )
					),
					'woocommerce-archive-sidebar-right' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar Right', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'woocommerce-archive-sidebar'=>array('right', 'both') )
					),
					'woocommerce-archive-column-size' => array(
						'title' => esc_html__('Woocommerce Archive Column Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15
					),
					'woocommerce-archive-thumbnail' => array(
						'title' => esc_html__('Woocommerce Archive Thumbnail Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
					'woocommerce-related-product-column-size' => array(
						'title' => esc_html__('Woocommerce Related Product Column Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15
					),
					'woocommerce-related-product-num-fetch' => array(
						'title' => esc_html__('Woocommerce Related Product Num Fetch', 'seocrawler'),
						'type' => 'text',
						'default' => 4,
						'data-input-type' => 'number'
					),
					'woocommerce-related-product-thumbnail' => array(
						'title' => esc_html__('Woocommerce Related Product Thumbnail Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
				)
			),

			'portfolio-style' => array(
				'title' => esc_html__('Portfolio Style', 'seocrawler'),
				'options' => array(
					'portfolio-slug' => array(
						'title' => esc_html__('Portfolio Slug (Permalink)', 'seocrawler'),
						'type' => 'text',
						'default' => 'portfolio',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'seocrawler')
					),
					'portfolio-category-slug' => array(
						'title' => esc_html__('Portfolio Category Slug (Permalink)', 'seocrawler'),
						'type' => 'text',
						'default' => 'portfolio_category',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'seocrawler')
					),
					'portfolio-tag-slug' => array(
						'title' => esc_html__('Portfolio Tag Slug (Permalink)', 'seocrawler'),
						'type' => 'text',
						'default' => 'portfolio_tag',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'seocrawler')
					),
					'enable-single-portfolio-navigation' => array(
						'title' => esc_html__('Enable Single Portfolio Navigation', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'enable-single-portfolio-navigation-in-same-tag' => array(
						'title' => esc_html__('Enable Single Portfolio Navigation Within Same Tag', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'enable-single-portfolio-navigation' => 'enable' )
					),
					'portfolio-icon-hover-link' => array(
						'title' => esc_html__('Portfolio Hover Icon (Link)', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'hover-icon-link',
						'default' => 'icon_link_alt'
					),
					'portfolio-icon-hover-video' => array(
						'title' => esc_html__('Portfolio Hover Icon (Video)', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'hover-icon-video',
						'default' => 'icon_film'
					),
					'portfolio-icon-hover-image' => array(
						'title' => esc_html__('Portfolio Hover Icon (Image)', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'hover-icon-image',
						'default' => 'icon_zoom-in_alt'
					),
					'portfolio-icon-hover-size' => array(
						'title' => esc_html__('Portfolio Hover Icon Size', 'seocrawler'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '22px',
						'selector' => '.gdlr-core-portfolio-thumbnail .gdlr-core-portfolio-icon{ font-size: #gdlr#; }' 
					),
					'enable-related-portfolio' => array(
						'title' => esc_html__('Enable Related Portfolio', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'related-portfolio-style' => array(
						'title' => esc_html__('Related Portfolio Style', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'grid' => esc_html__('Grid', 'seocrawler'),
							'modern' => esc_html__('Modern', 'seocrawler'),
						),
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-enable-tag' => array(
						'title' => esc_html__('Enable Portfolio Tag', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array('enable-related-portfolio'=>'enable', 'related-portfolio-style'=>array('grid') )
					),
					'related-portfolio-column-size' => array(
						'title' => esc_html__('Related Portfolio Column Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15,
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-num-fetch' => array(
						'title' => esc_html__('Related Portfolio Num Fetch', 'seocrawler'),
						'type' => 'text',
						'default' => 4,
						'data-input-type' => 'number',
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-thumbnail-size' => array(
						'title' => esc_html__('Related Portfolio Thumbnail Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'condition' => array('enable-related-portfolio'=>'enable'),
						'default' => 'medium'
					),
					'related-portfolio-thumbnail-hover' => array(
						'title' => esc_html__('Related Portfolio Thumbnail Hover Style', 'seocrawler'),
						'type' => 'radioimage',
						'options' => array(
							'title' => get_template_directory_uri() . '/images/portfolio-hover/title.png',
							'title-icon' => get_template_directory_uri() . '/images/portfolio-hover/title-icon.png',
							'title-tag' => get_template_directory_uri() . '/images/portfolio-hover/title-tag.png',
							'title-date' => get_template_directory_uri() . '/images/portfolio-hover/title-date.jpg',
							'icon-title-tag' => get_template_directory_uri() . '/images/portfolio-hover/icon-title-tag.png',
							'icon-title_bottom' => get_template_directory_uri() . '/images/portfolio-hover/icon-title_bottom.jpg',
							'icon' => get_template_directory_uri() . '/images/portfolio-hover/icon.png',
							'margin-title' => get_template_directory_uri() . '/images/portfolio-hover/margin-title.png',
							'margin-title-icon' => get_template_directory_uri() . '/images/portfolio-hover/margin-title-icon.png',
							'margin-title-tag' => get_template_directory_uri() . '/images/portfolio-hover/margin-title-tag.png',
							'margin-icon-title-tag' => get_template_directory_uri() . '/images/portfolio-hover/margin-icon-title-tag.png',
							'margin-icon' => get_template_directory_uri() . '/images/portfolio-hover/margin-icon.png',
							'none' => get_template_directory_uri() . '/images/portfolio-hover/none.png',
						),
						'default' => 'title-icon',
						'max-width' => '100px',
						'condition' => array('enable-related-portfolio'=>'enable'),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'related-portfolio-num-excerpt' => array(
						'title' => esc_html__('Related Portfolio Num Excerpt', 'seocrawler'),
						'type' => 'text',
						'default' => 20,
						'data-input-type' => 'number',
						'condition' => array('enable-related-portfolio'=>'enable', 'related-portfolio-style'=>'grid')
					),
					'related-portfolio-title-font-size' => array(
						'title' => esc_html__('Portfolio Title Font Size', 'seocrawler'),
						'type' => 'text',
						'data-input-type' => 'pixel',
						'condition' => array('enable-related-portfolio'=>'enable'),
					),
					'related-portfolio-title-font-weight' => array(
						'title' => esc_html__('Portfolio Title Font Weight', 'seocrawler'),
						'type' => 'text',
						'condition' => array('enable-related-portfolio'=>'enable'),
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'seocrawler')
					)
				)
			),

			'portfolio-archive' => array(
				'title' => esc_html__('Portfolio Archive', 'seocrawler'),
				'options' => array(
					'archive-portfolio-sidebar' => array(
						'title' => esc_html__('Archive Portfolio Sidebar', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'none',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-sidebar-left' => array(
						'title' => esc_html__('Archive Portfolio Sidebar Left', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-portfolio-sidebar'=>array('left', 'both') )
					),
					'archive-portfolio-sidebar-right' => array(
						'title' => esc_html__('Archive Portfolio Sidebar Right', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-portfolio-sidebar'=>array('right', 'both') )
					),
					'archive-portfolio-style' => array(
						'title' => esc_html__('Archive Portfolio Style', 'seocrawler'),
						'type' => 'radioimage',
						'options' => array(
							'modern' => get_template_directory_uri() . '/include/options/images/portfolio/modern.png',
							'modern-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/modern-no-space.png',
							'grid' => get_template_directory_uri() . '/include/options/images/portfolio/grid.png',
							'grid-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/grid-no-space.png',
							'modern-desc' => get_template_directory_uri() . '/include/options/images/portfolio/modern-desc.png',
							'modern-desc-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/modern-desc-no-space.png',
							'medium' => get_template_directory_uri() . '/include/options/images/portfolio/medium.png',
						),
						'default' => 'medium',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-thumbnail-size' => array(
						'title' => esc_html__('Archive Portfolio Thumbnail Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => 'thumbnail-size'
					),
					'archive-portfolio-grid-text-align' => array(
						'title' => esc_html__('Archive Portfolio Grid Text Align', 'seocrawler'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space' ) )
					),
					'archive-portfolio-grid-style' => array(
						'title' => esc_html__('Archive Portfolio Grid Content Style', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'normal' => esc_html__('Normal', 'seocrawler'),
							'with-frame' => esc_html__('With Frame', 'seocrawler'),
							'with-bottom-border' => esc_html__('With Bottom Border', 'seocrawler'),
						),
						'default' => 'normal',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space' ) )
					),
					'archive-enable-portfolio-tag' => array(
						'title' => esc_html__('Archive Enable Portfolio Tag', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ) )
					),
					'archive-portfolio-medium-size' => array(
						'title' => esc_html__('Archive Portfolio Medium Thumbnail Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'seocrawler'),
							'large' => esc_html__('Large', 'seocrawler'),
						),
						'condition' => array( 'archive-portfolio-style' => 'medium' )
					),
					'archive-portfolio-medium-style' => array(
						'title' => esc_html__('Archive Portfolio Medium Thumbnail Style', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left', 'seocrawler'),
							'right' => esc_html__('Right', 'seocrawler'),
							'switch' => esc_html__('Switch ( Between Left and Right )', 'seocrawler'),
						),
						'default' => 'switch',
						'condition' => array( 'archive-portfolio-style' => 'medium' )
					),
					'archive-portfolio-hover' => array(
						'title' => esc_html__('Archive Portfolio Hover Style', 'seocrawler'),
						'type' => 'radioimage',
						'options' => array(
							'title' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title.png',
							'title-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title-icon.png',
							'title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title-tag.png',
							'icon-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/icon-title-tag.png',
							'icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/icon.png',
							'margin-title' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title.png',
							'margin-title-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title-icon.png',
							'margin-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title-tag.png',
							'margin-icon-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-icon-title-tag.png',
							'margin-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-icon.png',
							'none' => get_template_directory_uri() . '/include/options/images/portfolio/hover/none.png',
						),
						'default' => 'icon',
						'max-width' => '100px',
						'condition' => array( 'archive-portfolio-style' => array('modern', 'modern-no-space', 'grid', 'grid-no-space', 'medium') ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-column-size' => array(
						'title' => esc_html__('Archive Portfolio Column Size', 'seocrawler'),
						'type' => 'combobox',
						'options' => array( 60=>1, 30=>2, 20=>3, 15=>4, 12=>5 ),
						'default' => 20,
						'condition' => array( 'archive-portfolio-style' => array('modern', 'modern-no-space', 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space') )
					),
					'archive-portfolio-excerpt' => array(
						'title' => esc_html__('Archive Portfolio Excerpt Type', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'specify-number' => esc_html__('Specify Number', 'seocrawler'),
							'show-all' => esc_html__('Show All ( use <!--more--> tag to cut the content )', 'seocrawler'),
							'none' => esc_html__('Disable Exceprt', 'seocrawler'),
						),
						'default' => 'specify-number',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ) )
					),
					'archive-portfolio-excerpt-number' => array(
						'title' => esc_html__('Archive Portfolio Excerpt Number', 'seocrawler'),
						'type' => 'text',
						'default' => 55,
						'data-input-type' => 'number',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ), 'archive-portfolio-excerpt' => 'specify-number' )
					),

				)
			),

			'personnel-style' => array(
				'title' => esc_html__('Personnel Style', 'seocrawler'),
				'options' => array(
					'personnel-slug' => array(
						'title' => esc_html__('Personnel Slug (Permalink)', 'seocrawler'),
						'type' => 'text',
						'default' => 'personnel',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'seocrawler')
					),
					'personnel-category-slug' => array(
						'title' => esc_html__('Personnel Category Slug (Permalink)', 'seocrawler'),
						'type' => 'text',
						'default' => 'personnel_category',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'seocrawler')
					),
				)
			),

			'footer' => array(
				'title' => esc_html__('Footer/Copyright', 'seocrawler'),
				'options' => array(

					'fixed-footer' => array(
						'title' => esc_html__('Fixed Footer', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'enable-footer' => array(
						'title' => esc_html__('Enable Footer', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'footer-background' => array(
						'title' => esc_html__('Footer Background', 'seocrawler'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.seocrawler-footer-wrapper{ background-image: url(#gdlr#); background-size: cover; }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-top-padding' => array(
						'title' => esc_html__('Footer Top Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '70px',
						'selector' => '.seocrawler-footer-wrapper{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-bottom-padding' => array(
						'title' => esc_html__('Footer Bottom Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '50px',
						'selector' => '.seocrawler-footer-wrapper{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-style' => array(
						'title' => esc_html__('Footer Style', 'seocrawler'),
						'type' => 'radioimage',
						'wrapper-class' => 'gdlr-core-fullsize',
						'options' => array(
							'footer-1' => get_template_directory_uri() . '/include/options/images/footer-style1.png',
							'footer-2' => get_template_directory_uri() . '/include/options/images/footer-style2.png',
							'footer-3' => get_template_directory_uri() . '/include/options/images/footer-style3.png',
							'footer-4' => get_template_directory_uri() . '/include/options/images/footer-style4.png',
							'footer-5' => get_template_directory_uri() . '/include/options/images/footer-style5.png',
							'footer-6' => get_template_directory_uri() . '/include/options/images/footer-style6.png',
						),
						'default' => 'footer-2',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'enable-copyright' => array(
						'title' => esc_html__('Enable Copyright', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'copyright-style' => array(
						'title' => esc_html__('Copyright Style', 'seocrawler'),
						'type' => 'combobox',
						'options' => array(
							'center' => esc_html__('Center', 'seocrawler'),
							'left-right' => esc_html__('Left & Right', 'seocrawler'),
						),
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-top-padding' => array(
						'title' => esc_html__('Copyright Top Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '38px',
						'selector' => '.seocrawler-copyright-container{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-bottom-padding' => array(
						'title' => esc_html__('Copyright Bottom Padding', 'seocrawler'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '38px',
						'selector' => '.seocrawler-copyright-container{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-font-letter-spacing' => array(
						'title' => esc_html__('Copyright Font Letter Spacing', 'seocrawler'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '2px',
						'selector' => '.seocrawler-copyright-container{ letter-spacing: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-text-transform' => array(
						'title' => esc_html__('Copyright Text Transform', 'seocrawler'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'seocrawler'),
							'lowercase' => esc_html__('Lowercase', 'seocrawler'),
							'capitalize' => esc_html__('Capitalize', 'seocrawler'),
							'none' => esc_html__('None', 'seocrawler'),
						),
						'default' => 'uppercase',
						'selector' => '.seocrawler-copyright-container{ text-transform: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),			
					'copyright-text' => array(
						'title' => esc_html__('Copyright Text', 'seocrawler'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-left' => array(
						'title' => esc_html__('Copyright Left', 'seocrawler'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable', 'copyright-style' => 'left-right' )
					),
					'copyright-right' => array(
						'title' => esc_html__('Copyright Right', 'seocrawler'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable', 'copyright-style' => 'left-right' )
					),
					'enable-back-to-top' => array(
						'title' => esc_html__('Enable Back To Top Button', 'seocrawler'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
				) // footer-options
			), // footer-nav	
		
		) // general-options
		
	), 2);