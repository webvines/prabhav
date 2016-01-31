<?php
    
    ob_start();
    
    function redirect_to($link){
    	
		header("Refresh: 2; {$link}");
		
		
    }
    
?>