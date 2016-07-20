<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gettickdet_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }


    public function getticket()
    {
    	$i=0;
    	
       
       //var_dump($username);
       $query = $this->db->get('ticket')->result();  
       //var_dump($query);
       return $query;
    }
}     