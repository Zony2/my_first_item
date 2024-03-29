<?php
header("Content-Type:text/html;charset=utf-8" );
class ProductList extends Controller
{  
  public function index()
   {
   $model = new Model("commodity");
	    /*查询数据库内容 */
   $pageSize = 5;//固定显示5条数据 
   $pagenum = !empty($_GET['p']) ? $_GET['p'] : 1;//得到当前用户点击的页数
   $curpage = ($pagenum - 1) * $pageSize;//得到偏移量;
   $data = $model->dbgetlist("1","order by id desc","{$curpage},{$pageSize}");
   
   $totlepage = $model->counts();
   //echo ($totlepage);die;
   
   $pageNumber = ceil($totlepage / $pageSize); //得到总页数
   //echo ($pageNumber);die;
   
    //控制总页数  固定显示5页
    $pageshow =5;//固定显示5页
    /*
	  中间5页做法:
	  第一页的页数
	  12345
	  第二页的页数
	  34567
      第三页的页数
      56789
	*/
    $pagecur = floor($pageshow / 2);//得到偏移量
	//echo ($pagecur);die;
	/*
	  第一页：12345
	  当前点击的页数 ：5
	  偏移量：2 
	  起始页: 3 
	  第二页: 34567
	*/
	$startpage = $pagenum - $pagecur;//得到起始页  -1 0 1 2 3
	
	//echo ($startpage);
	//echo ("<hr>");
	$endpage =  $pagenum + $pagecur;//得到尾页
	//echo ($endpage);	
	
	//判断起始页和尾页
	if($pageNumber > $pageshow)
	{
		if($startpage < 1)
		{
			$startpage = 1;
			//echo ($startpage);die;
			$endpage = $startpage + $pageshow -1;  // 5
			
			//echo ($endpage);die;
		}
		if($endpage > $pageNumber)
		{
			$endpage = $pageNumber;
			$startpage = $endpage - $pageshow+ 1;
			
		}
	 //不足5页情况
	}else
	{
	  	$startpage = 1;
		$endpage = $pageNumber;
	}
    //echo ($endpage);die;
    
    $page_str = "";//分页
	$page_str .= '<li> <a href="index.php?c=productList&a=index&p='.(($pagenum-1) < 1 ? 1 : ($pagenum-1)).'" title="Previous Page"> 上一页</a> </li>  ';
	for($i = $startpage;$i<=$endpage;$i++)
	{	
      $class = ($i == $pagenum) ? "active" : " ";		
	 $page_str .= '<li><a href="index.php?c=productList&a=index&p='.$i.'" class="'.$class .'" >'.$i.'</a> </li>'; 
	}
	$page_str .= '<li>  <a href="index.php?c=productList&a=index&p='.(($pagenum+1) > $pageNumber ? $pageNumber : ($pagenum+1)).'" title="Next Page">下一页</a> </li>';
	    
	  $this->assign("data",$data);
	  $this->assign("page_str",$page_str);
	    
    $this->display("view/index.html");	 	
  }  
  //添加
  public function add(){
	   $model = new Model("commodity");
	 if(!empty($_POST)){	        
       if($_FILES['image']['size'] >2*1024)
	   {
	    echo ("<script>alert('您上传的图片过大！');location.href='index.php?c=ProductList&a=index'</script>");		   
	   }      
	  $file_type = array(".jpg",".bmp",".gif",".jpeg",".png");   
	  $file_tmp = substr($_FILES['image']['name'],strrpos($_FILES['image']['name'],"."));	 
	  if(!in_array($file_tmp,$file_type))
	  {
		echo ("<script>alert('您的图片格式不对！');location.href='index.php?c=ProductList&a=index'</script>");
	  }
	  $file_name =  time().rand(1000,9999).$file_tmp;	  	  
	  $file_url = "./public/images";
	  if(!file_exists($file_url))
	  {
		 mkdir($file_url);		  
	  }  	 
	  $file_url = $file_url ."/" .$file_name; 	   	  
	  move_uploaded_file($_FILES['image']['tmp_name'],$file_url);		
        $name= $_POST['name'];
        $price= $_POST['price'];
        $postage= $_POST['postage'];
        $putaway= $_POST['putaway'];
		$img=$file_url;
		//print_r($img); die();
		
		$arr=array(); 
		$arr['name']=$name;
		$arr['price']=$price;
		$arr['postage']=$postage;
		$arr['putaway']=$putaway;
		$arr['img']=$img;		
	    $model->dbinsert($arr);		
		echo ("<script>alert('添加成功');location.href='index.php?c=ProductList&a=index'</script>");		  	  
	  }
	  $this->display("view/addye.html");	  		  
  }
		
