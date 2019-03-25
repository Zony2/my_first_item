<?php
  session_start();
  class Userdenlu extends Controller
  {	

      
	 public function admin()
	{  
      	
	   if(!empty($_POST))
	   {
		   
		 $_SESSION['username']=$_POST['username'];
		 
		 $username = $_POST['username'];
		 $password = $_POST['password'];		 
		 $model = new Model("user");
		 $row = $model->dbgetone("`username`='{$username}' and `password` = '{$password}'");
		
		 if( !empty($row))
		 {			 
			echo ("<script>alert('登录成功');location.href='index.php?c=productList&a=index'</script>"); 
		 }else
		 {	               
			echo ("<script>alert('登录失败');location.href='index.php?c=Userdenlu&a=admin'</script>"); 
		 }		 		   
	   }     	
	  $this->display("view/login.html");	 
	}
	  
  }


?>