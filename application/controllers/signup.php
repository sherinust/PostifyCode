<?php 

/**
 * Signup Controller Class
 *
 * @author	Khurram Shairyar
 * @link	http://localhost/codeIgniter_postify/index.php/signin
 */
 
class Signup extends CI_Controller {
	
	/**
	 * Call the default function for Controller class
	 *
	 * @access	public
	 * @param	string
	 * @return	none
	 */
	 
	public function index($strPageName = 'signup')
	{
		$data["title"] = "Postify";
		
		$this->load->model('User_model');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required','trim|required|md5');
		
		
		if ($this->form_validation->run() == FALSE)
			$this->load->view('signup',$data);
		else
		{
			$this->User_model->insertUser();
			$this->load->view('formsuccess');
		}	
				
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
		
		if ($this->User_model->validateUsername($str)==TRUE)
		{
			// check here, if the username already exits in DB
			$this->form_validation->set_message('username_check', 'The %s '.$str.' already exists');
			return FALSE;
		}
		else
			return TRUE;
		
	}

	

	
}