<?php
header("Content-Type:text/html;charset=utf-8" );
class Ajax extends Controller
{
  function updaImg()
  {  
      $c=$_POST['id'];	     	  
	  $file_tmp = array_reverse( explode('\\',$c))[0];      
	  $file_url = "./public/images";	  	 
	  $file_url = $file_url . "/" .$file_tmp; 	   	  	 	  
	  echo($file_url);  	 	  
  }	
  public function xiajia(){
	  
	 	
    if(!empty($_POST))
	   {
         $model = new Model("commodity");	       
		 $id=!empty($_POST) ? $_POST["id"] : 1; 
	     $arr=array();
		 $arr['putaway']='下架';
         $model->dbedit($id,$arr);	
         echo('下架');		          
	   }    	
    }
	
	
	
	
	
	
	
	
	
} 



?>