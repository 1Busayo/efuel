<?php require_once("xinclude/xxx_de_cn.php"); ?>
<?php require_once("xinclude/xxx_functions.php"); ?>
<!DOCTYPE html>
<html class="login" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Bureau De Change</title>

  <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
  <link href="css/vendor/all.css" rel="stylesheet">

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
  <!-- <link href="css/vendor/bootstrap.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/font-awesome.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/picto.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/datepicker3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.minicolors.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/bootstrap-slider.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/railscasts.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery-jvectormap.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/owl.carousel.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/slick.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/morris.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/ui.fancytree.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/select2.css" rel="stylesheet"> -->

  <!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
    - The APP CSS CORE styling required by the "admin" module, also available with main.css - see below;
    - The APP CSS STANDALONE modules required by the "admin" module;
NOTE:
    - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
      It was optimised to load only what is actually used by the "admin" module;
      Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
      See src/less/themes/admin/app.less
TIP:
    - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
  <link href="css/app/app.css" rel="stylesheet">

  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
  <!-- <link href="css/app/main.css" rel="stylesheet"> -->

  <!-- App CSS Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->

  <!-- <link href="css/app/essentials.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/layout.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar-skins.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/navbar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/media.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/player.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/timeline.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/cover.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/chat.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/charts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/maps.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-alerts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-background.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-buttons.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-calendar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-progress-bars.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-text.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/ui.css" rel="stylesheet" /> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>



<?php

	  if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string(ucfirst($_POST["x1"]) );
  $txt2 = mysql_real_escape_string(ucfirst( $_POST["x2"]) );
  $txt2b =  preg_replace('/\s+/', '',$_POST["x2"]);
  $txt3 = mysql_real_escape_string( $_POST["x3"] );
  $txt4 = mysql_real_escape_string(strtolower( $_POST["x4"] ) );
  $txt5 = mysql_real_escape_string( $_POST["x5"]  );
$txt6 = date('Y-m-d');

	  

  
 $quer = "SELECT  sign_cname FROM xxx_de_sign WHERE sign_cname = '$txt2' LIMIT 1";
$resul = mysql_query($quer);
$grp= mysql_num_rows($resul);




 $query2 = "SELECT sign_email FROM xxx_de_sign WHERE sign_email = '$txt4' LIMIT 1";
