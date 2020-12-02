<?php
/*
Plugin Name: Dealn.It DealFeed by Category (JavaScript)
Plugin URI: http://www.dealn.it/
Description: A Widget that Outputs deals from dealn.it database based on specified category(ies). Go to widget menu after activating to configure options. (Javascript Version) Requires PHP 5+
Author: Dealn.It
Version: 0.7.0
Author URI: http://www.dealn.it/
*/
/**
 * @package DealFeedByCategory
 * @version 0.7.0
 */

class DealFeedByCategoryWidget extends WP_Widget {
	private $_limit_min;
	private $_limit_max;
	private $_pub_id;
	private $_link_targets;
	private $_link_target;
	private $_plugin_version;
	private $_region_target;
	
	function __construct() {
		// change limits, if wanted
		$this->_limit_min = 1;
		$this->_limit_max = 15;
		$this->_pub_id = 1;
		$this->_link_target = '_top';
		$this->_link_targets = array('_blank','_self','_parent','_top');
		$this->_plugin_version = '0.7.0';
		$this->_region_target = 'ip';
		
		$widget_options = array('description' => 'A widget to list deals based on selected categories. JavaScript version.');
		parent::__construct(false, 'Dealn.It Deal Feed by Category', $widget_options);	
	}

	/** 
	 * @see WP_Widget::widget 
	 */
	function widget($args, $instance) {	
		$before_widget = '';
		$after_widget = '';
		$before_title = '';
		$after_title = '';
		extract( $args );
		
		if (!array_key_exists('categories', $instance)) 
			$instance['categories'] = array();
		if (!array_key_exists('limit', $instance)) 
			$instance['limit'] = $this->_limit_min;
		if (!array_key_exists('pub_id', $instance)) 
			$instance['pub_id'] = $this->_pub_id;
		if (!array_key_exists('link_target', $instance)) 
			$instance['link_target'] = $this->_link_target;
		
		// setup categories to add to the remote_get url
		$arrCategories = array();
		foreach ($instance['categories'] as $strCategory) {
			if ($strCategory == 'All') {
				// 'All' overrides everyting else
				$arrCategories = array("category[]=All");
				break;
			}
			$arrCategories[] = sprintf("category[]=%s", urlencode($strCategory));
		}
		
		// only allow between n and m results
		$dLimit = (int)$instance['limit'];
		if ($dLimit > $this->_limit_max)
			$dLimit = $this->_limit_max;
		if ($dLimit < $this->_limit_min)
			$dLimit = $this->_limit_min;
			
		$url = 'http://dealn.it/api-deals-js.htm?limit='.$dLimit.'&'.implode('&', $arrCategories);
		
		// use geo_ip to show closest deals first
//		$url .= '&remote_addr='.$_SERVER['REMOTE_ADDR'];
		// who are we...
		$url .= '&http_host='.$_SERVER['HTTP_HOST'];
		
		$url .= '&pid='.(int)$instance['pub_id'];
		$url .= '&sid='.(array_key_exists('sid', $instance))?$instance['sid']:'multi.cat.js';
		$url .= sprintf("&sid=%s", array_key_exists('sid', $instance)?$instance['sid']:'multi.cat.js');
		$url .= '&show_image='.(int)$instance['show_image'];
		$url .= '&image_limit='.urlencode($instance['image_limit']);
		$url .= '&title='.urlencode($instance['title']);
		$url .= '&image_px='.(int)$instance['image_px'];
		$url .= '&link_target='.urlencode($instance['link_target']);
		$url .= '&region_target='.urlencode($instance['region_target']);
		$url .= '&lat='.urlencode($instance['lat']);
		$url .= '&lng='.urlencode($instance['lng']);
		$url .= '&ver='.urlencode($this->_plugin_version);
		$url .= '&ref='.urlencode($_SERVER['HTTP_REFERER']);
		$url .= '&rnd='.rand(100000000,999999999);
		
		$strTitle = 'Local Deals';
		if (array_key_exists('title', $instance) && strlen(trim($instance['title']))) {
			$strTitle = $instance['title'];
		}
		
		$strTitle = apply_filters('widget_title', $strTitle);
		?>
			<?php echo $before_widget; ?>
			<?php if ( $strTitle )
				echo $before_title . $strTitle . $after_title; ?>
			<script type='text/javascript' src="<?php echo $url; ?>"></script>
			<?php echo $after_widget; ?>
		<?php
	}

