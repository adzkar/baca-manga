<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Datadiri');
    }

    public function index()
    {
    	$data = Datadiri::All();
    	var_dump($data);
    }
}
