<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * MostListned class
 */
class MostListned
{
	use MainController;

	public function index()
	{

		$this->view('most_listned');
	}

}
