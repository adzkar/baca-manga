<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_m');
    }

	// view controller
	public function index()
	{
		$this->validation->wrong_validate([
			'session' => 'status_login',
			'url' => 'admin/login'
		]);
		$data = [
			'title' => 'Dashboard',
			'content' => 'admin/v_adminmenu'
		];
		$this->template->view($data);
	}

	public function login()
	{
		$this->validation->true_validate([
			'session' => 'status_login',
			'url' => 'admin'
		]);
		$data = [
			'title' => 'Login Admin',
			'content' => 'admin/v_adminlogin'
		];
		$this->template->view($data);
	}

	public function addmanga()
	{
		$this->validation->wrong_validate([
			'session' => 'status_login',
			'url' => 'admin/login'
		]);
		$data = [
			'title' => 'Add Manga',
			'content' => 'admin/v_addmanga'
		];
		$this->template->view($data);
	}

	public function addchapter()
	{
		$this->validation->wrong_validate([
			'session' => 'status_login',
			'url' => 'admin/login'
		]);
		$data = [
			'title' => 'Add Manga',
			'content' => 'admin/v_admincreate'
		];
		$this->template->view($data);
	}

	public function view()
	{
		$this->validation->wrong_validate([
			'session' => 'status_login',
			'url' => 'admin/login'
		]);
		$data = [
			'title' => 'Add Manga',
			'content' => 'admin/v_admincari'
		];
		$this->template->view($data);
	}

	// Controller function
	public function post_login()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if (!$this->form_validation->run()) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect('admin/login');
		}
		$data = [
			'username' => $_POST['username'],
			'password' => md5($_POST['password'])
		];
		$login = Admin_m::where($data)->get();
		if ($login->count()) {
			$this->session->set_userdata(['status_login' => 1]);
			redirect('admin');
		}
		$this->session->set_flashdata('errors', 'Wrong Username / Password');
		redirect('admin/login');
	}

	public function logout()
	{
		$this->session->unset_userdata('status_login');
		redirect('admin/login');
	}

}
