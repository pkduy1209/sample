<?php
namespace Pkduy1209\Sample;

use App\Http\Controllers\Controller;


Class SampleController extends Controller
{
	public function index()
    {
    	return view('sample::index', ['name' => 'Laravel 5.4']);
    }
}