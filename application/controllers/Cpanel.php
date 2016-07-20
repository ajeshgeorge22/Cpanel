<?php

class Cpanel extends CI_Controller 

{


	function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }


   public function index()
   {

   	 
     $this->load->model('login_model');
     $this->load->model('host_model');
     $this->load->model('gethost_model');
     $this->load->model('getservice_model');
     
     $this->form_validation->set_rules("username", "username", "trim|required");
     $this->form_validation->set_rules("password", "password", "trim|required"); 
     $data['error'] = "";

      if ($this->form_validation->run() === FALSE)
          {
              $this->load->view('cpanel/index',$data);
          }

       else
                 {
                   
                    $result = $this->login_model->validate();
                    if(! $result)
                    {

                    $data['error']="username and password does not match";
                    $this->load->view('cpanel/index',$data); 
                    }
                    else
                    {
                       if($this->session->userdata['level']==2)
                       {
                         
                         header("location:".site_url('cpanel/home'));
                        }
                        elseif($this->session->userdata['level']==1)
                        {
                            
                            header("location:".site_url('cpanel/adminhome'));
                        }    

                    }           



                 }
    

   }

   public function register()
   {

   	 

     $this->load->view('cpanel/register');

   }

   public function home()
   {

   	        if ($this->session->userdata('username') === NULL)
            { 

            //echo "<script>alert(".$a.");</script>";
              
              header("location:".site_url('cpanel/index'));
            }
             
             $this->load->model('login_model');
             $this->load->model('host_model');
             $this->load->model('gethost_model');
             $this->load->model('getservice_model');
             $this->load->model('gethostname_model');
             $this->load->model('createticket_model');
             $this->load->model('gettickdet_model');
             $this->load->library('phpactiveresource/activeResource');

              $data["error"]="";
            $stat["ticket"]=$this->gettickdet_model->getticket();

            $list = $this->host_model->gethost();
            $stat["list"]=$list;
            $host_status = $this->gethost_model->gethoststat();
            $stat["host_status"]= $host_status;
            $services=$this->getservice_model->getservice();
            //var_dump($services);
            $stat["services"]=$services;

            $username = $this->session->userdata['username'];
            $stat["hostname"]=$this->gethostname_model->gethostname($username);
            

           
   	         $this->load->view('cpanel/home',$stat);

   	         if($this->input->post('submit'))
            {
                $data["error"]=$this->createticket_model->createticket();

                $data["ticket"]=$this->gettickdet_model->getticket();
                header("location:".site_url('cpanel/home'));


            }
      
   }

   public function adminhome()
        {
             
              

            if ($this->session->userdata('username') === NULL)
            { 

            
              
              header("location:".site_url('cpanel/index'));
            }

             $this->load->model('login_model');
             $this->load->model('host_model');
             $this->load->model('gethost_model');
             $this->load->model('getuser_model');
             $this->load->model('getalluser_model');
              $this->load->model('insert_model');
              $this->load->model('gettickdet_model');
              $stat["ticket"]=$this->gettickdet_model->getticket();
 
            $list = $this->host_model->gethost();
            $stat["list"]=$list;
            $host_status = $this->gethost_model->gethoststat();
            $stat["host_status"]= $host_status;
            $users=$this->getuser_model->getuser();
            $stat["users"]=$users;
            $stat["allusers"]=$this->getalluser_model->getalluser();

             
             $this->load->view('cpanel/adminhome',$stat);
             if($this->input->post('submit'))
            {
                
                $stat["err"]=$this->insert_model->insert();
                header("location:".site_url('cpanel/adminhome'));
            }

        

        }



   public function remove($h)
        {
            $this->load->helper('html');
             $this->load->helper('url');
             $this->load->helper('form');
             $this->load->library('form_validation');
             $this->load->model('createticket_model');
             $this->load->model('gettickdet_model');
             $this->load->model('delticket_model');
             $this->load->library('session');
            $this->load->library('phpactiveresource/activeResource');
            $this->delticket_model->deleteticket($h);
            
             header("location:".site_url('cpanel/home'));

        }



        public function logout()
        {
            
             $this->load->model('login_model');
             $this->load->model('host_model');
             $this->load->model('gethost_model');
             $this->load->model('getservice_model');
             

             $data = array(
                    'userid' => $this->session->userdata['userid'],
                    'username' => $this->session->userdata['username'],
                    'level' => $this->session->userdata['level'],
                    'validated' => true,
                    'logged_in' => true
                    );
             
             $this->session->unset_userdata($data);
             $this->session->sess_destroy();
             $this->session->userdata['logged_in']=false;
             $this->db->where('username',$this->session->userdata['username']);
             $this->db->delete('ci_sessions');
            
            
             header("location:".site_url('cpanel/index')); 
        }



}