$result2 = mysql_query($query2);
$mail = mysql_num_rows($result2);

 
/* $query3 = "SELECT m_acc_num FROM members WHERE m_acc_num = '$txt8' LIMIT 1";
$result3 = mysql_query($query3);
$numacc = mysql_num_rows($result3);*/

  if($grp == 1 ){
	  $mngs= 'Company name '.$txt2.' is used by another person';
	
	   header("location:signup?msg3=".$mngs);
				 exit();
	  
  }
 
	  else if($mail == 1){
	  $mngs='Your Email '.$txt2.' is used by another person';
	
	   header("location:signup?msg2=".$mngs);
				 exit();
	  
  } elseif(empty($txt1) || empty($txt2)|| empty($txt3)|| empty($txt4)|| empty($txt5)){
    
	// header("location:rex");
  
    echo"Please fill the form completely";
	 header("location:signup");
	 exit();
	?>
   
	<?php 
	 	  
	   } 
	   else{
		  


 function generateP($digits = 8){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
 
//If I want a 8-digit password code.
//$pwd = 'P'.''.generateP().''.'W' ;
$pwd = '1' ;
    
	

 	
	   $query = mysql_query(" INSERT INTO xxx_de_sign (sign_full_name,sign_cname,sign_email,sign_addr,sign_p_number,sign_dat,sign_p_hash,sign_url) VALUES ('{$txt1}','{$txt2}','{$txt4}','{$txt3}','{$txt5}','{$txt6}','".md5($pwd)."','{$txt2b}') ") or die(mysql_error());
	
	  
	  $to_id = $txt4;
                   
					
		$message='
	
	<style type="text/css">

@media screen and (max-width: 600px) {
    table[class="container"] {
        width: 95% !important;
    }
}

	#outlook a {padding:0;}
		body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
		.ExternalClass {width:100%;}
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
		#backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
		img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
		a img {border:none;}
		.image_fix {display:block;}
		p {margin: 1em 0;}
		h1, h2, h3, h4, h5, h6 {color: black !important;}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

		h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
			color: red !important; 
		 }

		h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
			color: purple !important; 
		}

		table td {border-collapse: collapse;}

		table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

		a {color: #000;}

		@media only screen and (max-device-width: 480px) {

			a[href^="tel"], a[href^="sms"] {
						text-decoration: none;
						color: black; /* or whatever your want */
						pointer-events: none;
						cursor: default;
					}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
						text-decoration: default;
						color: orange !important; /* or whatever your want */
						pointer-events: auto;
						cursor: default;
					}
		}


		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
			a[href^="tel"], a[href^="sms"] {
						text-decoration: none;
						color: blue; /* or whatever your want */
						pointer-events: none;
						cursor: default;
					}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
						text-decoration: default;
						color: orange !important;
						pointer-events: auto;
						cursor: default;
					}
		}

		@media only screen and (-webkit-min-device-pixel-ratio: 2) {
			/* Put your iPhone 4g styles in here */
		}

		@media only screen and (-webkit-device-pixel-ratio:.75){
			/* Put CSS for low density (ldpi) Android layouts in here */
		}
		@media only screen and (-webkit-device-pixel-ratio:1){
			/* Put CSS for medium density (mdpi) Android layouts in here */
		}
		@media only screen and (-webkit-device-pixel-ratio:1.5){
			/* Put CSS for high density (hdpi) Android layouts in here */
		}
		/* end Android targeting */
		h2{
			color:#181818;
			font-family:Helvetica, Arial, sans-serif;
			font-size:22px;
			line-height: 22px;
			font-weight: normal;
		}
		a.link1{

		}
		a.link2{
			color:#fff;
			text-decoration:none;
			font-family:Helvetica, Arial, sans-serif;
			font-size:16px;
			color:#fff;border-radius:4px;
		}
		p{
			color:#555;
			font-family:Helvetica, Arial, sans-serif;
			font-size:16px;
			line-height:160%;
		}
	</style>

<script type="colorScheme" class="swatch active">
  {
    "name":"Default",
    "bgBody":"ffffff",
    "link":"fff",
    "color":"555555",
    "bgItem":"ffffff",
    "title":"181818"
  }
</script>

