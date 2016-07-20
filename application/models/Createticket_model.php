<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Createticket_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
     
     public function createticket()
     {  

     	        $sub=$this->input->post('subject');
                $des=$this->input->post('description');
                
                if(strcmp($sub,null))
                {
                	$username = $this->session->userdata['username'];
                   $created=0;
                   $issue = new Issue; 
                   $issues = $issue->find ('all');

                for ($i=0; $i < count($issues); $i++) 
                {
    
    
                  if(!strcmp($issues[$i]->subject,$sub) && !strcmp($issues[$i]->description,$des))
                   {
                     $created=1;
                   }
    
     
                 }

                 if($created==0)
                 {
                   $issue = new Issue (array ('subject' => $sub, 'project_id' => '1','description' => $des));
                   $issue->set ('status_id', 1);
                   $issue->set ('priority_id', 5);
                   $issue->set ('location_id', 1);
                   $issue->set ('tracker_id', 3);
                   $issue->save ();

                   $ticket_id=$issue->id;

                   $data = array
                   (
            
                   'user' => $username,
                   'ticketid' => $ticket_id,
                   'status' => 'New'
                    );
                   $this->db->insert('ticket', $data);
                   
                 } 
                }

                else
                {
                  $err="subject required";
                  return $err;

                }
     	         


                 
 
    }
}