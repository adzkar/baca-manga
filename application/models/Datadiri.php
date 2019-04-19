<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
class Datadiri extends Eloquent
{
    protected $table = 'tb_datadiri';
    public $timestamps = false;
}