<?php
/* Smarty version 3.1.30, created on 2017-03-30 20:22:00
  from "/usr/lamp/apache2/htdocs/admin/template/frame/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dcf868a09546_44835007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '570852d3bbd1d5bd0ebe2afeda601a2819056f4e' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/frame/index.html',
      1 => 1490876482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dcf868a09546_44835007 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>BhereShop 管理系统</title>
    <link rel="stylesheet" href="../public/admin/css/pintuer.css">
    <link rel="stylesheet" href="../public/admin/css/admin.css">
    <?php echo '<script'; ?>
 src="../public/admin/js/jquery.js"><?php echo '</script'; ?>
>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="../public/logo/logo.png" class="radius-circle rotate-hover" height="50" width="70" style="color:#888888"/>
        Bhere Shop后台管理系统</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="../index.php" target="_blank">
      <span class="icon-home"></span> 前台首页</a>
      &nbsp;&nbsp;<a class="button button-little bg-green" href="../index.php" target="_blank"><span class="icon-home"></span>欢迎&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
</a>&nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="?c=login&a=logout"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav" style="overflow:auto;">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-user"></span>基本设置</h2>
    <ul>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>商品管理</h2>
    <ul>
        <li><a href="?c=goods&a=select" target="right"><span class="icon-caret-right"></span>商品列表</a></li>
        <li><a href="?c=goods&a=addpage" target="right"><span class="icon-caret-right"></span>添加新商品</a></li>
        <li><a href="?c=category&a=select" target="right"><span class="icon-caret-right"></span>商品分类</a></li>
        <li><a href="?c=comment&a=select" target="right"><span class="icon-caret-right"></span>用户评论</a></li>
        <li><a href="?c=brand&a=select" target="right"><span class="icon-caret-right"></span>商品品牌</a></li>
        <li><a href="?c=type&a=select" target="right"><span class="icon-caret-right"></span>商品类型</a></li>
        <li><a href="?c=bin&a=select" target="right"><span class="icon-caret-right"></span>商品回收站</a></li>
        <li><a href="?c=autogoods&a=select" target="right"><span class="icon-caret-right"></span>商品上下架</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>会员管理</h2>
    <ul>
        <li><a href="?c=user&a=select" target="right"><span class="icon-caret-right"></span>会员管理</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>订单管理</h2>
    <ul>
        <li><a href="?c=order&a=select" target="right"><span class="icon-caret-right"></span>订单管理</a></li>
          <li><a href="?c=order&a=unpay" target="right"><span class="icon-caret-right"></span>待付款订单</a></li>
          <li><a href="?c=order&a=unsend" target="right" style="color:steelblue"><span class="icon-caret-right"></span>待发货订单</a></li>
          <li><a href="?c=order&a=sent" target="right"><span class="icon-caret-right"></span>已发货订单</a></li>
           <li><a href="?c=order&a=finish" target="right"><span class="icon-caret-right"></span>已完成订单</a></li>
          
    </ul>
    <h2><span class="icon-pencil-square-o"></span>权限管理</h2>
    <ul>
        <li><a href="?c=administrator&a=select" target="right"><span class="icon-caret-right"></span>管理员管理</a></li>
        <li><a href="?c=role&a=select" target="right"><span class="icon-caret-right"></span>角色管理</a></li>
        <li><a href="?c=node&a=select" target="right"><span class="icon-caret-right"></span>节点管理</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>文章管理</h2>
    <ul>
        <li><a href="?c=articletype&a=select" target="right"><span class="icon-caret-right"></span>文章类型</a></li>
        <li><a href="?c=article&a=select" target="right"><span class="icon-caret-right"></span>文章列表</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>销售统计</h2>
    <ul>
        <li><a href="?c=saledetail&a=select" target="right"><span class="icon-caret-right"></span>销售明细</a></li>
      
    </ul>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
<?php echo '</script'; ?>
>
<ul class="bread">
    <li><a href="./php/webinfo.php" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">网站信息</a></li>
    <li><b>当前语言：</b><span style="color:red;">中文</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
    <iframe scrolling="auto" rameborder="0" src="?c=goods&a=select" name="right" width="100%" height="100%"></iframe>
</div>
</body>



<?php }
}
