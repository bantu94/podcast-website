<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * User_Edit class
 */
class User_Edit
{
	
	use Model;

	protected $table = 'users';
	protected $primaryKey = 'id';
	protected $loginUniqueColumn = 'email';

	protected $allowedColumns = [

		'firstname',
		'lastname',
		'username',
		'email',
		'password',
		'role',
		'date',
		'bio',
		'image',
	];

	/*****************************
	 * 	rules include:
		required
		alpha
		email
		numeric
		unique
		symbol
		longer_than_8_chars
		alpha_numeric_symbol
		alpha_numeric
		alpha_symbol
	 * 
	 ****************************/
	protected $validationRules = [

		'email' => [
			'email',
			'unique',
			'required',
		],
		'username' => [
			'alpha',
			'required',
		],
		'firstname' => [
			'alpha',
			'required',
		],
		'lastname' => [
			'alpha',
			'required',
		],
	];

}