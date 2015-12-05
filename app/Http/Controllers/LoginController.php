<?php namespace App\Http\Controllers;

use Form;
use Validator;
use Illuminate\Http\Request;
use Redirect;
use Input;
use App\User;

class LoginController extends Controller 
{  
  public function login()
    {
        return view('login');
    }
  
	public function index(Request $request)
	{
		
		if ($request->isMethod('post')) {
			
			$rules = array(
							'email'    => 'required|email|max:255|unique:users',
							'password' => 'required|min:5',
						  );
			
			$postData = $request->all();
			
			$validator = Validator::make($postData,$rules);
			
			if($validator->fails()){
				return Redirect::to('/login')->withInput()->withErrors($validator);
			}
			echo "Welcome";
			echo Form::email($name, $value = null, $attributes = array());
			//return Redirect::to('/login');
		}
		
	}
	public function insertProfile($postData)
	{
		$Login1 = new Login1;
		
		$Login1->email = $postData['email'];
		$Login1->password = bcrypt($postData['password']);
		//$Login1->name = Session::get('userinfo.contact_fname')." ".Session::get('userinfo.contact_lname');
		$Login1->save();
		
	}
	
}