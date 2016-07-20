<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gethostname_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    public function gethostname($user)
    {
    	$sql = "select * from hostlist";
        
        
        $query = $this->db->query($sql)->result();
        $k=0;
        
         for($i=0;$i<sizeof($query);$i++)
         {
         	if(!strcmp($query[$i]->user,$user))

             {
         	   $hostname[$k]=$query[$i]->hosts;
         	   $k++;

         	 }
         }	

         return $hostname;
    }
}