</head>
<body>
	<!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
	<table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class="bgBody">
	<tr>
		<td>
	<table cellpadding="0" width="620" class="container" align="center" cellspacing="0" border="0">
	<tr>
		<td>
		<!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->
		

		<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
			<tr>
				<td class="movableContentContainer bgItem">

					<div class="movableContent">
						<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
							<tr height="40">
								<td width="200">&nbsp;</td>
								<td width="200">&nbsp;</td>
								<td width="200">&nbsp;</td>
							</tr>
							<tr>
								<td width="200" valign="top">&nbsp;</td>
								<td width="200" valign="top" align="center">
									<div class="contentEditableContainer contentImageEditable">
					                	<div class="contentEditable" align="center" >
					                  		<img src="../dist/img/logo.png" width="220" height="210"  alt="Logo"  data-default="placeholder" />
					                	</div>
					              	</div>
								</td>
								<td width="200" valign="top">&nbsp;</td>
							</tr>
							<tr height="25">
								<td width="200">&nbsp;</td>
								<td width="200">&nbsp;</td>
								<td width="200">&nbsp;</td>
							</tr>
						</table>
					</div>

					<div class="movableContent">
						<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
							<tr>
								<td width="100%" colspan="3" align="center" style="padding-bottom:10px;padding-top:25px;">
									<div class="contentEditableContainer contentTextEditable">
					                	<div class="contentEditable" align="center" >
					                  		<h2 >Login Details</h2>
					                	</div>
					              	</div>
								</td>
							</tr>
							<tr>
								<td width="100">&nbsp;</td>
								<td width="400" align="center">
									<div class="contentEditableContainer contentTextEditable">
					                	<div class="contentEditable" align="left" >
					                  		<p >Hi '.''.$txt1.',
					                  			<br/>
					                  			<br/>
											<!--contents -->
																						
										<p>  Your Plethuno Account Has Been Created  Please Use The Email And Password To Login </p>
										<p>Email: '.''.$txt4.' '.'</p><p>Password:'.''.$pwd.'</p>'.''.' <p>Click On The Button Below To Go To The Website Please Change Your Password</p>
					
											</div>
					              	</div>
								</td>
								<td width="100">&nbsp;</td>
							</tr>
						</table>
						<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
							<tr>
								<td width="200">&nbsp;</td>
								<td width="200" align="center" style="padding-top:25px;">
									<table cellpadding="0" cellspacing="0" border="0" align="center" width="200" height="50">
										<tr>
											<td bgcolor="#4987CE" align="center" style="border-radius:4px;" width="200" height="50">
												<div class="contentEditableContainer contentTextEditable">
								                	<div class="contentEditable" align="center" >
								                  		<a target="_blank" href="https://www.plethuno.net/a/" class="link2">Click here</a>
								                	</div>
								              	</div>
											</td>
										</tr>
									</table>
								</td>
								<td width="200">&nbsp;</td>
							</tr>
						</table>
					</div>


	
				</td>
			</tr>
		</table>

		
		

	</td></tr></table>
	
		</td>
	</tr>
	</table>'; 
	
					
					
					
                    $subject = 'Your Account Has Been Created';
	 
	 
	  //sendit($to_id,$message,$subject);
	 

	 
	             header("location:login?msg=".$txt1);
				 exit();
	  ?>
			  
		
	  <?php }
	  } 

	?>
<?php
		  	if(empty($_GET['msg'])){
				
			}else{
				
				$a= preg_replace('/[^-a-zA-Z0-9_]/', ' ', $_GET['msg']); ?>
				
				  <div class="alert alert-success" >
 <strong><i class="fa fa-check-circle fa-2x"></i>  Success!</strong>         <?php echo $a;?> Your Plethuno Account Has Been Created
</div>
			<?php
			}
 ?>
 <!----  message existing record   --->
 <?php
		  	if(empty($_GET['msg2'])){
				
			}else{
				
				$a= preg_replace('/[^-a-zA-Z0-9_]/', ' ', $_GET['msg2']); ?>
				
				  <div class="alert alert-danger" >
 <strong><i class="fa fa-times-circle fa-2x"></i>  Error!</strong>       <?php echo $a;?> Another Person is using this Details.
</div>
			<?php
			}
 ?>
