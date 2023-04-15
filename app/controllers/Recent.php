<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * recent class
 */
class Recent
{
	use MainController;

	public function index()
	{

		$this->view('recent');
	}

}
