<?php
/*
Plugin Name: Custom Menu Item for Artmotion
Plugin URI: https://github.com/wpwebguru/custom-plugin-for-artmotion
Description: This plugin for Only Artmotion.com, Otherwise not working
Version: 1.2
Author: Web Guru
Author URI: http://wpwebguru.net/
(){}
$default
the_author_posts_link

*/

	define( "PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
	define("PLUGINS_URL", plugins_url());
	
	//include_once PLUGIN_DIR_PATH.'/inc/menu_item.php';

	
		add_shortcode('user_logged','custom_user_logged');
		function custom_user_logged(){
			
			
			if ( is_user_logged_in() ) {
				$current_user = wp_get_current_user();
				if ( ($current_user instanceof WP_User) ) {
					$useravatar = get_avatar( $current_user->ID, 32 );
					echo $useravatar;
				}
			}
		}
	
	
	
	
	

	add_filter('wp_nav_menu_items','custom_menu_item_artmotion', 10, 2);
	add_filter('wp_nav_menu_items','custom_menu_item_artmotion_two', 10, 2);
	function custom_menu_item_artmotion( $nav, $args ) {
		
	if( $args->theme_location == 'header-menu' ){
			return $nav."<li class='menu_item_01'>
	
						<div class='custom_menu_item'><span class='icon'><a href='javascript:void(0);' onclick='custommenuitem()'><i class='fa fa-bars' aria-hidden='true'></i></a></span></div>
							<div id='toggle_menu_item'>
								<ul>
									<li><a href='https://shopping.artmotion.com/'>
										<div class='01'>
											<span><i class='_mi _before dashicons dashicons-cart' aria-hidden='true'></i></span><br>
											<span>Shopping</span>
										</div>
									</a></li>
									
									<li><a href='https://news.artmotion.com/'>
										<div class='02'>
											<span><i class='_mi _before dashicons dashicons-book' aria-hidden='true'></i></span><br>
											<span>Magazine</span>
										</div>
									</a></li>
									
									<li><a href='https://search.artmotion.com/'>
										<div class='03'>
											<span><i class='_mi _before dashicons dashicons-search' aria-hidden='true'></i></span><br>
											<span>Search Engine</span>
										</div>
									</a></li>
									
									<li><a href='http://travel.artmotion.com/'>
										<div class='04'>
											<span><i class='_mi _before dashicons dashicons-palmtree' aria-hidden='true'></i></span><br>
											<span>Travel</span>
										</div>
									</a></li>
									
									<li><a href='https://artmotion.co.uk/'>
										<div class='05'>
											<span><i class='_mi _before dashicons dashicons-admin-site' aria-hidden='true'></i></span><br>
											<span>Hosting</span>
										</div>
									</a></li>
									
									<li><a href='http://itis.one/'>
										<div class='06'>
											<span><i class='_mi _before dashicons dashicons-desktop' aria-hidden='true'></i></span><br>
											<span>Web Builder</span>
										</div>
									</a></li>
									
									<li><a href='https://mail.artmotion.com/'>
										<div class='07'>
											<span><i class='_mi _before dashicons dashicons-email' aria-hidden='true'></i></span><br>
											<span>Mail</span>
										</div>
									</a></li>
								
								</ul>
							</div>

	</li>";
	}
    return $nav;
}
	function custom_menu_item_artmotion_two( $nav, $args ) {
		
		if( $args->theme_location == 'header-menu' ){
			if ( is_user_logged_in() ) {
				$current_user = wp_get_current_user();
				if ( ($current_user instanceof WP_User) ) {
					$useravatar = get_avatar( $current_user->ID, 32 );
					
				}
			}
			
			return $nav."<li class='menu_item_02'>
	
						<div class='custom_menu_item'><span class='icon'><a href='javascript:void(0);' onclick='custommenuitem()'><i class='fa fa-user-circle' aria-hidden='true'></i><span class='logged-in-user'>$useravatar</span>
</a></span></div>
							<div id='toggle_menu_item'>
								<ul>
						
								
									<li><a href='https://news.artmotion.com/packs/'>
										<div class='08'>
											<span><i class='_mi _before dashicons dashicons-exerpt-view' aria-hidden='true'></i></span><br>
											<span>Subscription</span>
										</div>
									</a></li>
									
									<li><a href='https://news.artmotion.com/account/?section=submit-post'>
										<div class='09'>
											<span><i class='_mi _before dashicons dashicons-welcome-add-page' aria-hidden='true'></i></span><br>
											<span>Add Story</span>
										</div>
									</a></li>
									
									<li><a href='https://news.artmotion.com/account/?section=posts'>
										<div class='10'>
											<span><i class='_mi _before dashicons dashicons-list-view' aria-hidden='true'></i></span><br>
											<span>All Posts</span>
										</div>
									</a></li>
									
									<li><a href='https://news.artmotion.com/account/?section=edit-profile'>
										<div class='11'>
											<span><i class='_mi _before dashicons dashicons-id' aria-hidden='true'></i></span><br>
											<span>Edit Profile</span>
										</div>
									</a></li>
									
									<li><a href='https://news.artmotion.com/registration/'>
										<div class='12'>
											<span><i class='_mi _before dashicons dashicons-edit' aria-hidden='true'></i></span><br>
											<span>Login/Sign up</span>
										</div>
									</a></li>
									
								</ul>
							</div>
			
		
						
						<style>
							
							.custom_menu_item a{
								padding: 0 15px 0 15px;
								line-height: 44px;
								display: block;
								font-weight: normal;
								text-transform: none;
							}
							.custom_menu_item .icon .fa-bars, .custom_menu_item .icon .fa-user-circle-o{color:#fff; font-size: 22px;}
							
							#toggle_menu_item ul{
								padding: 15px 10ps 0 10px;
								display: block !important;
								box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.15);
								-moz-column-count: 3; 
								text-align: center;
								-webkit-column-count: 3;
								margin:auto 0;
								column-count: 3;
								vertical-align: top;
								padding: 5px;
							}
							#toggle_menu_item ul li a{
									padding: 10px 0;
									margin:auto 0;
									list-style: none;
									text-align: center;
									display: inline-block;
									position: relative;
								}
							
							#toggle_menu_item ul li a div:hover{color: #1ca7fb;}
                            #toggle_menu_item ul li a div{
							   position: relative !important;
							}
                            #toggle_menu_item ul li a div span{
							   position: relative !important;
							}
                            
							#toggle_menu_item ul li a i{
								font-size: 24px;
								font-weight: normal;
								text-transform: none;
								vertical-align: middle;
								margin:auto;
							}
							.menu_item_01, .menu_item_02 {float: right !important;}
							
							.custom_menu_item .icon .logged-in-user img {
								border-radius: 50px;
								width: 25px;
								height: 25px;
								vertical-align: middle;
								display: inherit;
								border: 1px solid #fff;
							}

							.logged-in .fa-user-circle{
								display: none !important;
							}
														
							
						</style>

	</li>";
		}
    return $nav;
}
