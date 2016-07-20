<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Host_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function gethost()
    {
    	$i=0;
    	
       $username = $this->session->userdata['username'];
       //var_dump($username);
       $query = $this->db->get('hostlist')->result();  
       //var_dump($query);
       return $query;
    }
}