<?php
	/* a template for displaying the header area */

	// header container
	$body_layout = seocrawler_get_option('general', 'layout', 'full');
	$body_margin = seocrawler_get_option('general', 'body-margin', '0px');
	$header_width = seocrawler_get_option('general', 'header-width', 'boxed');
	$header_background_style = seocrawler_get_option('general', 'header-background-style', 'solid');
	
	if( $header_width == 'boxed' ){
		$header_container_class = ' seocrawler-container';
	}else if( $header_width == 'custom' ){
		$header_container_class = ' seocrawler-header-custom-container';
	}else{
		$header_container_class = ' seocrawler-header-full';
	}

	$header_style = seocrawler_get_option('general', 'header-plain-style', 'menu-right');
	$navigation_offset = seocrawler_get_option('general', 'fixed-navigation-anchor-offset', '');

	$header_wrap_class  = ' seocrawler-style-' . $header_style;
	$header_wrap_class .= ' seocrawler-sticky-navigation';
	if( $header_style == 'center-logo' || $body_layout == 'boxed' || 
		$body_margin != '0px' || $header_background_style == 'transparent' ){
		
		$header_wrap_class .= ' seocrawler-style-slide';
	}else{
		$header_wrap_class .= ' seocrawler-style-fixed';
	}
?>	
<header class="seocrawler-header-wrap seocrawler-header-style-plain <?php echo esc_attr($header_wrap_class); ?>" <?php
		if( !empty($navigation_offset) ){
			echo 'data-navigation-offset="' . esc_attr($navigation_offset) . '" ';
		}
	?> >
	<div class="seocrawler-header-background" ></div>
	<div class="seocrawler-header-container <?php echo esc_attr($header_container_class); ?>">
			
		<div class="seocrawler-header-container-inner clearfix">
			<?php

				if( $header_style == 'splitted-menu' ){
					add_filter('seocrawler_center_menu_item', 'seocrawler_get_logo');
				}else{
					echo seocrawler_get_logo();
				}

				$navigation_class = '';
				if( seocrawler_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
					$navigation_class = 'seocrawler-navigation-submenu-indicator ';
				}
			?>
			<div class="seocrawler-navigation seocrawler-item-pdlr clearfix <?php echo esc_attr($navigation_class); ?>" >
			<?php
				// print main menu
				if( has_nav_menu('main_menu') ){
					$slide_bar = seocrawler_get_option('general', 'navigation-slide-bar', 'enable');
					echo '<div class="seocrawler-main-menu ' . ($slide_bar == 'enable'? 'seocrawler-with-slidebar': '') . '" id="seocrawler-main-menu" >';
					wp_nav_menu(array(
						'theme_location'=>'main_menu', 
						'container'=> '', 
						'menu_class'=> 'sf-menu',
						'walker' => new seocrawler_menu_walker()
					));
					if( $slide_bar == 'dot' ){
						echo '<div class="seocrawler-navigation-slide-bar seocrawler-style-' . esc_attr($slide_bar) . '" >';
					} 
					echo '</div>';
				}

				// menu right side
				$menu_right_class = '';
				if( in_array($header_style, array('center-menu', 'center-logo', 'splitted-menu')) ){
					$menu_right_class = ' seocrawler-item-mglr seocrawler-navigation-top';
				}

				$enable_search = (seocrawler_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
				$enable_cart = (seocrawler_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
				$enable_right_button = (seocrawler_get_option('general', 'enable-main-navigation-right-button', 'disable') == 'enable')? true: false;
				if( has_nav_menu('right_menu') || $enable_search || $enable_cart || $enable_right_button ){
					echo '<div class="seocrawler-main-menu-right-wrap clearfix ' . esc_attr($menu_right_class) . '" >';

					// search icon
					if( $enable_search ){
						$search_icon = seocrawler_get_option('general', 'main-navigation-search-icon', 'fa fa-search');
						echo '<div class="seocrawler-main-menu-search" id="seocrawler-top-search" >';
						echo '<i class="' . esc_attr($search_icon) . '" ></i>';
						echo '</div>';
						seocrawler_get_top_search();
					}

					// cart icon
					if( $enable_cart ){
						$cart_icon = seocrawler_get_option('general', 'main-navigation-cart-icon', 'fa fa-shopping-cart');
						echo '<div class="seocrawler-main-menu-cart" id="seocrawler-menu-cart" >';
						echo '<i class="' . esc_attr($cart_icon) . '" ></i>';
						seocrawler_get_woocommerce_bar();
						echo '</div>';
					}

					// menu right button
					if( $enable_right_button ){
						$button_link = seocrawler_get_option('general', 'main-navigation-right-button-link', '');
						$button_link_target = seocrawler_get_option('general', 'main-navigation-right-button-link-target', '_self');
						echo '<a class="seocrawler-main-menu-right-button" href="' . esc_url($button_link) . '" target="' . esc_attr($button_link_target) . '" >';
						echo seocrawler_get_option('general', 'main-navigation-right-button-text', '');
						echo '</a>';
					}

					// print right menu
					if( has_nav_menu('right_menu') && $header_style != 'splitted-menu' ){
						seocrawler_get_custom_menu(array(
							'container-class' => 'seocrawler-main-menu-right',
							'button-class' => 'seocrawler-right-menu-button seocrawler-top-menu-button',
							'icon-class' => 'fa fa-bars',
							'id' => 'seocrawler-right-menu',
							'theme-location' => 'right_menu',
							'type' => seocrawler_get_option('general', 'right-menu-type', 'right')
						));
					}

					echo '</div>'; // seocrawler-main-menu-right-wrap

					if( has_nav_menu('right_menu') && $header_style == 'splitted-menu'  ){
						echo '<div class="seocrawler-main-menu-left-wrap clearfix seocrawler-item-pdlr seocrawler-navigation-top" >';
						seocrawler_get_custom_menu(array(
							'container-class' => 'seocrawler-main-menu-right',
							'button-class' => 'seocrawler-right-menu-button seocrawler-top-menu-button',
							'icon-class' => 'fa fa-bars',
							'id' => 'seocrawler-right-menu',
							'theme-location' => 'right_menu',
							'type' => seocrawler_get_option('general', 'right-menu-type', 'right')
						));
						echo '</div>';
					}
				}
			?>
			</div><!-- seocrawler-navigation -->

		</div><!-- seocrawler-header-inner -->
	</div><!-- seocrawler-header-container -->
</header><!-- header -->