<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function index(){

		$name = 'Sarjak Gandhi';
		return view('blog')->with([
			'first' => 'Sarjak',
			'last' => 'Gandhi'
			]);
	}

}
