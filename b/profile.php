<?php require_once("xinclude/xxx_de_head.php"); 

 $xzx =  mysql_real_escape_string($_GET['u']);

	$h2 = mysql_query("select * FROM xxx_de_sign  WHERE  sign_url='$xzx' ") or die(mysql_error()); 
	                    $tr2 = mysql_fetch_array($h2);
						
						 
							   ?>

    <div class="chat-window-container"></div>

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class="st-pusher" id="content">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner">

          <div class="container-fluid">

            <div class="media media-grid media-clearfix-xs">
              <div class="media-left">

                <div class="width-250 width-auto-xs">
                  <div class="panel panel-default widget-user-1 text-center">
                    <div class="avatar">
                      <img src="images/people/110/guy-5.jpg" alt="" class="img-circle">
                      <h3><?php echo $tr2['sign_cname']; ?></h3>
                    <!--  <a href="#" class="btn btn-success">Verified <i class="fa fa-check-circle fa-fw"></i></a>-->
                    </div>
                   <!-- <div class="profile-icons margin-none">
                      <span><i class="fa fa-users"></i> 372</span>
                      <span><i class="fa fa-photo"></i> 43</span>
                      <span><i class="fa fa-video-camera"></i> 3</span>
                    </div>-->
                    <div class="panel-body">
                      <div class="expandable expandable-indicator-white expandable-trigger">
                       <div class="expandable-content">
                          <p><strong>Address</strong></p>
                          <p><?php echo $tr2['sign_addr']; ?></p> </div>
                      </div>
                    </div>
                  </div>

              
                </div>
              </div>
              <div class="media-body">
                <div class="panel panel-warning share">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <a class="btn btn-warning" href="#"><i class="fa fa-warning"></i> Please Never Do Transaction With Any BDC Seller Without Meeting Physically AND It Must Be In An Open Place E.g Bank</a>
                    </div>
                    <!--<input type="text" class="form-control share-text" placeholder="Write message..." />-->
                  </div>
                </div> 
				
				<!-- <div class="panel panel-default share">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <a class="btn btn-primary" href="#"><i class="fa fa-envelope"></i> Send</a>
                    </div>
                    <input type="text" class="form-control share-text" placeholder="Write message..." />
                  </div>
                </div> -->
                       <!---tabs
                <div class="tabbable">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-fw fa-picture-o"></i> Photos</a></li>
                    <li class=""><a href="#profile" data-toggle="tab"><i class="fa fa-fw fa-folder"></i> Albums</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                      <img src="images/place1.jpg" alt="image" />
                      <img src="images/place2.jpg" alt="image" />
                      <img src="images/food1.jpg" alt="image" />
                    </div>
                    <div class="tab-pane fade" id="profile">
                      <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                        booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente
                        labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed
                        echo park.</p>
                    </div>
                    <div class="tab-pane fade" id="dropdown1">
                      <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles
                        etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred
                        you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="dropdown2">
                      <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life
                        echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan,
                        sartorial keffiyeh echo park vegan.</p>
                    </div>
                  </div>
                </div> --->
                <div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-default">
					<div class="panel panel-default">
                      <div class="panel-heading panel-heading-gray">
                        <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                       
                      </div>
                      <div class="panel-body">
               
<form class="form-signin" method="POST" >
      
        <h2 class="form-signin-heading">Currency</h2><hr/>
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        	<div class="form-group">
			<label>Currency To Change</label>
    <select type="text"  name="txt1" class="form-control"  id="x"  onChange="upda(); return false;" data-validation="required"  style="width:250px;"style="width:250px;" required>
           <option value='0' selected>----Select Currency-----</option>
		   <?php
		   $qd = $tr2['sign_id'];
		   
		   $h2x = mysql_query("select * FROM xxx_ex_rate  WHERE  sign_id='$qd' ") or die(mysql_error()); 
	                 while( $tr2x = mysql_fetch_array($h2x)) {?> 
					 <option value='<?php echo $tr2x['rate_ex']; ?>'><?php echo $tr2x['sign_from'].'  '.$tr2x['rate_from'].' To '. $tr2x['sign_to'].'  '.$tr2x['rate_to'].'  ('.$tr2x['rate_ex'].')'; }?></option>		 
		  
           </select>
		   

		</div> 	<div class="form-group">
			<label>Amount To Change</label>
    <input type="number"  name="txt1a" class="form-control"  id="xx" onChange="upda(); return false;"  data-validation="required"  style="width:250px;"style="width:250px;" required>
           
         
<p id="me"></p>
		</div> 
        <div class="form-group">
		<label>Value</label>
        <input type="text" id="valvs" class="form-control" readonly placeholder="Exchange Rate"  name="txt2" data-validation="number" data-validation-length="min3"  data-validation-regexp="^([a-z,A-Z, ]+)$"  style="width:250px;" />
        </div> 
		
	
         
		<hr/>
        
		
        <div class="form-group">
            <button type="button" class="btn btn-primary" name="submit" id="btnt">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Change
			</button> 
        </div>  
   
      </form>


	  

	  
	  

			   </div></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-gray">
                        <div class="pull-right">
                          <a href="#" class="btn btn-primary btn-xs">Add <i class="fa fa-plus"></i></a>
                        </div>
                        <i class="icon-user-1"></i> Contact
                      </div>
                      <div class="panel-body">
					   <?php $qd = $tr2['sign_id'];
		   
		   $zox = mysql_query("select * FROM xxx_de_sign  WHERE  sign_id='$qd' ") or die(mysql_error());

                           $t2 = mysql_fetch_array($zox);

		   ?>
		              
                       <ul class="icon-list icon-list-block">
                      <li><i class="fa fa-envelope fa-fw"></i> <a href="mailto:<?php echo $t2['sign_email']; ?>"><?php echo $t2['sign_email']; ?></a></li>
                      <li><i class="fa fa-phone fa-fw"></i> <a href="tel:<?php echo $t2['sign_p_number']; ?>"><?php echo $t2['sign_p_number']; ?></a></li>
                     <!-- <li><i class="fa fa-behance fa-fw"></i> <a href="#">/user</a></li>-->
                    </ul>

					   </div>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading panel-heading-gray">
                    <i class="fa fa-bookmark"></i>Exchange Rate
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      
					  
					  	<table id="example1" cellspacing="0" width="100%" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th>Currency</th>
	<th >Exchange Rate</th>
			
			</tr> 
        </thead>
	<tbody>

<?php
        


     $qid = $tr2['sign_id'];
			 $h2 = mysql_query("select * FROM xxx_ex_rate where sign_id='$qid' ") or die(mysql_error()); 
			 
			while($r = mysql_fetch_array($h2))
			{
		?>
		
		
        <tr class="record">
        	
             <td><br><label>From</label> <?php echo  $r['rate_from'].' '.$r['sign_from']; ?>
			 <br><label>To</label> <?php echo  $r['rate_to'].' '.$r['sign_to']; ?>
			 
			 </td>
			
		  
           
	<td><br>
		 <br><label>Exchange Rate</label> <?php echo htmlentities( $r['rate_ex']); ?>
			 <br><label>Last Updated</label> <?php echo htmlentities( $r['rate_dat']); ?></td>
             				</tr> 
			
        <?php

		}
		
		
		?>
	
	</tbody>	
    </table>

		</div>
		

	
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher --> <br><br>
<?php
require_once("xinclude/xxx_de_foot.php");
?>