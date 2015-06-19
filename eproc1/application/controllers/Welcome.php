<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('employee_type_list');
	}
}
