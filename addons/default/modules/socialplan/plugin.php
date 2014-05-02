<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Plugin_Socialplan extends Plugin
{
	/**
	 * Item List
	 * Usage:
	 * 
	 * {{ sample:items limit="5" order="asc" }}
	 *      {{ id }} {{ name }} {{ slug }}
	 * {{ /sample:items }}
	 *
	 * @return	array
	 */
	// function items()
	// {
	// 	$limit = $this->attribute('limit');
	// 	$order = $this->attribute('order');
		
	// 	return $this->db->order_by('name', $order)
	// 					->limit($limit)
	// 					->get('sample_items')
	// 					->result_array();
	// }
    
       function get_socialplan_menu()
       {
           
       }
}

/* End of file plugin.php */