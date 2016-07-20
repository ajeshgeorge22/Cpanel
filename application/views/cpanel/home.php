<?php

$username = $this->session->userdata['username'];
$tickets=0;
for($i=0;$i<sizeof($ticket);$i++)
 {
   if(!strcmp($username,$ticket[$i]->user))
      {
         $tickets++;
      }
  }
                  

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cpanel | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/_all-skins.min.css');?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script type="text/javascript" language="javascript">
    setTimeout('window.location.reload();', 30000);
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo site_url('cpanel/remove');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CPanel</b>LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Host status check
                        <small class="pull-right">100%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 100%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">100% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Service status check
                        <small class="pull-right">100%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 100%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">100% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Ticket status check
                        <small class="pull-right">100%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 100%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">100% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                 
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <?php  //echo base_url('assets/img/'.$username.'.jpg');?>
              <img src="<?php echo base_url('assets/img/index.jpg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata['username'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/img/index.jpg');?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata['username'];?>
                  <small>Member</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <!--<a href="#">Followers</a>-->
                  </div>
                  <div class="col-xs-4 text-center">
                    <!--<a href="#">Sales</a>-->
                  </div>
                  <div class="col-xs-4 text-center">
                    <!--<a href="#">Friends</a>-->
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
                </div>
                <div class="pull-right">

                  <a href="<?php echo site_url('cpanel/logout');?>" class="btn btn-default btn-flat">Sign out&nbsp;<i class="fa   fa-sign-out"></i></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/index.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata['username'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa  pull-right"></i>
          </a>
         
        </li>
        <li class="treeview">
          <a href="#host_status">
            <i class="fa fa-files-o"></i>
            <span>Host Status</span>
            <span class="label label-primary pull-right"></span>
          </a>
          
        </li>
        <li>
          <a href="#service_status">
            <i class="fa fa-th"></i> <span>Service Status</span>
            <small class="label pull-right bg-green"></small>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#new_ticket">
            <i class="fa fa-edit"></i> <span>New Ticket</span>
            <i class="fa  pull-right"></i>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#ticket_status">
            <i class="fa fa-table"></i> <span>Ticket Status</span>
            <i class="fa  pull-right"></i>
          </a>
          
        </li>
        <li>
          
        </li>
        <li>
          
        </li>
        <li class="treeview">
          
        </li>
        <li class="treeview">
          
            </li>
            <li></li>
          </ul>
        </li>
        <li></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">70<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-clone"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tickets</span>
              <span class="info-box-number"><?php echo $tickets;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-certificate"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Check</span>
              <span class="info-box-number">OK</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa  fa-desktop"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Hosts</span>
              <span class="info-box-number"><?php echo sizeof($hostname);?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     <a name="host_status"></a>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border" >
              <h3 class="box-title">Host Status Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
              <div class="row">

                <?php

               for($j=0;$j<sizeof($list);$j++)
                   {?>           
                    <?php 
                    for($k=0;$k<sizeof($hostname);$k++)
                     { 
                      if(!strcmp($list[$j]->hosts,$hostname[$k]))
                       {
                       
                        
                    if((!strcmp($host_status[$list[$j]->hosts],"pending"))||(!strcmp($host_status[$list[$j]->hosts],"up")))
                      {?>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green">
                      <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                      <div class="info-box-content">
                       <span class="info-box-text">Up</span>
                       <span class="info-box-number"><?php echo $list[$j]->hosts;?></span>

                       <div class="progress">
                         <div class="progress-bar" style="width: 100%"></div>
                       </div>
                       <span class="progress-description">
                        
                       </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                   <?php }
                    else {

                   ?>
                   
                <div class="col-md-3 col-sm-6 col-xs-12">
                   <div class="info-box bg-red">
                      <span class="info-box-icon"><i class="fa fa-thumbs-o-down"></i></span>

                      <div class="info-box-content">
                           <span class="info-box-text">Down</span>
                           <span class="info-box-number"><?php echo $list[$j]->hosts;?></span>

                           <div class="progress">
                              <div class="progress-bar" style="width: 70%"></div>
                           </div>
                           <span class="progress-description">
                             
                           </span>
                      </div>
                        <!-- /.info-box-content -->
                   </div>
                     <!-- /.info-box -->
                </div>
                  <?php }}}}?>

<!--                <div class="col-md-8" style="visibility:hidden">
                  <p class="text-center">
                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                  </p>

                  <div class="chart">
                    < Sales Chart Canvas >
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  < /.chart-responsive >
                </div>-->
                <!-- /.col -->
<!--                <div class="col-md-4" style="visibility:hidden" >
                  <p class="text-center">
                    <strong>Goal Completion</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Add Products to Cart</span>
                    <span class="progress-number"><b>160</b>/200</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                    </div>
                  </div>
                  <! /.progress-group >
                  <div class="progress-group">
                    <span class="progress-text">Complete Purchase</span>
                    <span class="progress-number"><b>310</b>/400</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                    </div>
                  </div>
                  <! /.progress-group >
                  <div class="progress-group">
                    <span class="progress-text">Visit Premium Page</span>
                    <span class="progress-number"><b>480</b>/800</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                  <! /.progress-group >
                  <div class="progress-group">
                    <span class="progress-text">Send Inquiries</span>
                    <span class="progress-number"><b>250</b>/500</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div>
                  <! /.progress-group >
                </div>-->
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
<!--              <div class="row" style="visibility:hidden">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TOTAL REVENUE</span>
                  </div>
                  <! /.description-block >
                </div>
                <! /.col >
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL COST</span>
                  </div>
                  <! /.description-block >
                </div>
                <! /.col >
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                  </div>
                  <! /.description-block >
                </div>
                <! /.col >
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                  <! /.description-block >
                </div>
              </div>-->
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <a name="service_status"></a>
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Service Status Report</h3>

              <div class="box-tools pull-right" >
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">

                   
               <?php
      for($j=0;$j<sizeof($list);$j++)
          {

             for($k=0;$k<sizeof($hostname);$k++)
                     { 
                      if(!strcmp($list[$j]->hosts,$hostname[$k]))
                       {

                          $servlist[$j]=array_keys($services[$list[$j]->hosts]);
                          $statuslist[$j]=array_values($services[$list[$j]->hosts]);

                        ?>


                <div class="col-md-3">
                   <div class="box box-default collapsed-box box-solid">
                     <div class="box-header with-border">
                       <h3 class="box-title">Host:<br><?php echo $list[$j]->hosts;?></h3>

                      <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                         </button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                     <!-- /.box-header -->
                    <div class="box-body">

                      <?php


               for($q=0;$q<sizeof($services[$list[$j]->hosts]);$q++)
               {    
                
                
                if(!strcmp($list[$j]->hosts,$statuslist[$j][$q]["host_name"]))
                   {

                       if(!strcmp($servlist[$j][$q],$statuslist[$j][$q]["description"]))
                         {

                           if($statuslist[$j][$q]["status"]==16)
                             {?>
                                <div id="serv<?php echo$j;echo $q;?>">
                                <i class="fa  fa-level-down"></i>
                                 <?php  echo $servlist[$j][$q];
                                   echo "<script>document.getElementById('serv$j$q').style.backgroundColor='#ff2d1a'</script>";
                                   echo "<script>document.getElementById('serv$j$q').style.color='#fff'</script>";
                                   echo "<script>document.getElementById('serv$j$q').style.margin='5px'</script>";
                                 echo "<br>";?>
                                </div>
                                <?php 
                             }
                            else
                            {?>
                               <div id="serv<?php echo$j;echo $q;?>">
                               <i class="fa  fa-level-up"></i>
                               <?php echo $servlist[$j][$q];
                                  echo "<script>document.getElementById('serv$j$q').style.backgroundColor='#2a9a51'</script>";
                                  echo "<script>document.getElementById('serv$j$q').style.color='#fff'</script>";
                                   echo "<script>document.getElementById('serv$j$q').style.margin='5px'</script>";
                                echo "<br>";?>
                               </div>
                               <?php
                            }
                          }
                     }
                 }            
                              ?>

                    </div>
                     <!-- /.box-body -->
                     </div>
                     <!-- /.box -->
                </div>

                   <?php }}}?>


 <!--               <div class="col-md-9 col-sm-8" style="visibility:hidden">
                  <div class="pad">
                    <! Map will be created here >
                    <div id="world-map-markers" style="height: 325px;"></div>
                  </div>
                </div>-->
                <!-- /.col -->
 <!--               <div class="col-md-3 col-sm-4" style="visibility:hidden">
                  <div class="pad box-pane-right bg-green" style="min-height: 280px">
                    <div class="description-block margin-bottom">
                      <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                      <h5 class="description-header">8390</h5>
                      <span class="description-text">Visits</span>
                    </div>
                    <! /.description-block >
                    <div class="description-block margin-bottom">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">30%</h5>
                      <span class="description-text">Referrals</span>
                    </div>
                    <! /.description-block >
                    <div class="description-block">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">70%</h5>
                      <span class="description-text">Organic</span>
                    </div>
                    <! /.description-block >
                  </div>
                </div>-->
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <a name="new_ticket"></a>
          <div class="row">
            <div class="col-md-6">
              <!-- DIRECT CHAT -->
              <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Create Ticket</h3>

                  <div class="box-tools pull-right">
                    <!--<span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>-->
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <!--<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                      <i class="fa fa-comments"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>-->
                  </div>
                </div>
                 <form role="form" method="post">
                <!-- text input -->
                 <label></label>
                <div class="form-group">
                  <label></label>
                  <input type="text" name="subject" placeholder="Subject" class="form-control">
                </div>
                <div class="form-group">
                  <label></label>
                  <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
                </div>
                <!-- /.box-header -->
 <!--               <div class="box-body" style="visibility:hidden">
                  <! Conversations are loaded here >
                  <div class="direct-chat-messages">
                    <! Message. Default to the left >
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left"><?php //echo $this->session->userdata['username'];?></span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                      </div>
                      <! /.direct-chat-info >
                      <img class="direct-chat-img" src="<?php //echo base_url('assets/img/user1-128x128.jpg');?>" alt="message user image"><!-/.direct-chat-img >
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div>
                      <! /.direct-chat-text >
                    </div>
                    <! /.direct-chat-msg >

                    <! Message to the right >
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                      </div>
                      <! /.direct-chat-info >
                      <img class="direct-chat-img" src="<?php //echo base_url('assets/img/user3-128x128.jpg');?>" alt="message user image"><!-/.direct-chat-img >
                      <div class="direct-chat-text">
                        You better believe it!
                      </div>
                      <! /.direct-chat-text >
                    </div>
                    <! /.direct-chat-msg >

                    <! Message. Default to the left >
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left"><?php //echo $this->session->userdata['username'];?></span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                      </div>
                      <! /.direct-chat-info >
                      <img class="direct-chat-img" src="<?php// echo base_url('assets/img/user1-128x128.jpg');?>" alt="message user image"><!-/.direct-chat-img >
                      <div class="direct-chat-text">
                        Working with AdminLTE on a great new app! Wanna join?
                      </div>
                      <! /.direct-chat-text >
                    </div>
                    <!/.direct-chat-msg >

                    <! Message to the right >
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                      </div>
                      <! /.direct-chat-info >
                      <img class="direct-chat-img" src="<?php //echo base_url('assets/img/user3-128x128.jpg');?>" alt="message user image"><! /.direct-chat-img >
                      <div class="direct-chat-text">
                        I would love to.
                      </div>
                      <! /.direct-chat-text >
                    </div>
                    <! /.direct-chat-msg >

                  </div>
                  <!/.direct-chat-messages>

                  <! Contacts are loaded here >
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="<?php //echo base_url('assets/img/user1-128x128.jpg');?>" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                            <span class="contacts-list-msg">How have you been? I was...</span>
                          </div>
                          <! /.contacts-list-info >
                        </a>
                      </li>
                      <! End Contact Item >
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="<?php //echo base_url('assets/img/user7-128x128.jpg');?>" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Sarah Doe
                                  <small class="contacts-list-date pull-right">2/23/2015</small>
                                </span>
                            <span class="contacts-list-msg">I will be waiting for...</span>
                          </div>
                          <! /.contacts-list-info >
                        </a>
                      </li>
                      <! End Contact Item >
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="<?php //echo base_url('assets/img/user3-128x128.jpg');?>" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nadia Jolie
                                  <small class="contacts-list-date pull-right">2/20/2015</small>
                                </span>
                            <span class="contacts-list-msg">I'll call you back at...</span>
                          </div>
                          <! /.contacts-list-info >
                        </a>
                      </li>
                      <! End Contact Item >
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="<?php //echo base_url('assets/img/user5-128x128.jpg');?>" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nora S. Vans
                                  <small class="contacts-list-date pull-right">2/10/2015</small>
                                </span>
                            <span class="contacts-list-msg">Where is your new...</span>
                          </div>
                          <!/.contacts-list-info >
                        </a>
                      </li>
                      <! End Contact Item >
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="<?php //echo base_url('assets/img/user6-128x128.jpg');?>" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  John K.
                                  <small class="contacts-list-date pull-right">1/27/2015</small>
                                </span>
                            <span class="contacts-list-msg">Can I take a look at...</span>
                          </div>
                          <! /.contacts-list-info >
                        </a>
                      </li>
                      <! End Contact Item >
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="<?php //echo base_url('assets/img/user8-128x128.jpg');?>" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                            <span class="contacts-list-msg">Never mind I found...</span>
                          </div>
                          <! /.contacts-list-info >
                        </a>
                      </li>
                      <! End Contact Item >
                    </ul>
                    <! /.contatcts-list >
                  </div>
                  <! /.direct-chat-pane >
                </div>-->
                <!-- /.box-body -->
                <div class="box-footer">
                  
                    <div class="input-group">
                      
                          <span class="input-group-btn">
                            <input type="submit" name="submit" class="btn btn-warning btn-flat" value="Create">
                          </span>
                    </div>
                  </form>
                </div>
                <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Qburst</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger"></span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->

                <div class="box-body padding">
                 
                      
                       <img src="<?php echo base_url('assets/img/support.jpg');?>" alt="User Image">
                      
                    
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
          <a name="ticket_status"></a>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Created Tickets</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Ticket ID</th>
                    <th>Status</th>
                    <th>Remove</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                     $p=0;
                    for($i=0;$i<sizeof($ticket);$i++)
                    {
                      if(!strcmp($username,$ticket[$i]->user))
                       {$tickid=$ticket[$i]->ticketid;
                         ?>
                        <tr>
                          <td><?php echo ++$p;?></td>
                           <td> <?php echo $ticket[$i]->ticketid;?></td>

                            <?php if(!strcmp($ticket[$i]->status,"New")){?>

                                 <td><span class="label label-danger"> <?php echo $ticket[$i]->status;?></span></td>
                                 <?php } ?>
                                  <?php if(!strcmp($ticket[$i]->status,"Assigned")){?>
                                 <td><span class="label label-warning"> <?php echo $ticket[$i]->status;?></span></td>
                                 <?php } ?>

                                  <?php if(!strcmp($ticket[$i]->status,"In Progress")){?>

                                 <td><span class="label label-info"> <?php echo $ticket[$i]->status;?></span></td>
                                 <?php } ?>

                                <?php if(!strcmp($ticket[$i]->status,"Resolved")){?>
                                 <td><span class="label label-success"> <?php echo $ticket[$i]->status;?></span></td>
                                 <?php } ?>
                           <td>
                             <div class="sparkbar" data-color="#00a65a" data-height="20"><a href="<?php echo site_url('cpanel/remove/'.$tickid); ?>"><i class="fa  fa-close"></i></a> </div>
                           </td>
                         </tr>
                     <?php
                       }}?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Inventory</span>
              <span class="info-box-number">5,200</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    50% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-hourglass"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Monitoring</span>
              <span class="info-box-number">24/7</span>

              <div class="progress">
                <div class="progress-bar" style="width: 20%"></div>
              </div>
                  <span class="progress-description">
                    By Our Support Team
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-pencil-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Complaints</span>
              <span class="info-box-number">Create ticket</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                     Specify host name & issue
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">EMAIL</span>
              <span class="info-box-number">For further queries</span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
                  <span class="progress-description">
                    support@qburst.com
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

 <!--         <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Browser Usage</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <! /.box-header >
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="150"></canvas>
                  </div>
                  <! ./chart-responsive >
                </div>
                <! /.col >
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                    <li><i class="fa fa-circle-o text-green"></i> IE</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                    <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                    <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                  </ul>
                </div>
                <! /.col >
              </div>
              <! /.row >
            </div>
            <! /.box-body >
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">United States of America
                  <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                </li>
                <li><a href="#">China
                  <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
              </ul>
            </div>
            <! /.footer >
          </div>-->
          <!-- /.box -->

          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Status Checking Information</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url('assets/img/default-50x50.gif');?>" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Host Status
                      <span class="label label-warning pull-right">60 s</span></a>
                        <span class="product-description">
                          Check Host Status every minute.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url('assets/img/default-50x50.gif');?>" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Service Status
                      <span class="label label-info pull-right">60 s</span></a>
                        <span class="product-description">
                          Check Services in Host every minute.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url('assets/img/default-50x50.gif');?>" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ticket Status <span class="label label-danger pull-right">60 s</span></a>
                        <span class="product-description">
                         Check Ticket Status in  every minute.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b>
    </div>
    <strong>Copyright &copy; <a href="#">QBurst Technologies</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.2.0.min.js');?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/app.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url('assets/plugins/chartjs/Chart.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/js/pages/dashboard2.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/js/demo.js');?>"></script>
</body>
</html>
