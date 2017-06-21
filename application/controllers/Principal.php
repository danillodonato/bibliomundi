<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->helper('url');
	}
	
	public function index() {
		$this->load->model('principal_model');
		$dados = $this->principal_model->get_sales();
		$this->load->view('principal_message', $dados);
		// $this->load->view('principal_message');
	}
}
