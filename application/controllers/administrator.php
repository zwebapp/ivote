<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
			$data['main_content'] = "dashboard.php";

			$this->load->view('backend/template', $data);
	}

}

/* End of file administrator.php */
/* Location: ./application/controllers/administrator.php */