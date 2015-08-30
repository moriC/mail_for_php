<?php
	/*******************************/
	/* file : function_session.php */
	/*******************************/
		
	function session_status_info($session_status_id){
		switch ($session_status_id) {
			case 0:
				$code_message = "PHP_SESSION_DISABLED";
			case 1:
				$code_message = "PHP_SESSION_NONE";
			case 2:
				$code_message = "PHP_SESSION_ACTIVE";
		}
		return $code_message;
	}