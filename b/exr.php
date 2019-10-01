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
                      <form class="form-horizontal" role="form" method="POST" action="exr">
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
				 if (isset($_POST['submit'])) {
				
			$amount= mysql_real_escape_string( $_POST["val"] );
			$rate= mysql_real_escape_string( $_POST["rate"] );
			$from= mysql_real_escape_string( $_POST["f"] );
			$to= mysql_real_escape_string( $_POST["t"] );
			
			 if(empty($amount) || empty($from )|| empty($to)){
				 
				 header("location:index");
				 
			 }
	
// connect to database
$con = mysql_connect('localhost','root','');
mysql_select_db('xxx_bdc');
// define how many results you want per page
$results_per_page = 10;
// find out the number of results stored in database
$sql='SELECT * FROM xxx_ex_rate';
$result = mysql_query($sql);
$number_of_results = mysql_num_rows($result);
// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);
// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
// retrieve selected results from database and display them on page
$sql="SELECT * FROM xxx_ex_rate WHERE  rate_from='$from' AND rate_to='$to' || rate_ex LIKE '%$rate%' ORDER BY  rate_ex ASC LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysql_query($sql);
?>

<div id="home-feeds" class="row" data-toggle="isotope">
<?php
while($tr = mysql_fetch_array($result)) {	

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
// display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="exr?page=' . $page . '">' . $page . '</a> ';
				 } }
?>
<?php require_once("xinclude/xxx_de_foot.php"); ?>