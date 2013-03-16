<?php 

/**
 * Login Controller Class
 *
 * @author	Khurram Shairyar
 * @link	http://localhost/codeIgniter_postify/index.php/login
 */

class Login extends CI_Controller {
	
	/**
	 * Call the default function for Controller class
	 *
	 * @access	public
	 * @param	string
	 * @return	none
	 */
	public function index($strPageName = 'login')
	{
				
		$data["title"] = "Postify";
		$this->load->view('login',$data);
	}
	
	
	
	

	
	
	
	
	
	
	
}