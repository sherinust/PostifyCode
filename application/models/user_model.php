<?php

/**
 * User_model Model Class
 *
 * @author	Khurram Shairyar
 */

class User_model extends CI_Model {


	/**
	 * Call constructor function for Model class
	 *
	 * @access	public
	 * @param	none
	 * @return	none
	 */

	public function __construct()
	{
		// Call the Model constructor
        parent::__construct();
	}
	
	
	/**
	 * Insert new user into Database in the registration process
	 *
	 * @access	
	 * @param	none
	 * @return	none
	 */
	 function insertUser()
    {
        
		$data = array(
		   'username' => $_POST['username'] ,
		   'password' => md5($_POST['password']) );
		
		$this->db->insert('user', $data); 
		
	}
	
	/**
	 * Validate username If it already exists in the registration process
	 *
	 * @access	
	 * @param	string
	 * @return	BOOL
	 */
	 
	function validateUsername($username)
	{

		$query = $this->db->get_where('user', array('username' => $username));

		if($query->result_array()==NULL) 
			return FALSE;
		else
			return TRUE;	
	
	}
	
	/**
	 * Authenticate username and pasword If it already exists in the login process
	 *
	 * @access	
	 * @param	string
	 * @return	BOOL,Array
	 */
	function authenticateUser()
	{

		$username   = $_POST['username']; 
        $password = md5($_POST['password']);
        	
		$query = $this->db->get_where('user', array('username' => $username,'password' => $password));
		
		$result=$query->result_array();
		
		
		if($query->result_array()==NULL)
			return FALSE;
		else
		{
			 $logdata = array(
			   'user_id' => $result[0]['id'],
			  'logdatetime' => date('Y-m-d H:i:s')
			  );
			
			$this->db->insert('userlog', $logdata); 
		
			return $result[0];	
		}
	
	}
	
	/**
	 * Get first 5 latest log details of user
	 *
	 * @access	
	 * @param	string
	 * @return	BOOL,Array
	 */
	function getUserLogs($user_id)
	{

		
		$query = $this->db->query('SELECT logdatetime FROM userlog Where user_id='.$user_id.' order by log_id desc LIMIT 0, 5');
		
		if ($query->num_rows() > 0)
			return $query->result();
		else
		 return FALSE;
		
	}
	
}
