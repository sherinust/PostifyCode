<?php 

/**
 * Home Controller Class
 *
 * @author	Khurram Shairyar
 * @link	http://localhost/codeIgniter_postify/index.php/home
 */
class Home extends CI_Controller {
	
	/**
	 * Call the default function for Controller class
	 *
	 * @access	public
	 * @param	string
	 * @return	none
	 */
	public function index($strPageName = 'home')
	{
				
		if($this->session->userdata('id')!=NULL)
		{
		
			$data["title"] = "Postify";
			
			$this->load->model('User_model');
			
			$result=$this->User_model->getUserLogs($this->session->userdata('id'));
			
			$strHTML='';
			
			$count=0;
			foreach ($result as $row)
				   {
			
					  $date = new DateTime($row->logdatetime);
   					  $time = new DateTime($row->logdatetime);
				
					  $count++;
					  $strHTML.='<tr>';
					  $strHTML.='<td> '.$count.'</td>'; 
					   
					  $strHTML.='<td> '.$date->format('Y-m-d').'</td>'; 
					  
					  $strHTML.='<td> '.$time->format('H:i:s').'</td>'; 
					  $strHTML.='</tr>';
					  
				   }
				   
			$data["strHTML"] = $strHTML;
			
			$this->load->view('home',$data);
		}
		else
			redirect("login",true);			
		
		
	}
	
	
	
	

	
	
	
	
	
	
	
}