	//删除
 public function delet()
 {
	  if(!empty($_GET))
	   {		 
         $model = new Model("commodity");
		 $id=!empty($_GET) ? $_GET["id"] : 1;
	    // $model->dbgetone("id={$id}");
         $model->dbgetdel($id);
		 echo ("<script>alert('删除成功');location.href='index.php?c=ProductList&a=index'</script>");		  
	   }else
	   {
		 echo ("<script>alert('删除失败');location.href='index.php?c=ProductList&a=index'</script>");		  		   
	   }	    
 }	
//修改
 public function upda()
 {
	 $model = new Model("commodity"); 	 
	 if(!empty($_GET)){		
		$id = !empty($_GET['id'])?$_GET['id']:1;		
        $row= $model->dbgetone("id={$id}");				
		$this->assign('yuan',$row);	 
	 }
	if(!empty($_POST)){		   
           //控制文件上传的大小
       if($_FILES['image']['size'] >2*1024)
	   {
	    echo ("<script>alert('您上传的图片过大！');location.href='index.php?c=ProductList&a=index'</script>");		   
	   }      
	  $file_type = array(".jpg",".bmp",".gif",".jpeg",".png");   
	  $file_tmp = substr($_FILES['image']['name'],strrpos($_FILES['image']['name'],"."));	 
	  if(!in_array($file_tmp,$file_type))
	  {
		echo ("<script>alert('您的图片格式不对！');location.href='index.php?c=ProductList&a=index'</script>");die;
	  }
	  $file_name =  time().rand(1000,9999).$file_tmp;	  	  
	  $file_url = "./public/images";
	  if(!file_exists($file_url))
	  {
		 mkdir($file_url);		  
	  }	  	 
	  $file_url = $file_url . "/" .$file_name; 	   	  
	  move_uploaded_file($_FILES['image']['tmp_name'],$file_url);		    
        $name= $_POST['name'];
        $price= $_POST['price'];
        $postage= $_POST['postage'];
        $putaway= $_POST['putaway'];
				
		$img=$file_url;
		//print_r($img); die();
		
		$arr=array(); 
		$arr['name']=$name;
		$arr['price']=$price;
		$arr['postage']=$postage;
		$arr['putaway']=$putaway;
		$arr['img']=$img; 
        
		
	    $model->dbedit($_POST['id'],$arr);		
		echo ("<script>alert('修改成功');location.href='index.php?c=ProductList&a=index'</script>");		  	  	  
	  }		 
   $this->display("view/updat.html");  
}
//下架
public function xiajia(){
    if(!empty($_GET))
	   {	          
         $model = new Model("commodity");
		 $id=!empty($_GET) ? $_GET["id"] : 1; 
	     $arr=array();
		 $arr['putaway']='下架';
         $model->dbedit($id,$arr);
	    echo ("<script>location.href='index.php?c=ProductList&a=index'</script>");		  	  	
	   }    	
}
//搜索
public function sousuo(){	
	 if(!empty($_GET)){		 
		
	   $sname=$_GET['sname']; 
	   $status=$_GET['status']; 
       $model = new Model("commodity");
	    /*查询数据库内容*/
       $pageSize = 5;//固定显示5条数据 
       $pagenum = !empty($_GET['p']) ? $_GET['p'] : 1;//得到当前用户点击的页数
       $curpage = ($pagenum - 1) * $pageSize;//得到偏移量;
       $data = $model->dbgetlike($sname,$status,"{$curpage},{$pageSize}");
	            	   
       $totlepage = $model->scounts($sname,$status);
	   
       //echo ($totlepage);die;
   
   $pageNumber = ceil($totlepage / $pageSize); //得到总页数
    //echo ($pageNumber);die;
   
    //控制总页数  固定显示5页
    $pageshow =5;//固定显示5页
    /*
	  中间5页做法:
	  第一页的页数
	  12345
	  第二页的页数
	  34567
      第三页的页数
      56789
	*/
    $pagecur = floor($pageshow / 2);//得到偏移量
	//echo ($pagecur);die;
	/*
	  第一页：12345
	  当前点击的页数 ：5
	  偏移量：2 
	  起始页: 3 
	  第二页: 34567
	*/
	$startpage = $pagenum - $pagecur;//得到起始页  -1 0 1 2 3
	
	//echo ($startpage);
	//echo ("<hr>");
	$endpage =  $pagenum + $pagecur;//得到尾页
	//echo ($endpage);	
	
	//判断起始页和尾页
	if($pageNumber > $pageshow)
	{
		if($startpage < 1)
		{
			$startpage = 1;
			//echo ($startpage);die;
			$endpage = $startpage + $pageshow -1;  // 5
			
			//echo ($endpage);die;
		}
		if($endpage > $pageNumber)
		{
			$endpage = $pageNumber;
			$startpage = $endpage - $pageshow+ 1;
			
		}
	 //不足5页情况
	}else
	{
	  	$startpage = 1;
		$endpage = $pageNumber;
	}
    //echo ($endpage);die;
     
     $page_str = "";//分页
	$page_str .= '<li><a href="index.php?c=productList&a=sousuo&sname='.$_GET["sname"].'&status='.$_GET["status"].'&p='.(($pagenum-1) < 1 ? 1 : ($pagenum-1)).'" title="Previous Page"> 上一页</a> </li>  ';
	for($i = $startpage;$i<=$endpage;$i++)
	{	    	
	 $page_str .= '<li><a href="index.php?c=productList&a=sousuo&sname='.$_GET["sname"].'&status='.$_GET["status"].'&p='.$i.'"  >'.$i.'</a> </li>'; 
	}
	$page_str .= '<li><a href="index.php?c=productList&a=sousuo&sname='.$_GET["sname"].'&status='.$_GET["status"].'&p='.(($pagenum+1) > $pageNumber ? $pageNumber : ($pagenum+1)).'" title="Next Page">下一页</a> </li>';
	    
	  $this->assign("data",$data);
	  $this->assign("page_str",$page_str);	   
      $this->display("view/sousuo.html");
	}
	
	
}





}

?>