	/** 
	 * @see WP_Widget::update 
	 */
	function update($new_instance, $old_instance) {	
		
		if (array_key_exists('dfbc_action', $new_instance)) {
			// reset categories in options array, then add new
			$old_instance['categories'] = array();
			if (array_key_exists('dfbc_options', $new_instance) && is_array($new_instance['dfbc_options'])) {
				foreach ($new_instance['dfbc_options'] as $strCategory) {
					$old_instance['categories'][] = $strCategory;
				}
			}
			if (array_key_exists('dfbc_limit', $new_instance)) {
				$old_instance['limit'] = (int)$new_instance['dfbc_limit'];
				if ($old_instance['limit'] > $this->_limit_max)
					$old_instance['limit'] = $this->_limit_max;
				if ($old_instance['limit'] < $this->_limit_min)
					$old_instance['limit'] = $this->_limit_min;
			}
			if (array_key_exists('dfbc_pub_id', $new_instance)) {
				$old_instance['pub_id'] = (int)$new_instance['dfbc_pub_id'];
			}
			if (array_key_exists('dfbc_title', $new_instance)) {
				$old_instance['title'] = $new_instance['dfbc_title'];
			}
			// reset checkbox
			unset($old_instance['show_image']);
			if (array_key_exists('dfbc_show_image', $new_instance)) {
				$old_instance['show_image'] = $new_instance['dfbc_show_image'];
			}
			if (array_key_exists('dfbc_image_limit', $new_instance)) {
				$old_instance['image_limit'] = $new_instance['dfbc_image_limit'];
			}
			if (array_key_exists('dfbc_image_px', $new_instance)) {
				$old_instance['image_px'] = $new_instance['dfbc_image_px'];
			}
			if (array_key_exists('dfbc_link_target', $new_instance)) {
				$old_instance['link_target'] = $new_instance['dfbc_link_target'];
			}
			if (array_key_exists('dfbc_region_target', $new_instance)) {
				$old_instance['region_target'] = $new_instance['dfbc_region_target'];
			}
			if (array_key_exists('dfbc_lat', $new_instance)) {
				$old_instance['lat'] = $new_instance['dfbc_lat'];
			}
			if (array_key_exists('dfbc_lng', $new_instance)) {
				$old_instance['lng'] = $new_instance['dfbc_lng'];
			}
		}
		return $old_instance;
	}

