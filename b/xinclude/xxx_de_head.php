<?php //require("xinclude/xxx_de_cn.php"); ?>
<?php require("xinclude/xxx_functions.php"); ?>
<?php require("xinclude/xxx_de_session.php"); ?>
<!DOCTYPE html>
<html class="ls-top-navbar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>E-FUEL</title>
   <meta name="description" content="E-FUEL">
    <meta name="author" content="Wellsoft">
	
	  <!-- Mobile Specific Meta -->	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
 <meta property="og:title" content="E-FUEL">
<meta property="og:image" content="http://efuel.com.ng/b/images/energy.png">
<meta property="og:description" content="Order for your Petrol ,Disel, Kerosene, Gas Online">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
  
  
<link href="css/vendor/all.css" rel="stylesheet">
  
 <link href="css/app/app.css" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111542945-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111542945-1');
</script>
  
</head>

<body>
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="#sidebar-menu" data-toggle="sidebar-menu" data-effect="st-effect-3" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="fa fa-search fx-4"></span>
      <!--   <span class="icon-bar"></span> <span class="icon-bar"></span>
          <span class="icon-bar"></span>-->
        </button>
        <a href="index" class="navbar-brand  navbar-brand-primary"><p> <img src="images/80.png" style="width:50.1px;height:50.1px;" class="align-left"/> e-FUEL</p></a>
      </div>
      <div class="navbar-collapse collapse" id="collapse">
      <!---  <form class="navbar-form navbar-left  role="search">
          <div class="search-2">
            <div class="input-group">
              <input type="text" class="form-control form-control-w-150" placeholder="Search ..">
              <span class="input-group-btn">
            <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
        </span>
            </div>
          </div>
        </form> -->
        <ul class="nav navbar-nav navbar-right">
          <!-- notifications 
          <li class="dropdown notifications updates hidden-xs hidden-sm">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="badge badge-primary">4</span>
            </a>
            <ul class="dropdown-menu" role="notification">
              <li class="dropdown-header">Notifications</li>
              <li class="media">
                <div class="pull-right">
                  <span class="label label-success">New</span>
                </div>
                <div class="media-left">
                  <img src="images/people/50/guy-2.jpg" alt="people" class="img-circle" width="30">
                </div>
                <div class="media-body">
                  <a href="#">Adrian D.</a> posted <a href="#">a photo</a> on his timeline.
                  <br/>
                  <span class="text-caption text-muted">5 mins ago</span>
                </div>
              </li>
              <li class="media">
                <div class="pull-right">
                  <span class="label label-success">New</span>
                </div>
                <div class="media-left">
                  <img src="images/people/50/guy-6.jpg" alt="people" class="img-circle" width="30">
                </div>
                <div class="media-body">
                  <a href="#">Bill</a> posted <a href="#">a comment</a> on Adrian's recent <a href="#">post</a>.
                  <br/>
                  <span class="text-caption text-muted">3 hrs ago</span>
                </div>
              </li>
              <li class="media">
                <div class="media-left">
                  <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                </div>
                <div class="media-body">
                  <a href="#">Mary D.</a> and <a href="#">Michelle</a> are now friends.
                  <p>
                    <span class="text-caption text-muted">1 day ago</span>
                  </p>
                  <a href="">
                    <img class="width-30 img-circle" src="images/people/50/woman-6.jpg" alt="people">
                  </a>
                  <a href="">
                    <img class="width-30 img-circle" src="images/people/50/woman-3.jpg" alt="people">
                  </a>
                </div>
              </li>
            </ul>
          </li>
           // END notifications -->
          <!-- messages 
          <li class="dropdown notifications hidden-xs hidden-sm">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>

              <span class="badge floating badge-danger">12</span>

            </a>
            <ul class="dropdown-menu">
              <li class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object thumb" src="images/people/50/guy-2.jpg" alt="people">
                  </a>
                </div>
                <div class="media-body">
                  <div class="pull-right">
                    <span class="label label-default">5 min</span>
                  </div>
                  <h5 class="media-heading">Adrian D.</h5>

                  <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object thumb" src="images/people/50/woman-7.jpg" alt="people">
                  </a>
                </div>

                <div class="media-body">
                  <div class="pull-right">
                    <span class="label label-default">2 days</span>
                  </div>
                  <h5 class="media-heading">Jane B.</h5>
                  <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object thumb" src="images/people/50/guy-8.jpg" alt="people">
                  </a>
                </div>

                <div class="media-body">
                  <div class="pull-right">
                    <span class="label label-default">3 days</span>
                  </div>
                  <h5 class="media-heading">Andrew M.</h5>
                  <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </li>
            </ul>
          </li>
         // END messages -->
          <!-- user -->
          <li class="dropdown user">
		  <?php //if(!empty($_SESSION['office'])){
			  if ( logged_in()) {?>
            <a href="#" style="color:black;" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/people/110/guy-6.jpg" alt="" class="img-circle" /> <?php echo $_SESSION['office']; ?><span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="edit/r/zone"><i class="fa fa-user"></i>Profile</a></li>
              <li><a href="#"><i class="fa fa-wrench"></i>Settings</a></li>
              <li><a href=".../../edit/r/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
		  </ul> <?php }else{ ?>
			  
			   <a href="#" style="color:black;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i> 
              Register<span class="caret"></span>
            </a>
            <ul style="color:black;" class="dropdown-menu" role="menu">
              <li><a href="#"><i class="fa fa-user"></i>Login</a></li>
              <li><a href="#"><i class="fa fa-pencil"></i>Register</a></li>
              </ul>
		  <?php }
			
			?>
          </li>
          <!-- // END user -->
          <!-- country flags 
          <li class="dropdown flags">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/flags/Flag_of_the_United_States.svg" alt="United States" />
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu min-width-none" role="menu">
              <li class="active text-center">
                <a href="#">
                  <img src="images/flags/Flag_of_the_United_States.svg" alt="United States" />
                </a>
              </li>
              <li class="text-center">
                <a href="#">
                  <img src="images/flags/Flag_of_France.svg" alt="France" />
                </a>
              </li>
              <li class="text-center">
                <a href="#">
                  <img src="images/flags/Flag_of_Germany.svg" alt="Germany" />
                </a>
              </li>
              <li class="text-center">
                <a href="#">
                  <img src="images/flags/Flag_of_Romania.svg" alt="Romania" />
                </a>
              </li>
              <li class="text-center">
                <a href="#">
                  <img src="images/flags/Flag_of_Poland.svg" alt="Poland" />
                </a>
              </li>
            </ul>
          </li>
           // END country flags -->
        </ul>
      </div>
    </div>
  </div>