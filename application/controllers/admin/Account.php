<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {

	public function login()
	{
		$this->view('admin/login');
	}

}

/* End of file Account.php */
/* Location: ./application/controllers/admin/Account.php */