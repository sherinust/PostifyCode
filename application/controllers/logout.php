<?php 

/**
 * Logout Controller Class
 *
 * @author	Khurram Shairyar
 * @link	http://localhost/codeIgniter_postify/index.php/logout
 */


class Logout extends CI_Controller {
	
	/**
	 * Call the default function for Controller class
	 *
	 * @access	public
	 * @param	string
	 * @return	none
	 */
	public function index($strPageName = 'logout')
	{
				
		$this->session->sess_destroy();
		redirect("login",true);			
		
		
	}
	
	
	
	

	
	
	
	
	
	
	
}