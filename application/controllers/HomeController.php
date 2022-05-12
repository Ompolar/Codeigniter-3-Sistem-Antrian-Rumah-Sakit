<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function home()
	{
		$data['title']='Sistem Antrian RS - Dashboard';
		$this->load->view('layouts/dashboard/header', $data);
		$this->load->view('layouts/dashboard/sidebar');
		$this->load->view('pages/dashboard/home');
		$this->load->view('layouts/dashboard/footer');

	}
	
}
