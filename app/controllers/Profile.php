<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * profile class
 */
class Profile
{
	use MainController;

	public function index($slug=null)
	{
		$data['section'] = "overview";

		$ses = new \Core\Session;

		$user = new \Model\User;
		if (empty($slug) && $ses->is_logged_in()) {
			$slug = $ses->user('slug');
		}
		$data['row'] = $user->first(['slug'=>$slug]);

		$this->view('profile',$data);
	}


	public function settings()
	{
		$data['section'] = "settings";


		$ses = new \Core\Session;
		$req = new \Core\Request;

		$user = new \Model\User_Edit;
		$data['user'] = $user;

		if (empty($slug) && $ses->is_logged_in()) {
			$slug = $ses->user('slug');
		}

		$data['row'] = $user->first(['slug'=>$slug]);
		if (!$ses->is_logged_in()) {
			redirect('login');
		}

		if($req->posted() && $data['row']) {

			$post_data = $req->post();

			// add row id for validation 
			$post_data['id'] = $data['row']->id;

			// Validate Image 
			$files = $req->files();
			$folder = 'uploads/';
			if(!file_exists($folder)) {
				mkdir($folder,0777,true);
				file_put_contents($folder.'index.php', "Access Denied");
			}

			$image_added = false;
			foreach ($files as $file) {

				$allowed = ['image/jpeg','image/png','image/webp'];
				if (in_array($file['type'], $allowed)) {
					# code...
			        $image_added = true;
					$destination = $folder . time(). $file['name'];
					$image = new \Model\Image;
					$image->resize($destination,800);
				}else {
					$user->errors['image'] = "Image type not supported";
				}

				
			}

			if($user->validate($post_data)) {
				// move image file it exists 
				if($image_added) {
     				move_uploaded_file($file['tmp_name'], $destination);
					$post_data['image'] = $destination;

					// delete old image on edit 
					if (file_exists($data['row']->image)) {
						unlink($data['row']->image);
					}
				}
				   
				// Ignore password if empty 
				if(empty($post_data['password']))
				   unset($post_data['password']);

				$user->update($data['row']->id,$post_data);
    			redirect('profile/settings');
			}
		}
		$this->view('profile',$data);
	}


	public function podcasts()
	{
		$data['section'] = "podcasts";

		$ses = new \Core\Session;

		$user = new \Model\User;
		if (empty($slug) && $ses->is_logged_in()) {
			$slug = $ses->user('slug');
		}
		$data['row'] = $user->first(['slug'=>$slug]);
		$this->view('profile',$data);
	}

}
