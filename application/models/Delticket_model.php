<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Delticket_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function deleteticket($value)
    {
        $this->db->where('ticketid',$value);
        $this->db->delete('ticket');
    }

}    