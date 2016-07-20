<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){ 
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
    
        
        // Prep the query
        //$this->db->where('username', $username);
        //$this->db->where('password', $password);

            $sql = "select * from users where name = '" . $username . "' and password = '" . $password . "'";
            
            // Run the query
            //$query = $this->db->get('users');
            $query = $this->db->query($sql)->result();
        //var_dump($query);
         //echo $query[0]->level;   
        // Let's check if there are any results
        if(sizeof($query)==1)
        { 
            // If there is a user, then create session data
            //$row = $query->row();
            $data = array(
                    'userid' => $query[0]->userid,
                    'username' => $query[0]->name,
                    'level' => $query[0]->level,
                    'validated' => true,
                    'logged_in' => true
                    );
            $this->session->set_userdata($data);
            $this->db->insert('ci_sessions',$data);
            
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}