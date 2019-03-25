<?php
 class Controller extends Tpl
 {
	public function init()
	{
	   $a=isset($_GET['a']) ? $_GET['a'] : 'index';
       if(method_exists($this,$a))
	   {
		$this->$a();
	   }else
	   {
		die('你没有这个方法');   		   
	   }   
            	   	  
	}
	
	
	
 }




?>