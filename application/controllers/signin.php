<?php 

/**
 * Signin Controller Class
 *
 * @author	Khurram Shairyar
 * @link	http://localhost/codeIgniter_postify/index.php/signin
 */

class Signin extends CI_Controller {
	
	/**
	 * Call the default function for Controller class
	 *
	 * @access	public
	 * @param	string
	 * @return	none
	 */
	public function index($strPageName = 'signin')
	{
		$data["title"] = "Postify";
		
		$this->load->model('User_model');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required','trim|required');
		
		
		if ($this->form_validation->run() == FALSE)
			$this->load->view('login',$data);
		else
			redirect("home",true);			
	
				
	}
	
	
	/**
	 * Check if the uername of a user already exists in Database
	 *
	 * @access	
	 * @param	string
	 * @return	BOOL
	 */
	public function username_check($str)
	{
		$this->load->model('User_model');
		
		$result=$this->User_model->authenticateUser();
		if ($result==FALSE)
		{
			// check here, if the username already exits in DB
			$this->form_validation->set_message('username_check', 'The %s '.$str.' doesnot exist or password doesnot match');
			return FALSE;
		}
		else
		{
			
			$session_data = array(
                   'id'  => $result['id'],
                   'username'     => $result['username']
				   );

			$this->session->set_userdata($session_data);
			
			return TRUE;
		}
	}
	
	
	
	
}