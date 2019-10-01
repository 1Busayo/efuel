<?php
		ob_start();

	 //1. create a database connenction
$connection = mysql_connect("127.0.0.1","root","");
 if (!$connection){
  die("Database connecton failed" . mysql_error());
}
//2. Select a database to use
$db_select = mysql_select_db("xxx_bdc");
 if (!$db_select){
  die ("Database selection failed:" . mysql_error());
 } 
 
 

echo "Username: ". preg_replace('#[^0-9a-z]#i', '', $_GET['u']).'<br><br>';

echo $prof= preg_replace('#[^0-9a-z]#i', '', $_GET['u']);

header("location:b/profile?u=".$prof);

?>

 <a href="admin/profile?u=<?php echo $prof; ?>"> clicko    </a>
 
 
 