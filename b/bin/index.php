<?php require_once("xinclude/xxx_de_head.php"); ?>



  <div id="content">
    <div class="container-fluid">
	<center>
      <div   class="jumbotron bg-transparent text-center margin-none">
	  <div class="brand-logo">
      <img src="images/bdc.png" alt="guy" />
    </div>
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
						 
                            <select name="f" id="statedd1" class="form-control" >
							
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

      <div id="home-feeds" class="row" data-toggle="isotope"></div>

    

      </div>
    </div>
  </div>

 <?php require_once("xinclude/xxx_de_foot.php"); ?>
 <script src="offline.min.js"></script>

	