<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	use Illuminate\Database\Eloquent\Model as Eloquent;
	
	class Manga_m extends Eloquent
	{
	    protected $table = 'manga';
	    protected $primaryKey = 'id_manga';
	    public $timestamps = false;

		protected $fillable = ['title','alternative_title','author','artist','type','sinopsis','thumbnail'];

	    protected $attributes = [
    		'thumbnail' => ''
    	];

		public function chapters()
				{
					return $this->hasMany(Chapter::class,'id_manga');
				}		

	}