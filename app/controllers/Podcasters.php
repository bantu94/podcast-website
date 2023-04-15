<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * podcasters class
 */
class Podcasters
{
	use MainController;

	public function index()
	{

		$this->view('podcasters');
	}

}
