<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model(['Manga_m','Chapter_m']);
    }

	public function index()
	{
		$data = [
			'title' => 'Mangaku | Boruto &#8211; Baca Manga Indonesia, Nonton Anime, Film Subtitle Indonesia | Komik Online',
			'content' => 'home/home_v',
			'data' => [
				'chapter' => Chapter_m::All()
			]
		];
		$this->template->view_home($data);
	}

	public function baca($id = null)
	{
		$manga = Manga_m::find($id);
		$data = [
			'title' => $manga->title,
			'content' => 'home/InfoAnime',
			'data' => [
				'chapter' => $manga->chapters,
				'manga' => $manga
			]
		];
		$this->template->view_home($data);
	}

	public function chapter($id = null)
	{
		$chapter = Chapter_m::find($id);
		$data = [
			'title' => $chapter->title_chapter,
			'content' => 'home/Isimanga',
			'data' => [
				'chapter' => $chapter
			]
		];
		$this->template->view_home($data);
	}

}