<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Config;
use DB;

class UserBlog extends Model 
{
	protected $table = 'blog_u';
	
	 protected $fillable = ['title', 'text'];

	
}
