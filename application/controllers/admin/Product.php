<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	public function index()
	{
		$this->get_admin_header();
		$this->page('products/product');
		$this->get_admin_footer();
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/admin/Product.php */