<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends MY_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('Project_M');
	
}
	public function index()
	{
		$all_prj = $this->Project_M->all();
		print_r($all_prj);die;

		$this->get_admin_header();
		$this->page('dasboard/dasboard',$this->data);
		$this->get_admin_footer();
	}

}

/* End of file Dasboard.php */
/* Location: ./application/controllers/admin/Dasboard.php */