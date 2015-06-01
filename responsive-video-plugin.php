<?php 
/*
Plugin Name: Winsome responsive video
Plugin URI:http://www.mhost.5gbfree.com/demo
Description: This plugin for generating  shortcode. You can easily add video from youtube, vimeo,dailymotion.
Author: Masum Abdullah
Version: 1.1
Author URI:http://abdullahmasum.elance.com/
*/

/********************* FOR JQUERY  ************************/

			function  add_jquery_plugin()
			  {
				 wp_enqueue_script('jquery');
			  }
			add_action('init','add_jquery_plugin');
			
			
/********************* FOR FITVIDS  ************************/

		  function add_fitvids_js(){
			
			wp_enqueue_script('fitvids_main_js',plugins_url('lib/jquery.fitvids.js',__FILE__),array('jquery'),1.0,   false);
			wp_enqueue_script('fitvids_active_js',plugins_url('lib/active-fitvids.js',__FILE__),array('jquery'),   1.0,false);
			
			wp_enqueue_style('fitvids_customstyle_css',plugins_url('css/plugin-style.css',__FILE__) );
			
		  }
		  add_action('init','add_fitvids_js');
  
 /********************* FOR YOUTUBE VIDEO  ************************/
	

		function youtube_video($atts, $content = null) {
			   
			   extract(shortcode_atts(
				  array(
					   'id'=>'L21sT0tYJtE'
					 ),$atts)
					 );

			return (' <div class="for_fitvids_activation1">
			<iframe  src="http://www.youtube.com/embed/'.$id.'" frameborder="0" allowfullscreen></iframe>
			        </div> ');
		}
		add_shortcode("youtube", "youtube_video");


 /********************* FOR VIMEO VIDEO  ************************/ 
 

		function vimeo_video($atts, $content = null) {

		   extract(shortcode_atts(
				  array(
					   'id'=>'74715441'
					 ),$atts)
					 );

			return ('<div class="for_fitvids_activation2">
			<iframe src="http://player.vimeo.com/video/'.$id.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>'); 
		}
		add_shortcode("vimeo", "vimeo_video");
		
		
/********************* FOR DAILYMOTION VIDEO  ************************/ 

		function dailymotion_video($atts, $content = null) {

		   extract(shortcode_atts(
				  array(
					   'id'=>'x2o420e'
					 ),$atts)
					 );

			return ('<div class="for_fitvids_activation2">
			<iframe src="http://www.dailymotion.com/video/'.$id.'" frameborder="0"  ></iframe>
			</div>'); 
		}
		add_shortcode("dailymotion", "dailymotion_video");
	

?>