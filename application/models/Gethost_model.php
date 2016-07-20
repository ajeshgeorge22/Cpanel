<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gethost_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    public function gethoststat()
    {
       
    	$url="http://54.238.58.188/nagios/cgi-bin/statusjson.cgi?query=hostlist&hoststatus=up+down+unreachable+pending";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_USERPWD, "nagiosadmin:nagios");
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        $count;$i=0;$j=0;$k=0;
        $page = curl_exec($curl);
        //print_r($page);

        $json = json_decode($page, true);

        GLOBAL $hostname,$value,$hostvalue;

        foreach($json["data"]["hostlist"]as $hostname => $value)
         {
           GLOBAL $hosts,$host_count;

           $hosts[$i]=$hostname;
          
          $i=$i+1;
          $host_count=$i;
        

         // nagios_get_services_status($hostname);
         }
       
         foreach($json["data"]["hostlist"] as $hostvalue)
           {
           GLOBAL $host_status;GLOBAL $nagios_host_status;
           $nagios_host_status =['1' => 'pending', '2' => 'up', '4' => 'down' , '8' => 'unreachable'];
           $host_status[$hosts[$k]]=$nagios_host_status[$hostvalue];

           

            $k++;
           }

         

          if(curl_errno($curl)) // check for execution errors
           {
            echo 'Scraper error: ' . curl_error($curl);
            exit;
           }

            curl_close($curl);


            return $host_status;


    }
}
