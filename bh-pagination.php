<?php
/**
 * @package BH Pagination
 * @version 1.0
 */
/*
Plugin Name: BH Pagination
Plugin URI: http://getmasum.com/bh-pagination
Description: Simple pagination plugin, build with using pagination code of bootstap. this is very easy to use plugin.
Author: Masum Billah
Version: 1.0
Author URI: http://getmasum.com
*/


/**
 * @Plugin Set-up
**/

define('BH_PAGINATION_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );

/**
 * @Adding Plugin custm CSS file 
**/

wp_enqueue_style('bh_pagination-style', BH_PAGINATION_PATH.'bootstrap.min.css');

function bh_pagination()
{?>
<div class="pagination">
<?php
	global $wp_query;  
	$total_pages = $wp_query->max_num_pages;  
	if ($total_pages > 1){  
	  $current_page = max(1, get_query_var('paged'));  
		echo '<ul class="">' ;
			echo '<li>' ;
	  echo paginate_links(array(  
		  'base' => get_pagenum_link(1) . '%_%',  
		  'format' => '/page/%#%',  
		  'current' => $current_page,  
		  'total' => $total_pages,  
		  'prev_text' => 'Prev',  
		  'next_text' => 'Next'  
		)); 
			echo '</li>' ;
		echo '</ul>' ;
	}  
?>	
</div>
<?php
}