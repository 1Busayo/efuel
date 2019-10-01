<?php require_once("../xinclude/xxx_de_cn.php");

//echo $_POST['from'];
?>

  <div id="content">
    <div class="container-fluid">
	<center>
      <div   class="jumbotron bg-transparent text-center margin-none">
        <h4 class="page-section-heading">Bureau De Change</h4>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <form class="form-horizontal" role="form">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Amount</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="" placeholder="Type here..">
                          </div>
                        </div>

						<div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Exchange Rate(optional)</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="" placeholder="Type here..">
                          </div>
                        </div>
						                        <div class="form-group">
                          <label class="col-sm-3 control-label">From</label>
                          <div class="col-sm-4">
                            <select name="select" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                          <option value="">   </option>
					<option value="Naira &#x20A6;">Naira &#x20A6;</option>
					<option value="Dollars $">Dollars $</option>
					<option value="Euro &euro;">Euro &euro; </option>
					<option value="Pound &pound;">Pound &pound;</option>
					<option value="Others">Others</option>
                            </select>
                          </div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">To</label>
                          <div class="col-sm-4">
                            <select name="select" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                          <option value="">   </option>
					<option value="Naira &#x20A6;">Naira &#x20A6;</option>
					<option value="Dollars $">Dollars $</option>
					<option value="Euro &euro;">Euro &euro; </option>
					<option value="Pound &pound;">Pound &pound;</option>
					<option value="Others">Others</option>
                            </select>
                          </div>
                        </div>
                       
                        <div class="form-group margin-none">
                          <div class="col-sm-offset-3 col-sm-4">
                            <button type="submit" class="btn btn-primary ">Search</button>
                          </div>
                        </div>
                      </form>
                    
	
					 
					 </div>
                  </div>
		
		
		
		
		</div>
		</center>
	<br><br>
<?php
		$sql    = "SELECT count(*) FROM xxx_de_sign,xxx_ex_rate";
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
			$h = mysql_query("select * FROM xxx_de_sign,xxx_ex_rate  WHERE xxx_ex_rate.sign_id=xxx_de_sign.sign_id  ORDER BY  rate_ex DESC LIMIT {$per_page} OFFSET {$offset}") or die(mysql_error()); 
			?>
			<div class="item col-xs-12 col-md-4 ">
			<?php
			while($tr = mysql_fetch_array($h))
		
			 	{
			
			?>
			
			    
		  
                <div class="panel panel-default">
                  <div class="panel-body">
				   <div class="media-left">
                        <a href="#">
                          <img src="images/people/110/guy-6.jpg" alt="" class="img-circle width-40" />
                        </a>
                      </div>
				  <div class="media-body">
                        <a href="#" class="text-subhead link-text-color">
							 <?php echo $tr['sign_cname']; ?>
						</a>
                        <div class="text-caption text-light">Exchange Rate: <?php echo $tr['rate_ex']; ?></div>
                      </div>
                      <div class="media-right">
                        <div class="width-100 text-right">
                          <a href="#" class="btn btn-primary btn-sm"> View</a>
                        </div>
                  <!--  <div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-default">Now</a>
                      <a href="#" class="btn btn-white">Yesterday</a>
                    </div>-->
                  </div>
                  <hr class="margin-none" />
                  <div class="panel-body text-center">
                    <h4 class="text-display-1">&dollar;129,563</h4>
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                            <span class="sr-only">55% Complete</span>
                          </div>
                        </div>
                      </div>
                      <a href="#" class="btn btn-white">Add <i class="fa fa-plus"></i></a>
                    </div>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="media v-middle">
                        <div class="media-left">
                          <a href="#">
                            <img src="images/people/110/guy-6.jpg" alt="person" class="img-circle width-30" />
                          </a>
                        </div>
                        <div class="media-body">
                          <a href="#" class="text-subhead">Adrian Demian</a>
                        </div>
                        <div class="media-right">
                          <div class="text-subhead">&dollar;12,201</div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media v-middle">
                        <div class="media-left">
                          <a href="#">
                            <img src="images/people/110/woman-7.jpg" alt="person" class="img-circle width-30" />
                          </a>
                        </div>
                        <div class="media-body">
                          <a href="#" class="text-subhead">Suzanne Morris</a>
                        </div>
                        <div class="media-right">
                          <div class="text-subhead">&dollar;11,546</div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media v-middle">
                        <div class="media-left">
                          <a href="#">
                            <img src="images/people/110/guy-9.jpg" alt="person" class="img-circle width-30" />
                          </a>
                        </div>
                        <div class="media-body">
                          <a href="#" class="text-subhead">Jonny Sea</a>
                        </div>
                        <div class="media-right">
                          <div class="text-subhead">&dollar;8,732</div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media v-middle">
                        <div class="media-left">
                          <a href="#">
                            <img src="images/people/110/woman-3.jpg" alt="person" class="img-circle width-30" />
                          </a>
                        </div>
                        <div class="media-body">
                          <a href="#" class="text-subhead">
								Mary Dawson
							</a>
                        </div>
                        <div class="media-right">
                          <div class="text-subhead">&dollar;6,732</div>
                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>


			
			
			<?php

		}
		
		
		?>
	
			  </div>
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
						echo ' <li><a href=homexz?page='.$next_page.'>&raquo;</a></li> ';
						}
						
					}
					echo '</ul>';
					
 
 ?>

  