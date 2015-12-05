<?php namespace App\Http\Controllers;

use Form;


class AboutController extends Controller {

    /*public function create()
    {
        return view('about.contact');
    }

   public function store(ContactFormRequest $request)
  {

    return \Redirect::route('contact')
      ->with('message', 'Thanks for contacting us!');

  }
  */
  
 public function contact()
    {
        return view('contact');
    }
  
}