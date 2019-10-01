<?php require_once("../xinclude/xxx_de_cn.php");

if(isset($_GET['offset']) && isset($_GET['limit'])){
	
	$limit= $_GET['limit'];
	$offset=$_GET['offset'];
	

	 $inf=mysql_query("SELECT * FROM  xxx_de_sign LIMIT {$limit} OFFSET {$offset} ");

  while($hr=mysql_fetch_array($inf)){
 ?>
 
			 
<div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default widget-user-1 text-center">
                  <div class="avatar">
                    <img src="images/people/110/guy-5.jpg" alt="" class="img-circle">
                    <h3><?php echo $hr['sign_cname']; ?></h3>
                    <a href="#" class="btn btn-success">Following <i class="fa fa-check-circle fa-fw"></i></a>
                  </div>
                  <div class="profile-icons margin-none">
                    <span><i class="fa fa-users"></i> 372</span>
                    <span><i class="fa fa-photo"></i> 43</span>
                    <span><i class="fa fa-video-camera"></i> 3</span>
                  </div>
                  <div class="panel-body">
                    <div class="expandable expandable-indicator-white expandable-trigger">
                      
                     <div class="expandable-content">
                        <p>Hi! I'm Adrian the Senior UI Designer at
                          <strong>MOSAICPRO</strong>. We hope you enjoy the design and quality of Social.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem delectus dolorum necessitatibus neque odio quam quas qui quod soluta? Aliquid eius esse minima.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<?php }}?>
			  
	<!-- <script src="js/app/app.js"></script>
	   <script src="js/vendor/all.js"></script>-->