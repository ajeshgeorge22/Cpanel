<?php

   $connect=mysql_connect("localhost","root","qburst");
   if (!$connect)die("server not found");
   mysql_select_db("monitor") or die("database not found");

require_once ('phpactiveresource-master/ActiveResource.php');


class Issue extends ActiveResource {
    var $site = 'http://ajeshg:qburst@10.2.0.228:3000/';
    var $request_format = 'xml'; // REQUIRED!
}

$issue = new Issue;
$issues = $issue->find ('all');
$t=0;
$query=mysql_query("SELECT * FROM ticket");
while($data = mysql_fetch_array($query))
      {
         $tickid[$t]=$data["ticketid"];
         
        
         $t++;
       }

for ($i=0; $i < count($issues); $i++) {
        
     for($j=0;$j<sizeof($tickid);$j++)
      {echo $tickid[$j];
       if($issues[$i]->id==$tickid[$j])
        {
           
         $stat=$issues[$i]->status["name"];
         
         mysql_query("UPDATE ticket SET status='$stat' WHERE ticketid='$tickid[$j]'");
        }
      
      }
     
}


// find and update an issue
//$issue->find (2);
//echo $issue->subject;
//$issue->set ('subject', 'This is New Subject')->save ();
// update status
//$issue->set ('status_id', 2)->save();


//
?>


