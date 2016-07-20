<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Getservice_model extends CI_Model
{
    //var $host_count=0;
    function __construct()
    {
        parent::__construct();
    }

    function getservice()

      {
          $p=0;$host_count=0;
          $t=0;$r=0;$k=0;

         $username = $this->session->userdata['username'];
         $query = $this->db->get('hostlist')->result();  
         for($i=0;$i<sizeof($query);$i++)
            {
              if(!strcmp($query[$i]->user,$username))
                {
                  $hosts[$i]=$query[$i]->hosts;
                  $host_count++;
                  $stat[$hosts[$i]]=$this->status($hosts[$i],$host_count);
                } 
            }

            return $stat;
        
    }

    function status($hostname,$host_count)
    {
         $p=0;GLOBAL $service,$val,$servlist,$statuslist,$list,$stat,$slist,$stalist,$sl,$hoser,$hostat,$sercount,$p,$t,$r,$k,$serv;
          $t=0;$r=0;$k=0;$hostat=0;$hoser=0;
       $nagios_service_status = ['1' => 'pending', '2' => 'ok', '4' => 'warning', '8' => 'unknown', '16' => 'critical' ];

        $ur="http://54.238.58.188/nagios/cgi-bin/statusjson.cgi?query=servicelist&details=true&hostname=$hostname&servicestatus=ok+warning+critical+unknown";
      
       $cur = curl_init();
       curl_setopt($cur, CURLOPT_URL, $ur);
       curl_setopt($cur, CURLOPT_RETURNTRANSFER, TRUE);
       curl_setopt($cur, CURLOPT_USERPWD, "nagiosadmin:nagios");
       curl_setopt($cur, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        $pag = curl_exec($cur);

           $pattern = '/:\\\+/';
          $replacement = '';
           //echo preg_replace($pattern, $replacement, $page, -1 );
    
        // print_r(json_decode(preg_replace($pattern, $replacement, $page, -1 ),true));
        
        $jso = json_decode(preg_replace($pattern, $replacement, $pag, -1 ), true);
        //print_r($pag);
        //print_r($jso["data"]);die();

        foreach($jso["data"]["servicelist"] as $service)
        {
          $servlist[$hoser++]=array_keys($service);
          $statuslist[$t]=array_values($service);

          //var_dump($statuslist);$t++;


         }
        
         //var_dump($host_count);
         //for($p=0;$p<$host_count;$p++)
         //{
           //$list[$p]=$servlist[$p];
           //var_dump($host_count);

         //}
         /*for($p=0;$p<$host_count;$p++)
         {

           $sercount[$p]=sizeof($servlist[$p]);
           


         }

         foreach($statuslist as $stalist => $sl[$hostat++])
         {
           $slist[$r]=$stalist;
           // var_dump($sl);
           $r++;
         }
         
         for($j=0;$j<sizeof($servlist[$j]);$j++)
          {

            $serv[$servlist[$j]]=$sl[$j];
          }
          */

         if(curl_errno($cur)) // check for execution errors
         {
           echo 'Scraper error: ' . curl_error($cur);
            exit;
         }

           curl_close($cur);
          
          return $service;
    }
}
