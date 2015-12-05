<?php namespace App\Http\Controllers;

use Form;
use Validator;
use Illuminate\Http\Request;
use Redirect;
use Input;
use App\Models\UserContact;

class ContactvController extends Controller 
{  
  public function contactvalid()
    {
        return view('contactvalid');
    }
  

 public function index(Request $request)
	{	
	if ($request->isMethod('post')) 
		{
				$rules = array(
							'name'		=> 'required',
							'email'     => 'required|email',
							'message' 		=> 'required',
							);
			
			$postData = $request->all();
			
			$validator = Validator::make($postData,$rules);
			
			if($validator->fails()){
				return Redirect::to('/contactvalid')->withInput()->withErrors($validator);
			}
			echo "Contact Details:";
		
			//$contact1 = UserContact::all();
			
		}
		$contact1 = UserContact::all();
		$view_data = ['data'=>$contact1];
		return view('contactvalid',$view_data);

	}
}