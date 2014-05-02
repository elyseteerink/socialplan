<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_MySocialPlan extends Module {

	public $version = '0.1';

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'My Social Plan',
                                'nl' => 'Mijn Socialplan'
			),
			'description' => array(
				'en' => 'My Social Plan',
                                'nl' => 'Mijn Socialplan'
			),
			'frontend' => TRUE,
			'backend' => FALSE
		);
	}

	public function install()
	{
            $this->load->driver('Streams');
            
            $stream_name = "socialplan_stream";
            $stream_slug = "socialplan_slug";
            $namespace = "socialplan_namespace";
            $this->streams->streams->add_stream($stream_name, $stream_slug, $namespace);
            
		// $this->dbforge->drop_table('sample');
		// $this->db->delete('settings', array('module' => 'sample'));

		// $sample = array(
  //                       'id' => array(
		// 							  'type' => 'INT',
		// 							  'constraint' => '11',
		// 							  'auto_increment' => TRUE
		// 							  ),
		// 				'name' => array(
		// 								'type' => 'VARCHAR',
		// 								'constraint' => '100'
		// 								),
		// 				'slug' => array(
		// 								'type' => 'VARCHAR',
		// 								'constraint' => '100'
		// 								)
		// 				);

		// $sample_setting = array(
		// 	'slug' => 'sample_setting',
		// 	'title' => 'Sample Setting',
		// 	'description' => 'A Yes or No option for the Sample module',
		// 	'`default`' => '1',
		// 	'`value`' => '1',
		// 	'type' => 'select',
		// 	'`options`' => '1=Yes|0=No',
		// 	'is_required' => 1,
		// 	'is_gui' => 1,
		// 	'module' => 'sample'
		// );

		// $this->dbforge->add_field($sample);
		// $this->dbforge->add_key('id', TRUE);

		// if($this->dbforge->create_table('sample') AND
		//    $this->db->insert('settings', $sample_setting) AND
		//    is_dir($this->upload_path.'sample') OR @mkdir($this->upload_path.'sample',0777,TRUE))
		// {
		// 	return TRUE;
		// }

		return true;
	}

	public function uninstall()
	{
            $this->load->driver('Streams');
            
            $stream_slug = "socialplan_slug";
            $namespace = "socialplan_namespace";
            $this->streams->streams->delete_stream($stream_slug, $namespace);
            
		// $this->dbforge->drop_table('sample');
		// $this->db->delete('settings', array('module' => 'sample'));
		// {
		// 	return TRUE;
		// }

		return true;
	}


	public function upgrade($old_version)
	{
		// Your Upgrade Logic
		return TRUE;
	}

	public function help()
	{
		// Return a string containing help info
		// You could include a file and return it here.
		return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
	}
}
/* End of file details.php */
