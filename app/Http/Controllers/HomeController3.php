<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
class HomeController3 extends Controller {
	function child()
	{
		return view('child');
	}
}