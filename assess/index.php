<?php
  //���庯��  �ļ��Զ����� 
   function __autoload($name)
  {
	 //���غ����ļ�
     //���ؿ��Ʋ�
     if(file_exists("./controller/".ucfirst($name).".php"))
	 {
		 require("./controller/".ucfirst($name).".php");
	 }
      //����smarty�������	 
	  else if(file_exists("./libs/".ucfirst($name).".class.php"))
	  {		  
		  require("./libs/".ucfirst($name).".class.php");
		  
	  }
	  //����smarty�������
	  else if(file_exists("./libs/sysplugins/".ucfirst($name).".php"))
	  {
		  
		 require("./libs/sysplugins/".ucfirst($name).".php"); 
		  
	  }
	  //����ģ�Ͳ� model
	  else if(file_exists("./model/".ucfirst($name).".class.php"))
	  {
		require("./model/".ucfirst($name).".class.php");  
	  }
	  //������ͼ�ļ�
	  else if(file_exists("./ORG/".ucfirst($name).".php"))
	  {
		  require("./ORG/".ucfirst($name).".php");
	  }
	  
	  
	  else{
		  die("��û�и�".$name."��");
	  }
	   	  
  }
  
  include("./config/config.php");
  
  $c = isset($_GET['c']) ? $_GET['c'] : "index";
  
  $dom = ucfirst($c); 
  
  $controller = new $dom; 
  
  $controller->init();
  
?>