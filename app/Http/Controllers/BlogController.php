<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Form;
use Validator;
use Illuminate\Http\Request;
use Redirect;
use Input;
use Session;
use App\Models\UserBlog;
use DB;

class BlogController extends Controller 
{  
	public function create()
	{
		return view('blog');
	}
	
	public function save(Request $request)
	{
		$rules = array(
						'title'		=> ' ',
						'text'      => ' ',
						);
			
		$postData = $request->all();			
		$validator = Validator::make($postData,$rules);
		
		if($validator->fails()){
			return Redirect::to('/create')->withInput()->withErrors($validator);
		}
			
	
        $UserBlog = new UserBlog;
		$UserBlog->title = $request->title;
		$UserBlog->text = $request->text;
		$UserBlog->save();
		return redirect('/');
		
	}

	public function index(Request $request)
	{			
		 return view('index', ['posts' => UserBlog::all()]);
	}
}