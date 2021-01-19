<?php

    #$path='/media/root/persistence/Code/clinique';
	#$path=__FILE__;
	$path='';
	function main($path){
		
		session_start();
	     
	    require($path.'core/global.php');

	    $Url = $_SERVER['REQUEST_URI'];
	    $method = $_SERVER['REQUEST_METHOD'];
	    #var_dump($_SERVER);
	    
	    //require($path.'/router/conn.php');
	    //index($Url,$method);
	    require($path.'router/web.php');
		isset($_SESSION['role'])??$_SESSION['role']='anonymous';
		#echo $Url;
		if ($Url=='/') {
			header('location: /index.php/');
			exit();
		}

	}

	main($path);
	
   
    
?>
