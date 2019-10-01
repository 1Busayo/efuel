<?php require_once("xinclude/xxx_de_head.php"); ?>

<?php 

//echo $_POST['from'];
?>

  <div id="content">
    <div class="container-fluid">
	
		<center>
      <div   class="jumbotron bg-transparent text-center margin-none">
        <h4 class="page-section-heading">Bureau De Change</h4>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="exresult">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Amount</label>
                          <div class="col-sm-4">
                            <input type="text" name="val" class="form-control" id="" placeholder="Type here..">
                          </div>
                        </div>

						<div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Exchange Rate(optional)</label>
                          <div class="col-sm-4">
                            <input type="text" name="rate" class="form-control" id="" placeholder="Type here..">
                          </div>
                        </div>
						                        <div class="form-group">
                          <label class="col-sm-3 control-label">From</label>
                          <div class="col-sm-4">
						 
                            <select name="f" id="statedd1" class="form-control" data-style="btn-white" data-live-search="true" data-size="5">
							
                           </select>
                          </div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">To</label>
                          <div class="col-sm-4">
                            <select  name="t" id="statedd2" class="form-control" data-style="btn-white" data-live-search="true" data-size="5">
                          
                            </select>
                          </div>
                        </div>
                       
                        <div class="form-group margin-none">
                          <div class="col-sm-offset-3 col-sm-4">
                            <button type="submit" name="submit" class="btn btn-primary ">Search</button> <a href="login" class="btn btn-success "><i class="fa fa-money"></i> Sell Currency</a>
                          </div>
                        </div>
                      </form>
                    
	
					 
					 </div>
                  </div>
		
		
		
		
		</div>
		</center>
	
   
	<br><br>
	
	<?php
	
	 if (isset($_GET['page'])) {
			$amount= mysql_real_escape_string( $_GET["amount"] );
			$rate= mysql_real_escape_string( $_GET["rate"] );
			$from= mysql_real_escape_string( $_GET["from"] );
			$to= mysql_real_escape_string( $_GET["to"] );
				 }
	
		
				 if (isset($_POST['submit'])) {
				
				 
			$amount= mysql_real_escape_string( $_POST["val"] );
			$rate= mysql_real_escape_string( $_POST["rate"] );
			$from= mysql_real_escape_string( $_POST["f"] );
			$to= mysql_real_escape_string( $_POST["t"] );
			
				
			 /*if(empty($amount) || empty($from )|| empty($to)){
				 
				 header("location:index");
				 
			 }*/
	
	
	
	
		$sql    = "SELECT count(*) FROM xxx_ex_rate  WHERE  rate_from='$from' AND rate_to='$to' ";
					$retval = mysql_query($sql, $connection);
					
					if (!$retval) {
						die('Could not get data: ' . mysql_error());
					}
					
					//this is the current page per number ($current_page)	
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
				
					//record per Page($per_page)	
					$per_page = 10;
					//total count record ($total_count)
					$row = mysql_fetch_array($retval, MYSQL_NUM);
				    $total_count = $row[0];
					
					//it gets the result of total_count over per page
					$total_pages = $total_count/$per_page;
					//get the off set current page minus 1 multiply by record per page	
					$offset = ($current_page - 1) * $per_page;
					//move to previous record by subtracting one into the current record
					$previous_page = $current_page - 1;
					//mvove to next record by incrementing the current page by one		
					$next_page = $current_page + 1;
					//check if previous record is still greater than one then it returns to true
					$has_previous_page =  $previous_page >= 1 ? true : false;
					//check if Next record is still lesser than one total pages then it returns to true
					$has_next_page = $next_page <= $total_pages ? true : false;
					
					//find records of employee and we specify the offset and the limit record per page
		
		
			  
			//$i = "";
			//if(!empty($rate) || !empty($from) || !empty($to) ){
			
			//}
			
			/*if(empty($rate)){
			$h = mysql_query("select * FROM xxx_ex_rate  WHERE  rate_from='$from' AND rate_to='$to' AND  rate_ex LIKE '%$rate%' ORDER BY  rate_ex ASC    LIMIT {$per_page} OFFSET {$offset}") or die(mysql_error()); 
			
			}else{*/
				$h = mysql_query("select * FROM xxx_ex_rate  WHERE  rate_from='$from'AND rate_to='$to'  LIMIT {$per_page} OFFSET {$offset}") or die(mysql_error()); 
			
			//}
			?>
			<div id="home-feeds" class="row" data-toggle="isotope">
			<?php
			while($tr = mysql_fetch_array($h))
		
			 	{
					$id=$tr['sign_id'];
			
			?>
			
			    
		  <div id="tags" class="item col-xs-12 col-md-4 ">
                <div class="panel panel-default">
                  <div class="panel-body">
				   <div class="media-left">
                        <a href="#">
                          <img src="images/people/110/guy-6.jpg" alt="" class="img-circle width-40" />
                        </a>
                      </div>
				  <div class="media-body">
				  
                        <a href="#" class="text-subhead link-text-color">
					<?php	$h2 = mysql_query("select * FROM xxx_de_sign  WHERE  sign_id='$id' ") or die(mysql_error()); 
	                    $tr2 = mysql_fetch_array($h2);
							  echo $tr2['sign_cname']; ?>
						</a>
                        <div class="text-caption text-light">Exchange Rate: <?php echo $tr['rate_ex']; ?></div>
                      </div>
                      <div class="media-right">
                        <div class="width-100 text-right">
                          <a href="../<?php echo $tr2['sign_url']; ?>" class="btn btn-primary btn-sm"> View</a>
                        </div>
                  <!--  <div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-default">Now</a>
                      <a href="#" class="btn btn-white">Yesterday</a>
                    </div>-->
                  </div>
                  <hr class="margin-none" />
                  <div class="panel-body text-center">
                    <h4 class="text-display-1"> <?php echo $tr['sign_to']; ?><span id="result"> <?php echo $tr['rate_ex'] * $amount; ?></span></h4>
                   
                  </div>
                 
				 


<p><span>Change</span> <?php echo  $tr['rate_from'].' '.$tr['sign_from']; ?> -> <?php echo  $tr['rate_to'].' '.$tr['sign_to']; ?>
					</p>		
<p>Exchange Rate: <?php echo $tr['rate_ex']; ?></p>
<input type="number" id='x' name="txt1"  value="<?php echo $tr['rate_ex']; ?>" hidden>
<!---<p><span>Amount To Change</span> <input type="number" id='xx' name="txt2" onKeyup="updatesum()" placeholder="Type Here" class="form-control"    value="<?php echo $amount; ?>"   style="width:200px;" /></p>--->		

<p>	<span>Updated Last</span> <?php echo  $tr['rate_dat'] ;?>  </p>

	 </div>
              </div>
</div>

			
			
			<?php

		}
		
		
		?>
	
			  
</div>

     <?php 
 
 echo '<ul class="pagination pagination-lg">';
									
					if ($total_pages > 1){
						//this is for previous record
						if ($has_previous_page){
						echo ' <li><a href=exresult?page='.$previous_page.'>&laquo; </a> </li>';
						}
						 //it loops to all pages
						 for($i = 1; $i <= $total_pages; $i++){
							//check if the value of i is set to current page	
							if ($i == $current_page){
							//then it sset the i to be active or focused
								echo '<li class="active"><a>'. $i.'</a> </li>';
							 }else {
							 //display the page number
								echo ' <li><a href=exresult?page='.$i.'> '. $i .' </a></li>';
							 }
						 }
						//this is for next record		
						if ($has_next_page){
						echo '<li><a href=exresult?page='.$next_page.'&amount='.$amount.'&rate='.$rate.'&from='.$from.'&to='.$to.'>&raquo;</a></li> ';
						}
						
					}
					echo '</ul>';
					}
 
 ?>

	
    

      </div>
    </div>
  </div>
<script>
function updatesum(){
			var t2 =0;
 
    $('.cartsub').text(t2);
	
	  var v1 = $('#x').val();
	  var v2 = $('#xx').val();
	  
	  var vats =  v1 * v2;
	  
	  
	   $('#result').text(vats);
	   
	  }

	  
	  $('#tags').click(updatesum()).hover(updatesum());
	  
</script>


<?php require_once("xinclude/xxx_de_foot.php"); ?>