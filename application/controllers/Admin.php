<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'content' => 'admin/v_adminmenu'
		];
		$this->template->view($data);
	}

	public function login()
	{
		$data = [
			'title' => 'Login Admin',
			'content' => 'admin/v_adminlogin'
		];
		$this->template->view($data);
	}

	public function addmanga()
	{
		$data = [
			'title' => 'Add Manga',
			'content' => 'admin/v_addmanga'
		];
		$this->template->view($data);
	}

	public function addchapter()
	{
		$data = [
			'title' => 'Add Manga',
			'content' => 'admin/v_admincreate'
		];
		$this->template->view($data);
	}

	public function view()
	{
		$data = [
			'title' => 'Add Manga',
			'content' => 'admin/v_admincari'
		];
		$this->template->view($data);
	}
}
