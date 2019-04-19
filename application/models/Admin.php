<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	use Illuminate\Database\Eloquent\Model as Eloquent;
	
	class Admin extends Eloquent
	{
	    protected $table = 'admin';
	    
	    public $timestamps = false;

		protected $fillable = ['username','password'];
		protected $hidden = ['password'];

	}