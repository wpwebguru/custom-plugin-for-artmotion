<?php

?>

			<!--- Menu Icon NO 01 HTML start--->
						
			<div class="custom_menu_item"><span class="icon"><a href="javascript:void(0);" onclick="custommenuitem()"><i class="fa fa-bars" aria-hidden="true"></i></a></span></div>
			<div id="toggle_menu_item">
				<ul>
					<li><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="_mi _before dashicons dashicons-book" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="_mi _before dashicons dashicons-palmtree" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="_mi _before dashicons dashicons-admin-site" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="_mi _before dashicons dashicons-desktop" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="_mi _before dashicons dashicons-email" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			
		
		<script> 
			
			// Function to toggle the bar 
			function custommenuitem() { 
				var x = document.getElementById("toggle_menu_item"); 
				if (x.style.display === "none") { 
					x.style.display = "block"; 
				} else { 
					x.style.display = "none"; 
				} 
			} 
		</script> 
		<style>
			.custom_menu_item{
				position: absolute;
				z-index: 1;
				right: 10%;
				top: 20%;
			}
			.custom_menu_item .icon .fa-bars{ font-size: 24px;}
			#toggle_menu_item{
				display: none;
				box-sizing: border-box;
				height: auto;
				width: 20%;
				padding: 3px 6px 9px;
				background: #fff;
				border: 1px solid rgba(0,0,0,0.2);
				border-radius: 8px;
				box-shadow: 0 1px 2px 0 rgba(60,64,67,.30),0 2px 6px 2px rgba(60,64,67,.15);
				position: absolute;
				z-index: 1;
				right: 8%;
				top: 26%;
			
			}
			#toggle_menu_item ul{
				padding: 15px 10ps 0 10px;
			}
			#toggle_menu_item ul li{
				display: inline-block;
				list-style-type: none;
				padding: 10px;
				position: relative;
				transition: transform .2s cubic-bezier(.333,0,0,1);
				vertical-align: top;
				width: 70px;
			}
			#toggle_menu_item ul li a i{
				font-size: 32px;
			}
			
			
		</style>



<?php