<?php namespace App\Http\Controllers;

use Form;
use Validator;
use Illuminate\Http\Request;
use Redirect;
use Input;
use Session;
use App\Models\UserContact;

class ContactControllerU extends Controller 
{  
  public function contactupdate()
    {
        return view('contactUpdate');
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
			
			if($validator->fails())
			{
				return Redirect::to('/contactupdate')->withInput()->withErrors($validator);
			}
			
			Session::set('userinfo.message',$postData['message']);
			
			echo "Contact updated successfully";
						
			//$contact1= UserContact::where('email','=',$postData['email'])->get();
			$contact1= UserContact::where('email','=',$postData['email'])->first();
			
			$contact1->message = $request->message;
			$contact1->save();
			
			//echo "email= $request->message<br>";
		}

		$contact1 = UserContact::all();
		$view_data = ['data'=>$contact1];
		//return view('contactupdate',$view_data);
		
		foreach($view_data as $d)
		{
			echo "<pre>";
			print_r($d);
			echo "--"; 
			}	
	}
}
