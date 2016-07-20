<?php
 $tickno=0;
  for($i=0;$i<sizeof($ticket);$i++)
 {
   if(!strcmp('New',$ticket[$i]->status))
      {
         $tickno++;
      }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/_all-skins.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/flat/blue.css');?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/morris/morris.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker-bs3.css');?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">

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
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>AdminCP</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
         
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/img/index.jpg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/img/index.jpg');?>" class="img-circle" alt="User Image">

                <p>
                  Admin
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat"></a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('cpanel/logout');?>" class="btn btn-default btn-flat">Sign out&nbsp;<i class="fa   fa-sign-out"></i></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <p>Admin</p>
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
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
          </a>
          
        </li>
        <li class="treeview">
          <a href="#host">
            <i class="fa fa-files-o"></i>
            <span>Host Status</span>
            <span class="label label-primary pull-right"></span>
          </a>
          
        </li>
         <li class="treeview">
          <a href="#users">
            <i class="fa fa-table"></i> <span>Users</span>
            
          </a>
          
        </li>
        <li>
          <a href="#adduser">
            <i class="fa fa-th"></i> <span>Add User</span>
            <small class="label pull-right bg-green"></small>
          </a>
        </li>
        <li class="treeview">
          <a href="#addhost">
            <i class="fa fa-pie-chart"></i>
            <span>Add Host</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="#delete">
            <i class="fa fa-laptop"></i>
            <span>Delete Host & User</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="#tickets">
            <i class="fa fa-tasks"></i> <span>Tickets</span>
            
          </a>
        </li>
        
        
       
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
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Check</h3>

              <p>Ok</p>
            </div>
            <div class="icon">
              <i class="fa  fa-star"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>24/7<sup style="font-size: 20px"></sup></h3>

              <p>Monitoring</p>
            </div>
            <div class="icon">
              <i class="fa  fa-eye"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo sizeof($users);?></h3>

              <p>Total Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $tickno;?></h3>

              <p>New Tickets</p>
            </div>
            <div class="icon">
              <i class="fa fa-ticket"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

          <!-- Custom tabs (Charts with tabs)-->
           <a name="#host"></a>

            <div class="nav-tabs-custom">
           
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab"></a></li>
              <li><a href="#sales-chart" data-toggle="tab"></a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i>Host Status</li>
            </ul>
            
            <div class="tab-content padding">
                
              <div  style="position: relative; height: 300px;">
                 <?php
                   for($i=0;$i<sizeof($users);$i++)
                      {
                        ?>

                     

                  <div class="col-md-4">
                   <div class="box box-default collapsed-box box-solid">
                     <div class="box-header with-border">
                       <h3 class="box-title"><?php echo $users[$i];?></h3>

                      <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                         </button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                     <!-- /.box-header -->
                    <div class="box-body">

                        HOST:
                       <?php
                         for($j=0;$j<sizeof($list);$j++)
                           { 
                             if(!strcmp($list[$j]->user,$users[$i]))
                              {
                               if((!strcmp($host_status[$list[$j]->hosts],"pending"))||(!strcmp($host_status[$list[$j]->hosts],"up")))
                                {?>


                                  <div id="host<?php echo$i;echo $j;?>">
                                    
                                    <i class="fa  fa-thumbs-o-up"></i> 
                                    <?php echo $list[$j]->hosts;
                                    echo "<script>document.getElementById('host$i$j').style.backgroundColor='#2a9a51'</script>";
                                     echo "<script>document.getElementById('host$i$j').style.color='#fff'</script>";
                                     echo "<script>document.getElementById('host$i$j').style.margin='5px'</script>";

                                     echo "<br>";?>
                                  </div>
                                <?php 
                                }
                               else
                               {?>
                                 <div id="host<?php echo$i;echo $j;?>">
                                    <i class="fa  fa-thumbs-o-down"></i> 
                                     <?php echo $list[$j]->hosts;
                                     echo "<script>document.getElementById('host$i$j').style.backgroundColor='#ff2d1a'</script>";
                                     echo "<script>document.getElementById('host$i$j').style.color='#fff'</script>";
                                     echo "<script>document.getElementById('host$i$j').style.margin='5px'</script>";
                                     echo "<br>";?>
                                  </div>
                                <?php
                               }

                       }} ?>
                    </div>
                    <!-- /.box-body -->
                   </div>
                    <!-- /.box -->
                  </div>
                  <?php }?>

              </div>
             
            </div>
          </div>


           <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <a name="users"></a>
          <div class="box box-primary pull-right" style="margin-bottom:10px" >
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Users</h3>

              <div class="box-tools pull-right">
                 <div class="pull-right box-tools">
                
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
               
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               
                <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>user</th>
                    <th>Admin</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                     $p=0;
                    for($i=0;$i<sizeof($allusers);$i++)
                    {
                      
                       
                         ?>
                        <tr>
                          <td><?php echo ++$p;?></td>
                          <td> <?php echo $allusers[$i]->name;?></td>
                           <td> <?php if($allusers[$i]->level==1)
                                  {

                             ?>
                               
                               <label>
                                 <input type="radio" name="r3" class="flat-red" checked>
                               </label>
                              <?php }?>
                             </td>
          
                           
                         </tr>
                     <?php
                       }?>
                  </tbody>
                </table>
              </div>
              

            </div>
            </div>
          
          <div class="box box-success pull-right"><a name="#delete"></a>
            <div class="box-header">
              <i class="fa fa-tachometer"></i>

              <h3 class="box-title">Delete Users & Hosts</h3>

              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                 
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
                
                   <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>User</th>
                    <th>Remove</th>
                    <th>Host</th>
                    <th>Remove</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <form method="post">
                    <?php 
                     $p=0;
                    
                 for($i=0;$i<sizeof($users);$i++)
                      {
          
                      
                         ?>
                        <tr>
                          <td><?php echo $users[$i];?></td>
                           <td> <input type="checkbox" class="flat-red" name="deluser" value="<?php echo $users[$i];?>"></td>

                           
                                
                           <td>
                              <table>
              
                                  <?php
                                   for($j=0;$j<sizeof($list);$j++)
                                    { 
                                       if(!strcmp($list[$j]->user,$users[$i]))

                                        {?>
                                        <tr>
                                          <td>
                                            <div id="hosts" style="height:22px">
                                            <?php echo $list[$j]->hosts;
                                               echo "<script>document.getElementById('hosts').style.margin='2px'</script>";
                                               echo "<script>document.getElementById('hosts').style.paddingTop='2px'</script>";
 
                                               ?>

                                                </div>
                                                 </td>
                                                 

                                        </tr>

                                         <?php
                                             }
                                             }
                                          ?>

                              </table>
                              </td>
                              <td>
                                  <table>
              
                                  <?php
                                   for($j=0;$j<sizeof($list);$j++)
                                    { 
                                       if(!strcmp($list[$j]->user,$users[$i]))

                                        {?>
                                        <tr>
                                          <td>
                                            <div>
                                              <input type="checkbox" class="flat-red" name="delhost" value="<?php echo $list[$j]->hosts;?>"/>
                                                       
                                            </div>
                                          </td>
                                        </tr> 
                                          <?php
                                             }
                                             }
                                          ?>  
                                        </table>       

                              </td>
                              <td>
                                <div class="col-sm-10">
                                
                                <input type="submit" name="submit" value="delete" class="btn btn-block btn-danger"/> 

                                </div>
                              </td>
                           
                         </tr>
                         <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                         </tr>
                     <?php
                       }?>
                      </form>
                  </tbody>
                </table>
              </div>
                
                
                
              </div>
              
            </div>
            <!-- /.chat -->
            <div class="box-footer">
              
            </div>
          </div>

             
 


        </section>

        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <a name="#adduser"></a>
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
            
              <div class="pull-right box-tools">
                
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
               <i class="fa fa-user-plus"></i>
               </div>
               <div class="box-body">
                <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Users</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="color:black">UserName</label>

                  
                  <div class="col-sm-8">
                    <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username ">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="color:black">Password</label>

                  <div class="col-sm-8">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label style="color:black">
                       <input type="checkbox" class="flat-red" name="admin" value="admin"> Admin
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <input type="submit" name="submit" value="Add" class="btn btn-info pull-right"/>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
                  
          </div>

          <!-- /.box -->

          <!-- solid sales graph -->
          <a name="addhost"></a>
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <i class="fa fa-plus-square"></i>

              <h3 class="box-title">Add Hosts</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
               <form method="post">
                <div class="form-group">
                  <label>Select User</label>
                   <select class="form-control select2" name="dropdown"style="width: 100%;">
                    <option selected="selected">select user</option>
                       <?php 
                        for($i=0;$i<sizeof($users);$i++)
                          {?>
                    <option value="<?php echo $users[$i];?>"><?php echo $users[$i];?></option>
            
                    <?php }?>
                   </select>
                 </div>

                 <div class="form-group">
                  <label>Host</label>
                  <input type="text" class="form-control" name="host" placeholder="Enter Hostname">
                </div> 
                <div class="col-sm-3">
                  <input type="submit" name="submit" value="Add" class="btn btn-block btn-primary">
                </div>
                </form>
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-border">
              <div class="row ">
                    <div class="box-solid bg-light-blue-gradient" style="margin:8px">
                        <table>
                          <tr>
                            <td>
                              <i class="fa  fa-star"></i>
                            </td>
                            <td width="10px">

                            </td>
                            <td>
                              <h5>Enter Hostname without spaces</h5>

                            </td>
                          </tr>
                        </table>
                        
                        
                    </div>
               
              </div>
               
            </div>
            </div>

               <!-- Calendar -->
            <a name="tickets"></a>
          <div class="box box-solid bg-green-gradient" >
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Tickets</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding" style="height:auto">
              <!--The calendar -->
                 <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>user</th>
                    <th>Ticket ID</th>
                    <th>Status</th>
                    <th>View</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                     $p=0;
                    for($i=0;$i<sizeof($ticket);$i++)
                    {
                      
                       $tickid=$ticket[$i]->ticketid;
                         ?>
                        <tr>
                          <td><?php echo ++$p;?></td>
                          <td> <?php echo $ticket[$i]->user;?></td>
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
                             
                                <span class="label label-info">
                                <a href="http://10.2.0.228:3000/issues/<?php echo $ticket[$i]->ticketid;?>" target="_blank" >view</a>
                                </span>
                              
                            </td>
                         </tr>
                     <?php
                       }?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  
                  
                  
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

          <!-- /.box -->

          <!-- Calendar -->
          
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b>
    </div>
    <strong>Copyright &copy;<a href="">QBurst Technologies</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
     
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        
        <!-- /.control-sidebar-menu -->

        
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.2.0.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('assets/plugins/morris/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/plugins/knob/jquery.knob.js');?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/app.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/js/demo.js');?>"></script>
</body>
</html>
