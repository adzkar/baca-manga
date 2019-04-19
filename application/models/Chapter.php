<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	use Illuminate\Database\Eloquent\Model as Eloquent;
	
	class Chapter extends Eloquent
	{
	    protected $table = 'chapter';
	    protected $primaryKey = 'id_chapter';
	    public $timestamps = false;

		protected $fillable = ['id_manga','title_chapter','release_date','filename'];

		public function manga()
				{
					return $this->belongsTo(Manga::class, 'id_manga', 'id_manga');
				}		

	}