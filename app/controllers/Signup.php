<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * signup class
 */
class Signup
{
	use MainController;

	public function index()
	{
		// message('Signup is temporarily unavailable');
		// redirect('login');

		$data['user'] = new \Model\User;
		$req = new \Core\Request;
		if($req->posted())
		{
			$data['user']->signup($_POST);
		}

		$this->view('signup',$data);
	}

}
