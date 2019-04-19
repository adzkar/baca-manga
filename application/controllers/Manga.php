<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Manga_m');
    }

	public function post()
	{
		$this->form_validation->set_rules('title','Judul','required');
		$this->form_validation->set_rules('alternative_title','Alternative Title','required');
		$this->form_validation->set_rules('author','Author','required');
		$this->form_validation->set_rules('artis','Artis','required');
		$this->form_validation->set_rules('genre','Genre','required');
		$this->form_validation->set_rules('sinopsis','Sinopsis','required');
		if (!$this->form_validation->run()) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect('admin/addmanga');
		}
		// upload file
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1500;

		$this->load->library('upload', $config);

		$file_name = "";

		if ( ! $this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
				$file_name = $data['upload_data']['file_name'];
        }

		$save = Manga_m::create([
			'title' => $_POST['title'],
			'alternative_title' => $_POST['alternative_title'],
			'author' => $_POST['author'],
			'artist' => $_POST['artis'],
			'type' => $_POST['genre'],
			'sinopsis' => $_POST['sinopsis'],
			'thumbnail' => $file_name
		]);
		$this->session->set_flashdata('success', 'Manga Added');
		redirect('admin/addmanga');
	}

	public function hapus()
	{
		$id = $_GET["id"];
		$manga = Manga_m::find($id);
		$manga->delete();
		redirect('admin/view');
	}

	public function update_post($id)
	{
		$manga = Manga_m::find($id);
		$this->form_validation->set_rules('title','Judul','required');
		$this->form_validation->set_rules('alternative_title','Alternative Title','required');
		$this->form_validation->set_rules('author','Author','required');
		$this->form_validation->set_rules('artis','Artis','required');
		$this->form_validation->set_rules('genre','Genre','required');
		$this->form_validation->set_rules('sinopsis','Sinopsis','required');
		if (!$this->form_validation->run()) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect('admin/view');
		}
		// upload file
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1500;

		$this->load->library('upload', $config);

		$file_name = "";

		if ( ! $this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
				$file_name = $data['upload_data']['file_name'];
        }
		if ($file_name != "")
			$manga->update(['thumbnail' => $file_name]);

		$save = $manga->update([
			'title' => $_POST['title'],
			'alternative_title' => $_POST['alternative_title'],
			'author' => $_POST['author'],
			'artist' => $_POST['artis'],
			'type' => $_POST['genre'],
			'sinopsis' => $_POST['sinopsis']
		]);
		$this->session->set_flashdata('success', 'Manga Updated');
		redirect('admin/view');
	}

}