<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	

	public function index()
	{
		
	}
	
	public function jsonPegawai()
	{
		$User = User::all();
		return $User;
	}


	public function create()
	{
		//
	}

	public function store()
	{
		//
	}

	public function show($id)
	{
		//
	}


	public function edit($id)
	{
		//
	}



	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
