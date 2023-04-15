<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * popular class
 */
class Popular
{
	use MainController;

	public function index()
	{

		$this->view('popular');
	}

}
