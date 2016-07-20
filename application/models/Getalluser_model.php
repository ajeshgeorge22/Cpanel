<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Getalluser_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }


    public function getalluser()
    {

    	
    	$sql = "select * from users";
        
        
        $query = $this->db->query($sql)->result();
         
        return $query;
    }
 }