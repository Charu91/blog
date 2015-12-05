<?php namespace App\Http\Controllers;

use Form;
use Validator;
use Illuminate\Http\Request;
use Redirect;
use Input;
use Session;
use App\Model\UserContact;

class ContactControllerI extends Controller 
{  
  public function contactinsert()
    {
        return view('contactinsert');
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
				return Redirect::to('/contactinsert')->withInput()->withErrors($validator);
			}
			
			//Session::set('userinfo.id',$postData['id']);
			Session::set('userinfo.name',$postData['name']);
			Session::set('userinfo.email',$postData['email']);
			Session::set('userinfo.message',$postData['message']);
			
			echo "Contact created successfully";
			
	
        $UserContact = new UserContact;

       // $UserContact->id = $request->id;
		 $UserContact->name = $request->name;
		  $UserContact->email = $request->email;
		   $UserContact->message = $request->message;
        $UserContact->save();
			
		}
		
		//$input = Request::all();
		//App\Models\UserContact::create($input);
		
		$contact1 = UserContact::all();
		$view_data = ['data'=>$contact1];
		return view('contactinsert',$view_data);
		
	}
}