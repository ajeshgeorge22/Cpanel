<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Getuser_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }


    public function getuser()
    {
    	
    	$sql = "select * from users where level = 2";
        
        
        $query = $this->db->query($sql)->result();
         for($i=0;$i<sizeof($query);$i++)
         {
         	$user[$i]=$query[$i]->name;
         }	
        return $user;
    }
 }