	/** 
	 * @see WP_Widget::form 
	 */
	function form($instance) {	
		if (!array_key_exists('categories', $instance)) 
			$instance['categories'] = array();
		if (!array_key_exists('limit', $instance)) 
			$instance['limit'] = $this->_limit_min;
		if (!array_key_exists('region_target', $instance)) 
			$instance['region_target'] = $this->_region_target;
		
		echo "<p>Current Categories:</p>\n";
		foreach ($instance['categories'] as $strCategory) {
			echo " &nbsp;".htmlspecialchars($strCategory)."<br>\n";
		}
		if (!is_array($instance['categories']) || !count($instance['categories'])) {
			echo ' &nbsp; - None -<br>';
			$instance['categories'] = array();
		}
		
		$remote_args = array(
			'headers' => array(
				)
			);
		$url = 'http://dealn.it/api-deals-by_category.htm?limit=90';
		$url .= '&ver='.urlencode($this->_plugin_version);
		$url .= '&http_host='.urlencode($_SERVER['HTTP_HOST']);
		
		$remote_result = wp_remote_get($url, $remote_args);
		if (is_wp_error($remote_result)) {
			echo '<span style="color:red;">Critical: Error retrieving category list from remote server.</span>';
			return false;
		}
		$categories = json_decode($remote_result['body']);
		
		// add all option
		$objAll = new stdClass();
		$objAll->score = 999;
		$objAll->taxonomy_name = 'All';
		$categories = array_merge(array($objAll),$categories);
		
		echo "<br><p>Change Categories: (score)</p>\n";
//		echo "<p>Note: </p>\n";
		// since we're using checkboxes, we need a control input in case all checkboxes are unchecked
		printf("<input type=hidden id=\"%s\" name=\"%s\" value=true>\n"
			, $this->get_field_id('dfbc_action')
			, $this->get_field_name('dfbc_action')
			);
		foreach ($categories as $objCategory) {
			printf("<input %s type=checkbox id=\"%s\" name=\"%s[]\" value='%s'>%s (%d)<br>\n"
				// check the box if category is in options array
				, array_search($objCategory->taxonomy_name, $instance['categories']) !== FALSE?'checked':''
				, $this->get_field_id('dfbc_options')
				, $this->get_field_name('dfbc_options')
				, htmlspecialchars($objCategory->taxonomy_name)
				, htmlspecialchars($objCategory->taxonomy_name)
				, $objCategory->score
				);
		}
		echo "<br><p>Number of deals to show:</p>\n";
		printf("<input type=text size=4 id=\"%s\" name=\"%s\" value=%d>\n"
			, $this->get_field_id('dfbc_limit')
			, $this->get_field_name('dfbc_limit')
			, $instance['limit']
			);
		echo "<br><br><p>Title to display:</p>\n";
		printf("<input type=text size=25 id=\"%s\" name=\"%s\" value=\"%s\">\n"
			, $this->get_field_id('dfbc_title')
			, $this->get_field_name('dfbc_title')
			, htmlspecialchars($instance['title'])
			);
		echo "<br><br><p>Show Image:</p>\n";
			printf("<input %s type=checkbox id=\"%s\" name=\"%s\" value='1'>\n"
				, array_key_exists('show_image', $instance) !== FALSE?'checked':''
				, $this->get_field_id('dfbc_show_image')
				, $this->get_field_name('dfbc_show_image')
				);
			printf("<select id=\"%s\" name=\"%s\">\n"
				, $this->get_field_id('dfbc_image_limit')
				, $this->get_field_name('dfbc_image_limit')
				);
			printf("<option %s value=\"width\">Limit Width</option>\n"
				, $instance['image_limit'] == 'width'?'selected':''
				);
			printf("<option %s value=\"height\">Limit Height</option>\n"
				, $instance['image_limit'] == 'height'?'selected':''
				);
			printf("</select>");
			printf("<input type=text size=2 id=\"%s\" name=\"%s\" value=%d>px\n"
				, $this->get_field_id('dfbc_image_px')
				, $this->get_field_name('dfbc_image_px')
				, $instance['image_px']
				);
		echo "<br><br><p>Link Target:</p>\n";
			printf("<select id=\"%s\" name=\"%s\">\n"
				, $this->get_field_id('dfbc_link_target')
				, $this->get_field_name('dfbc_link_target')
				);
			foreach ($this->_link_targets as $strLinkTarget) {
				printf("<option %s value=\"%s\">%s</option>\n"
					, $instance['link_target'] == $strLinkTarget?'selected':''
					, $strLinkTarget
					, $strLinkTarget
					);
			}
			printf("</select>");
			
		echo "<br><br><p>Target deals to location:</p>\n";
		printf("<input %s type=radio id=\"%s\" name=\"%s\" value=ip> User's location based on their IP.\n"
			, $instance['region_target'] == 'ip'?'checked':''
			, $this->get_field_id('dfbc_region_target')
			, $this->get_field_name('dfbc_region_target')
			);
		printf("<br><input %s type=radio id=\"%s\" name=\"%s\" value=latlng> Specified latitude and longitude:\n"
			, $instance['region_target'] == 'latlng'?'checked':''
			, $this->get_field_id('dfbc_region_target')
			, $this->get_field_name('dfbc_region_target')
			);
		printf("<br>Lat:<input type=text size=9 id=\"%s\" name=\"%s\" value=%f>\n"
			, $this->get_field_id('dfbc_lat')
			, $this->get_field_name('dfbc_lat')
			, $instance['lat']
			);
		printf("Lng:<input type=text size=9 id=\"%s\" name=\"%s\" value=%f>\n"
			, $this->get_field_id('dfbc_lng')
			, $this->get_field_name('dfbc_lng')
			, $instance['lng']
			);
			
		echo "<br><br><p>Your Dealn.It <a href=\"http://dealn.it/select.htm\" target=\"_blank\">Affiliate ID</a>:</p>\n";
		printf("<input type=text size=5 id=\"%s\" name=\"%s\" value=%d>\n"
			, $this->get_field_id('dfbc_pub_id')
			, $this->get_field_name('dfbc_pub_id')
			, $instance['pub_id']
			);
	}

} // class DealFeedByCategoryWidget

// register DealFeedByCategoryWidget widget
add_action('widgets_init', create_function('', 'return register_widget("DealFeedByCategoryWidget");'));

