<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function login()
	{
		$this->load->view('pages/auth/login');
	}
	public function register()
	{
		$this->load->view('pages/auth/register');
	}
}
