<?php

class UsersController 
{
	public function index()
	{
		$users = App::get('database')->selectAll('user');
		return view('users',compact('users'));
	}
	public function store()
	{
		App::get('database')->insert('user',['name' => $_POST['name']]);

		header('Location: /users');
	}
}