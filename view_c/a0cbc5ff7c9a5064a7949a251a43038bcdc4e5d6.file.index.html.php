<?php /* Smarty version Smarty-3.1.5, created on 2019-03-15 16:54:53
         compiled from "view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:129205c8b643e0fac76-70521143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0cbc5ff7c9a5064a7949a251a43038bcdc4e5d6' => 
    array (
      0 => 'view\\index.html',
      1 => 1552640066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129205c8b643e0fac76-70521143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5c8b643e20853',
  'variables' => 
  array (
    'user' => 0,
    'fenlei' => 0,
    'v' => 0,
    'data' => 0,
    'page_str' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8b643e20853')) {function content_5c8b643e20853($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <script src="./public/js/jquery-1.10.1.min.js"></script>
    <style>
        body{margin:0;
            /*font-family:"Microsoft YaHei";line-height:1;font-size:12px;*/
            font:12px/1 "Microsoft YaHei";
        }
        p,dl,dd{margin:0;}
        h1,h2,h3,h4,h5,h6{margin:0; font-weight:normal; font-size:100%;}
        ul,ol{margin:0;padding:0;list-style:none;}
        a{ text-decoration: none;color:#333;}
        em,i{font-style:normal;}
        strong,b{font-weight:normal;}
        img{border:none;vertical-align:bottom;}
        .clearfix{*zoom:1;} /*ie低版本兼容处理*/
        .clearfix:after{content:"";clear:both;display:block; height:0;overflow:hidden;font-size:0;line-height:0;}
        table{border-spacing: 0;border-collapse: collapse;}
        th,td{padding:0;text-align:left;vertical-align: top;}
        th{font-weight:normal;text-align:left;}
        input,textarea{outline:none;}
        input{margin:0;padding:0;border:none;}
        input[type="button"],input[type="submit"]{box-sizing:content-box;}
        textarea{resize:none;overflow:auto;}

        .wrap{position: relative; width:1360px;height: 634px;margin: 2px auto;background-color:#d2e9e8 }
        .wrap_title{height:52px;background-color:#222222;padding-left: 12px;
            font-size:18px;color: #9d9d9d;line-height: 52px;}

        .wrap_list>li{height: 40px;width:224px;background-color:#add2d0;line-height: 40px;
            border-radius:0 5px 5px 0;font-size:18px;margin-top: 3px; }
        .wrap_list>li i{display: inline-block;height: 100%;width:46px;text-align: center;}
        .wrap_list>li img{vertical-align:middle;}
        .dji{color:#9e4a20 }
        .conten{position: absolute;right: 0;top:52px;
            height:550px;width: 1108px;padding: 0 17px;background-color: white}
        .mbaox{height: 36px;margin-top: 10px; }
        .mbaox li{height: 100% ;font-size: 12px;color:#777777;line-height: 20px;  }
        .sousuo{ border:1px solid #c9c6c6;border-radius: 5px; }
        .sousuo h4{height:36px;background-color: #f5f5f5;color:#333333;padding-left: 15px;
           font-size:18px;line-height: 36px;    }
        .sousuo form{height: 52px;}
        .sousuo form label{font-size: 12px;font-weight: normal;color:#333333; }
        .socont{padding-top:15px;padding-left:15px;   }
        .socont label{ }
        .socont input{width:144px;
                      border:2px solid #c4b6f4 ;
                      height: 24px;border-radius: 5px; }
        .socont select{width:67px;text-align: center;
            border:2px solid #c4b6f4 ;padding-left: 10px;
            height: 24px;border-radius: 5px; }
       .tijiao{border-radius:5px;background-color: #c4b6f4;border: 0;
           font-size:12px;padding: 8px 2px;   }
        .biaoge{width: 100%;margin-top: 10px; }
        .biaoge th,.biaoge td{ height:30px; }
        .biaoge th{ font-size:12px;font-weight: bold;border-bottom: 2px solid #dddddd;
            line-height: 30px;text-align: center  }
        .biaoge td{ border-top: 1px solid #dddddd;text-align: center;line-height: 30px;}
        .biaoge td img{vertical-align: middle}
        .upd,.delt,.xiaja{color: red;font-weight: bold;}
        .fenye{position:absolute;bottom:40px;right:0; margin-top: 30px;}
        .productList{}
        .productList h3{ padding-left:50px;height: 40px;width:224px;background-color:#add2d0;line-height: 40px;
            border-radius:0 5px 5px 0;font-size:18px;margin-top: 3px;font-weight: bold;color: red;cursor:pointer; }
            .productList ul{display: none;}
         .productList ul li{ height: 20px;width:224px;background-color:#add2d0;line-height:20px;
            border-radius:0 5px 5px 0;font-size:14px;margin-top: 3px; padding-left:52px }   
        .wrap_title ul{float:right;margin-right:20px;} 
        .wrap_title ul li{float:left;margin-left:50px; color:#fff;font-size:20px;} 
		
	</style>
</head>
<body>

<div class="wrap">
<h1 class="wrap_title">后台管理系统       
   <ul> <li>当前用户是:<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</li>
    <li><a href='index.php?c=Userdenlu&a=admin' style='color:red;font-size:20px;'> 退出登录 </a> </li> </ul>    </h1>

<ul class="wrap_list">
    <li><i><img src="./public/images/navmag1.jpg" alt=""></i>   商品</li>
    <li><i><img src="" alt=""></i> 采购</li>
    <li><i><img src="./public/images/navmag2.jpg" alt=""></i>   库存</li>
    <li><i><img src="./public/images/navmag3.jpg" alt=""></i>   资料</li>
    <li><i><img src="./public/images/navmag4.jpg" alt=""></i> <a href='index.php?c=ProductList&a=add' style='color:red;font-weight:bold'>添加商品</a> </li>  
</ul>

<div class="productList">
    <h3>商品分类</h3>   
        <ul>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fenlei']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li><a href="index.php?c=ProductList&a=classify&lei=<?php echo $_smarty_tpl->tpl_vars['v']->value['bianhao'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['calss'];?>
 </a>  </li>          
		<?php } ?>
        </ul>     
</div>

<!-- <ul class="nav nav-pills">  
  <li class="dropdown">
   <a href="" class="dropdown-toggle" data-toggle="dropdown">商品分类<span class="caret"></span></a>
  <ul class="dropdown-menu">
     <li><a href="">PHP</a></li>
     <li><a href="">JS</a></li>
     <li><a href="">JQ</a></li>
     <li><a href="">CSS</a></li>
  </ul>
 </li>
</ul> -->

<div class="conten">
    <ul class="breadcrumb mbaox">
        <li class="active">商品管理</li>
        <li>商品列表</li>
    </ul>

    <div class="sousuo">
    <h4>搜索</h4>
        <form action="index.php" method='get'>
		<input type="hidden" name="c" value="ProductList"/>
		 <input type="hidden" name="a" value="sousuo"/>
        <div class="socont"> 
        <label for="">名称</label>  <input type="text" name="sname">
        <label for="">状态</label>
            <select class="" name='status'>
                <option value='上架'>上架</option>
                <option value='下架'>下架</option>
            </select>
			
        <button class="tijiao">开始搜索</button>
        </div>
        </form>
    </div>

    <table class="biaoge  table-striped table-hover table-condensed">
        <thead>
        <tr>
            <th>编号</th>
            <th>图标</th>
            <th>名称</th>
            <th>价格</th>
            <th>邮费</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        </thead>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt=""></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['postage'];?>
</td>
            <td class="z<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  ><?php echo $_smarty_tpl->tpl_vars['v']->value['putaway'];?>
</td>
            <td>
                <a href="index.php?c=productList&a=upda&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&lei=" class="upd"> 修改 </a>
                <a href="index.php?c=productList&a=delet&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&lei=" class="xiaja" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >下架 </a>
                <a href="index.php?c=productList&a=delet&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&lei=" class="delt"> 删除 </a>
            </td>
        </tr>
		<?php } ?>
       <!--<tr>
            <td>1</td>
            <td><img src="./public/images/list_033.jpg" alt=""></td>
            <td>人参果</td>
            <td>100.00￥</td>
            <td>100.00￥</td>
            <td>上架</td>
            <td>
                <a href="" class="upd"> 修改 </a>
                <a href="" class="xiaja"> 下架 </a>
                <a href="" class="delt"> 删除 </a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="./public/images/list_033.jpg" alt=""></td>
            <td>人参果</td>
            <td>100.00￥</td>
            <td>100.00￥</td>
            <td>上架</td>
            <td>
                <a href="" class="upd"> 修改 </a>
                <a href="" class="xiaja"> 下架 </a>
                <a href="" class="delt"> 删除 </a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="./public/images/list_033.jpg" alt=""></td>
            <td>人参果</td>
            <td>100.00￥</td>
            <td>100.00￥</td>
            <td>上架</td>
            <td>
                <a href="" class="upd"> 修改 </a>
                <a href="" class="xiaja"> 下架 </a>
                <a href="" class="delt"> 删除 </a>
            </td>
        </tr>
        <tr>
        <td>1</td>
        <td><img src="./public/images/list_033.jpg" alt=""></td>
        <td>人参果</td>
        <td>100.00￥</td>
        <td>100.00￥</td>
        <td>上架</td>
        <td>
            <a href="" class="upd"> 修改 </a>
            <a href="" class="xiaja"> 下架 </a>
            <a href="" class="delt"> 删除 </a>
        </td>
    </tr>-->
    </table>
    <ul class="pagination fenye">
      <!--  <li><a href="">上一页</a></li>
        <li class="active"><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li><a href="">5</a></li>
        <li><a href="">6</a></li>
        <li class=""><a href="">7</a></li>
        <li><a href="">下一页</a></li>-->
		<?php echo $_smarty_tpl->tpl_vars['page_str']->value;?>

    </ul>
</div>

</div>

<script type="text/javascript">
 $('.productList h3').click(function () {
     $('.productList ul').slideToggle();
 })   
$('.xiaja').click(function(){ 
  var cla = ".z"+this.name+"" ; 
    $.ajax({	 
	  type:'post',
	  url:"index.php?c=Ajax&a=xiajia",	  
	  data:{'id':this.name},	  
	  success:function(msg){       	  
        $(cla).html(msg);         
	  }		  
	 }) 
   return false;	 
 })
</script>

</body>
</html><?php }} ?>