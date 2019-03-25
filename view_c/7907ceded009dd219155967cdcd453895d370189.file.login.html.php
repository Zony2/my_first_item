<?php /* Smarty version Smarty-3.1.5, created on 2019-03-15 16:37:11
         compiled from "view\login.html" */ ?>
<?php /*%%SmartyHeaderCode:142995c8b64379d6e04-94082955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7907ceded009dd219155967cdcd453895d370189' => 
    array (
      0 => 'view\\login.html',
      1 => 1552473139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142995c8b64379d6e04-94082955',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5c8b6437a34a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8b6437a34a2')) {function content_5c8b6437a34a2($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <script src="./public/js/jquery-1.10.1.min.js"></script>
    <style>
        .wrap{margin: 100px auto;width:300px;}
        .wrap p span{display: inline-block;
            width: 80px;text-align: justify;word-spacing: 10px}
        .wrap p input{border-radius: 5px;width:200px;height: 28px; ;
            border: 1px solid #cccccc;background-image: linear-gradient(#f9f9f9,#ffffff)}
        .wrap p button{margin-left: 85px;}
    </style>
</head>
<body>

<div class="wrap">
    <form action="index.php?c=userdenlu&a=admin" method="post">
     <p> <span>用户名:</span> <input type="text" name="username"> </p>
     <p> <span>用户密码:</span> <input type="password" name="password"></p>
     <p><button class="btn btn-success">登录</button></p>
    </form>
</div>

</body>
</html><?php }} ?>