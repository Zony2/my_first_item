<?php /* Smarty version Smarty-3.1.5, created on 2019-03-13 20:13:45
         compiled from "view\updat.html" */ ?>
<?php /*%%SmartyHeaderCode:127925c88f3f9bfca24-52880887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60093703f5045b93ef4bbf146d05beaabbaf4ea7' => 
    array (
      0 => 'view\\updat.html',
      1 => 1552463849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127925c88f3f9bfca24-52880887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'yuan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5c88f3f9c6233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c88f3f9c6233')) {function content_5c88f3f9c6233($_smarty_tpl) {?><!DOCTYPE html>
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

     .biaodan{width:30%;margin:100px auto;text-align: center;}
     .xiang{width:30%;line-height: 200%}
     .cont{width:30%;}
     .anniu{padding-left: 60px;}
     .qux,.cz,.tj{padding: 0 17px;height:30px;line-height: 30px;margin-left: 20px; }
    </style>
 </head>
<body>
<div class="container">
        <form action="index.php?c=ProductList&a=upda" method="post" class="biaodan  row " enctype="multipart/form-data">
         <div class="form-group has-success has-success form-inline row  sfda" > <label for="" class="col-md-4 xiang" style="width: 30%" >商品名:</label> <input  type="text" value='<?php echo $_smarty_tpl->tpl_vars['yuan']->value["name"];?>
'  style="width: 60%"  class="control-label form-control input-sm col-md-8  cont" name="name"> </div>
         <div class="form-group has-success form-inline row"> <label for="" class="col-md-4 xiang" style="width: 30%">价格:</label>  <input type="text"  style="width: 60%" value='<?php echo $_smarty_tpl->tpl_vars['yuan']->value["price"];?>
'  class="control-label form-control input-sm col-md-8  cont" name="price">    </div>
         <div class="form-group has-success form-inline row"> <label for="" class="col-md-4 xiang" style="width: 30%">邮费:</label>  <input type="text" style="width: 60%"  value='<?php echo $_smarty_tpl->tpl_vars['yuan']->value["postage"];?>
'  class="control-label form-control input-sm col-md-8  cont" name="postage">   </div>
         <div class="form-group has-success form-inline row"> <label for="" class="col-md-4 xiang" style="width: 30%">描述:</label> <input type="text" style="width: 60%" value='<?php echo $_smarty_tpl->tpl_vars['yuan']->value["putaway"];?>
'   class="control-label form-control input-sm col-md-8   cont" name="putaway">  </div>
         <div class="form-group has-success form-inline row"> <label for="" class="col-md-4 xiang" style="width: 30%">图片:</label>  <input type="file" style="width: 60%" value='<?php echo $_smarty_tpl->tpl_vars['yuan']->value["img"];?>
'   class="control-label form-control input-sm col-md-8  cont" name="image">    </div>
         <div class="form-group has-success form-inline row anniu">
              <a href="index.php?c=ProducList&a=index" class="btn btn-danger btn-sm qux">取消</a>
              <input type="reset"  value="重置" class="btn  btn-success btn-sm cz">
              <input type="submit" value="提交" class="btn  btn-success btn-sm tj">
         </div>
		 <input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['yuan']->value["id"];?>
'>
     </form>
 </div>
</body>
</html><?php }} ?>