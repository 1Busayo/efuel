<?php require_once("xinclude/xxx_de_head.php"); ?>



  <div id="content">
    <div class="container-fluid">
	<center>
      <div   class="jumbotron bg-transparent text-center margin-none">
	  <div class="brand-logo">
      <img src="images/light.png" alt="e-Fuel" />
    </div>
        <h4 class="page-section-heading"></h4>
                  <div class="panel panel-default">
                    <div class="panel-body">
					
								
							  <?php
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClas = 'alert-success';
            $statusMs = 'Congratulations!!! Your Order has been sent successfully!!!';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Sorry!!! Your Order  was not successfull';
            break;
			case 'fil':
            $statusMsgClass = 'alert-warning';
            $statusMsg = 'Fill the form Completly';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
  
    <?php
	if(!empty($statusMs)){
        echo '<div class="alert '.$statusMsgClas.'"><strong><i class="fa fa-check-circle fa-2x"></i>  '.$statusMs.'</strong> </div>';
    } 
	
	if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'"><strong><i class="fa fa-warning-circle fa-2x"></i>  '.$statusMsg.'</strong> </div>';
    } 
	
	if(!empty($_GET['stus'])){
        echo '<div class="alert '.$statusMsgClass.'"><strong><i class="fa fa-times-circle fa-2x"></i>  '.$_GET['stus'].'</strong> </div>';
    } 
	
	
	?>
	
					
                      <form class="form-horizontal" role="form" method="POST" action="m">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Liters (optional)</label>
                          <div class="col-sm-4">
                            <input type="text" name="x1" class="form-control" id="" placeholder="Type here..">
                          </div>
                        </div>

						<div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                          <div class="col-sm-4">
                            <input type="text" name="x2" class="form-control" id="" placeholder="Type here..">
                          </div>
                        </div>

						<div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Type of Fuel</label>
                          <div class="col-sm-4">
                           
						     <select name="x3" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                              <option></option>
                              <option value="Petrol">Petrol</option>
							  <option value ="Disel">Disel</option>
                              <option value="Gas">Gas</option>
							  <option value="Kerosene">Kerosene</option>
                              </select>
                          </div>
                        </div>
						<div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label"></label>
                          <div class="col-sm-4">
                           
						     <select name="x4" class="selectpicker" placeholder="Personal/Company/Filling Station" data-style="btn-white" data-live-search="true" data-size="5">
                              <option></option>
                              <option value="Personal">Personal</option>
							  <option value="Company">Company</option>
                              <option value="Filling station">Filling station</option>
                              </select>
                          </div>
                        </div>
						
						<!--<div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Seller</label>
                          <div class="col-sm-4">
                           
						     <select name="select" class="form-control selectpickr" data-style="btn-white" data-live-search="true" data-size="5">
                              <option></option>
                              <option>Pour Right oil and Gas</option>
							  </select>
                          </div>
                        </div>-->
						
					

						    <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Phonenumber</label>
                          <div class="col-sm-4">
                            <input type="phonenumber" name="x5" class="form-control" id="" placeholder="Type here..">
                          </div>
                        </div>
                    
					<div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-4">
                            <input type="Email" name="x6" class="form-control" id="" placeholder="Type here..">
                          </div>
                        </div>
                    
					<div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Address</label>
                          <div class="col-sm-4">
                            <textarea class="form-control" name="x7" ></textarea>
                          </div>
                        </div>

                       
                        <div class="form-group margin-none">
                          <div class="col-sm-offset-3 col-sm-4">
                            <button type="submit" name="submit" class="btn btn-primary ">Submit</button><!-- <a href="login" class="btn btn-success "><i class="fa fa-user"></i>  Become a Merchant</a>-->
                          </div>
                        </div>
						<!--<b>If you are a certified dealer on Petrol Disel Gas Kerosense Please kindly Contact info@efuel.com.ng </b>-->
                      </form>
                    
	
					 
					 </div>
                  </div>
		
		
		
		
		</div>
		
		</center>
	<br><br>

      <div id="home-feeds" class="row" data-toggle="isotope"></div>

    

      </div>
    </div>
  </div>

 <?php require_once("xinclude/xxx_de_foot.php"); ?>
 <script src="offline.min.js"></script>

	