<!--- Check for upliner -->
 <?php
		  	if(empty($_GET['msg3'])){
				
			}else{
				
				$a= preg_replace('/[^-a-zA-Z0-9_]/', ' ', $_GET['msg3']); ?>
				
				  <div class="alert alert-danger" >
 <strong><i class="fa fa-times-circle fa-2x"></i>  Error!</strong>       <?php echo $a;?>
</div>
			<?php
			}
 ?> 



  <div class="container-fluid">

    <div class="brand-logo">
      <i class="fa fa-pencil"></i>
    </div>
    <div class="row">
      <h1>Create a new account</h1>
      <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-default">

          <div class="panel-body">
            <div class="alert alert-primary">
              <button type="button" class="btn btn-primary close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              Bureau De Change
            </div>

            <!-- Signup -->
            <form role="form" action="" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="x1" placeholder="Full Name" required>
              </div>
              
			  <div class="form-group">
                <input type="text" class="form-control" name="x2" placeholder="Company Name" required>
              </div>
			  <div class="form-group">
                         <!-- <label class="col-sm-3 control-label">Company Address</label>-->
						 
                          <div class="col-sm-9">
                            <textarea class="form-control" name="x3" rows="1"placeholder="Company Address"required></textarea>
                          </div><br><br>
                        </div>
              <div class="form-group">
                <input type="email" class="form-control" name="x4" placeholder="Email" required>
              </div>
			  <div class="form-group">
                <input type="number" class="form-control" name="x5" placeholder="Phonenumber" required>
              </div>
            <!--  <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password Confirmation">
              </div> --->
              <div class="form-group text-center">
                <div class="checkbox">
                  <input type="checkbox" id="agree" />
                  <label for="agree">* I Agree with <a href="#">Terms &amp; Conditions!</a></label>
                </div>
              </div>
              <div class="text-center">
                <input type="submit" name="submit" class="btn btn-primary" value=" Create an Account"> <br>
				<a href="login" class="btn btn-success"> I already have an account</a>
              </div>
            </form>
            <!-- //Signup -->

          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "admin",
      skins: {
        "default": {
          "primary-color": "#3498db"
        }
      }
    };
  </script>

  <!-- Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
  <script src="js/vendor/all.js"></script>

  <!-- Vendor Scripts Standalone Libraries -->
  <!-- <script src="js/vendor/core/all.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.js"></script> -->
  <!-- <script src="js/vendor/core/bootstrap.js"></script> -->
  <!-- <script src="js/vendor/core/breakpoints.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.nicescroll.js"></script> -->
  <!-- <script src="js/vendor/core/isotope.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/packery-mode.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.grid-a-licious.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.cookie.js"></script> -->
  <!-- <script src="js/vendor/core/jquery-ui.custom.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/handlebars.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/load_image.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.debouncedresize.js"></script> -->
  <!-- <script src="js/vendor/tables/all.js"></script> -->
  <!-- <script src="js/vendor/forms/all.js"></script> -->
  <!-- <script src="js/vendor/media/all.js"></script> -->
  <!-- <script src="js/vendor/player/all.js"></script> -->
  <!-- <script src="js/vendor/charts/all.js"></script> -->
  <!-- <script src="js/vendor/charts/flot/all.js"></script> -->
  <!-- <script src="js/vendor/charts/easy-pie/jquery.easypiechart.js"></script> -->
  <!-- <script src="js/vendor/charts/morris/all.js"></script> -->
  <!-- <script src="js/vendor/charts/sparkline/all.js"></script> -->
  <!-- <script src="js/vendor/maps/vector/all.js"></script> -->
  <!-- <script src="js/vendor/tree/jquery.fancytree-all.js"></script> -->
  <!-- <script src="js/vendor/nestable/jquery.nestable.js"></script> -->
  <!-- <script src="js/vendor/angular/all.js"></script> -->

  <!-- App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
  <script src="js/app/app.js"></script>

  <!-- App Scripts Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->

  <!-- <script src="js/app/essentials.js"></script> -->
  <!-- <script src="js/app/layout.js"></script> -->
  <!-- <script src="js/app/sidebar.js"></script> -->
  <!-- <script src="js/app/media.js"></script> -->
  <!-- <script src="js/app/player.js"></script> -->
  <!-- <script src="js/app/timeline.js"></script> -->
  <!-- <script src="js/app/chat.js"></script> -->
  <!-- <script src="js/app/maps.js"></script> -->
  <!-- <script src="js/app/charts/all.js"></script> -->
  <!-- <script src="js/app/charts/flot.js"></script> -->
  <!-- <script src="js/app/charts/easy-pie.js"></script> -->
  <!-- <script src="js/app/charts/morris.js"></script> -->
  <!-- <script src="js/app/charts/sparkline.js"></script> -->

</body>

</html>