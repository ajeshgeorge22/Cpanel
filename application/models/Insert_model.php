<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Insert_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function insert(){
        // grab user input

        $ret="";

        if(strcmp($this->input->post('username'),null) && strcmp($this->input->post('password'),null)  )
        {
            $username = $this->security->xss_clean($this->input->post('username'));
            $password = $this->security->xss_clean($this->input->post('password'));
            
            $flag=0;
           if(!strcmp($this->input->post('admin'),null))
           {
             $data = array(
            
            'name' => $username,
            'password' => $password,
            'level' => 2
                );
           }

           else
           {
             $data = array(
            
            'name' => $username,
            'password' => $password,
            'level' => 1
                );
           }
            
            $query = $this->db->get('users')->result();
             for($i=0;$i<sizeof($query);$i++)
             {
                if(!strcmp($username,$query[$i]->name))
                {
                    
                    $flag=1;
                }
             }

            if($flag==0)
            {
                $this->db->insert('users', $data);
            }
            else
             {
                $ret="user already exist";
             }
            
        }


        else{
              if(strcmp($this->input->post('username'),null) || strcmp($this->input->post('password'),null)  )
               {
                $ret="enter username and password";
               }
              
        }

        $flag=0;

        if(strcmp($this->input->post('host'),null))
        {
            


           if(strcmp($this->input->post('dropdown'),null))
           {

             $query = $this->db->get('hostlist')->result();
             for($i=0;$i<sizeof($query);$i++)
             {
                if(!strcmp($this->input->post('dropdown'),$query[$i]->user))
                {
                   if(!strcmp($this->input->post('host'),$query[$i]->hosts)) 
                    $flag=1;
                }
             }
             
             if($flag==0)
             {
                $data = array(
            
                'user' => $this->input->post('dropdown'),
                'hosts' => $this->input->post('host')
                );

                $this->db->insert('hostlist', $data);
             }
             else
                {
                    $ret="host already exist";
                }
             
            }
           else{
            $ret="select user";
           } 

        }
       
       if(strcmp($this->input->post('deluser'),null))
           {
             $this->db->where('name',$this->input->post('deluser'));
             $this->db->delete('users');

             $this->db->where('user',$this->input->post('deluser'));
             $this->db->delete('hostlist');
           }

       if(strcmp($this->input->post('delhost'),null))
         
            {
              $j=$this->input->post('delhost');
              echo "<script>confirm('".$j."');</script>";
             $this->db->where('hosts',$this->input->post('delhost'));
             $this->db->delete('hostlist');
           }
         

        
        return $ret;
       
    }
}