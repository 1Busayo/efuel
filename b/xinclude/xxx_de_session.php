<?php
 session_name("e_change");
	session_start();
	
	function logged_in() {
		return isset($_SESSION['xxx_de_i']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("login");
		}
	}
?>
