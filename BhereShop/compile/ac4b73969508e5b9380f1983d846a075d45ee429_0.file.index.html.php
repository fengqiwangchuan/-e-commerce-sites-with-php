<?php
/* Smarty version 3.1.30, created on 2017-04-01 18:30:19
  from "/usr/lamp/apache2/htdocs/template/pi/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58df813bd3aa65_88256710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac4b73969508e5b9380f1983d846a075d45ee429' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pi/index.html',
      1 => 1491038010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58df813bd3aa65_88256710 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cut')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.cut.php';
if (!is_callable('smarty_modifier_time')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.time.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bhere shop 个人中心</title>
		<meta name="keywords" content="">
		<meta name="description" content="">

		<link rel="stylesheet" href="./public/css/pi/safe/css.css" />
		<link rel="stylesheet" href="./public/css/pi/css.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/common.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/ms-style.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/personal_member.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/Snaddress.min.css" />
		<link rel="stylesheet" href="./public/css/pi/sui.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/jquery-1.9.1.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/sui.js" ><?php echo '</script'; ?>
>
		<style>


            *{margin:0;padding:0;list-style-type:none;}

            body{color:#666;font:12px/1.5 Arial;}

            /* star */

            #star{position:relative;width:600px;margin:20px auto;height:24px;}

            #star ul,#star span{float:left;display:inline;height:19px;line-height:19px;}

            #star ul{margin:0 10px;}

            #star li{float:left;width:24px;cursor:pointer;text-indent:-9999px;background:url(./public/img/pi/star/star.png) no-repeat;}

            #star strong{color:#f60;padding-left:10px;}

            #star li.on{background-position:0 -28px;}

            #star p{position:absolute;top:20px;width:159px;height:60px;display:none;background:url(./public/img/pi/star/icon.gif) no-repeat;padding:7px 10px 0;}

            #star p em{color:#f60;display:block;font-style:normal;}


		body {
		    background: #f5f5f5;
		}
			.sui-table th{
		    padding: 16px 8px;
		    line-height: 18px;
		    text-align: center;
		    vertical-align: middle;
		    border-top: 1px solid #e6e6e6;
		    font-weight: normal;
		    font-size: 14px;
		    color: #333333;
		   }
		   .sui-table td {
		    padding: 16px 8px;
		    line-height: 18px;
		    text-align: center;
		    vertical-align: middle;
		    border-top: 1px solid #e6e6e6;
		    font-weight: normal;
		    font-size: 12px;
		    color: #333333;
		   }
	img {
	    max-width: 100%;
	    height: auto;
	    /*vertical-align: bottom;*/
	    border: 0;
	    -ms-interpolation-mode: bicubic;
	    margin-left: -10px;
	}
  a{
	color: #000000;
   }
  .xxk{
      display: inline-block;
      width: 162px;
      text-align: center;
      height: 22px;
      line-height: 22px;
      transition: all .5s;
      color:#222;

  }
            .xxk:hover{
                background:orange;
                color:#ffffee;
                border-radius:5px;
                cursor:pointer;
                color: snow;
            }
            #showcomment{
                width:700px;
                height: 500px;
                border: 1px solid ;
                position: absolute;
                background-color:#ffffff;
                left: 180px;
                top: 158px;
                border-radius: 10px;
                opacity: 0.9;
                display: none;
            }
            .on {
                border-bottom:2px solid orangered;
                color: orangered;
            }
		</style>
        <?php echo '<script'; ?>
 type="text/javascript">

            window.onload = function (){



                var oStar = document.getElementById("star");

                var aLi = oStar.getElementsByTagName("li");

                var oUl = oStar.getElementsByTagName("ul")[0];

                var oSpan = oStar.getElementsByTagName("span")[1];

                var oP = oStar.getElementsByTagName("p")[0];

                var i = iScore = iStar = 0;

                var aMsg = [

                    "很不满意|差得太离谱，与卖家描述的严重不符，非常不满",

                    "很不满意|差得太离谱，与卖家描述的严重不符，非常不满",

                    "一般|质量一般，没有卖家描述的那么好",

                   "非常满意|质量非常好，与卖家描述的完全一致，非常满意",

                    "非常满意|质量非常好，与卖家描述的完全一致，非常满意"

                ]



                for (i = 1; i <= aLi.length; i++){

                    aLi[i - 1].index = i;



                    //鼠标移过显示分数

                    aLi[i - 1].onmouseover = function (){

                        fnPoint(this.index);

                        //浮动层显示

                        oP.style.display = "block";

                        //计算浮动层位置

                        oP.style.left = oUl.offsetLeft + this.index * this.offsetWidth - 104 + "px";

                        //匹配浮动层文字内容

                        oP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1]

                    };



                    //鼠标离开后恢复上次评分

                    aLi[i - 1].onmouseout = function (){

                        fnPoint();

                        //关闭浮动层

                        oP.style.display = "none"

                    };



                    //点击后进行评分处理

                    aLi[i - 1].onclick = function (){

                        iStar = this.index;

                        oP.style.display = "none";

                        oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"

                    }

                }



                //评分处理

                function fnPoint(iArg){

                    //分数赋值

                    iScore = iArg || iStar;

                    for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "on" : "";

                }



            };

        <?php echo '</script'; ?>
>
	</head>

	<body class="ms-body">
		<div id="" class="ng-top-banner"></div>
		<div class="ng-toolbar">
		<!--顶部导航的位置-->
				
        <div id="menu">
            <ul>
                <li><a href="?c=index&a=index">WELCOME BHERESHOP</a>
                    <div>
                        <ul>
                            <li><a href="default.htm">新用户注册</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="?c=pi&a=index">个人中心</a>
                    <div>
                        <ul>
                            <li><a href="default.htm">已买到的商品</a></li>
                            <li><a href="default.htm">个性化设置</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="categories.html">收藏夹</a>
                    <div>
                        <ul>
                            <li><a href="default.htm">收藏的商品</a></li>
                            <li><a href="default.htm">收藏的店铺</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="categories.html">卖家中心</a>
                    <div>
                        <ul>
                            <li><a href="default.htm">免费开店</a></li>
                            <li><a href="default.htm">已经卖出的商品</a></li>
                            <li><a href="default.htm">出售中的商品</a></li>
                            <li><a href="default.htm">卖家服务中心</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="categories.html">联系客服</a>
                    <div>
                        <ul>
                            <li><a href="default.htm">消费者客服</a></li>
                            <li><a href="default.htm">卖家客服</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="?c=lr&a=select" style='color:#EA2F2F'>欢迎!<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
                <li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a></li>
                <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
                </ul>
        </div>
    </div>

		<header class="ms-header ms-header-inner ms-head-position">
			<article class="ms-header-menu">
				<style type="text/css">
					.nav-manage .list-nav-manage {
						position: absolute;
						padding: 15px 4px 10px 15px;
						left: 0;
						top: -15px;
						width: 90px;
						background: #FFF;
						box-shadow: 1px 1px 2px #e3e3e3, -1px 1px 2px #e3e3e3;
						z-index: 10;
					}
					
					.ms-nav li {
						float: left;
						position: relative;
						padding: 0 20px;
						height: 44px;
						font: 14px/26px "Microsoft YaHei";
						color: #FFF;
						cursor: pointer;
						z-index: 10;
					}
					.personal-member .main-wrap {
    width: 1068px;
    margin: 15px 0 30px 180px;
    padding: 0 0 39px 0;
    border: 1px solid #ddd;
    background: none;
}
				</style>
				<div class="header-menu">
					<div class="ms-logo">
						<a class="ms-head-logo" name="Myyigou_index_none_daohangLogo"><span style="font-size: 30px;color: #e33131;font-weight: bold; line-height: 28px;;">B</span><span style="font-size: 30px;color: #e55155;font-weight: bold; line-height: 28px;;">here</span></a>

					</div>
					<nav class="ms-nav">
						<ul>
							<li class=""><a href="" data-url=""  style="    padding-bottom: 17px;border-bottom: 3px #fff solid;">首页</a><i class="nav-arrow"></i></li>
							<li class="nav-manage selected">
								<a href="" data-url="">账户管理<em hidden></em></a><i class="nav-arrow" hidden></i>
								<div class="list-nav-manage " hidden>
									<a  href="myinfo.html"><p class="nav-mge-hover">账户管理<em></em></p></a>
									<p><a  href="myinfo.html">个人资料</a></p>
									<p><a href="安全设置-01.html">安全设置</a></p>
									<p><a href="账号绑定.html">账号绑定</a></p>
									<p><a  href="地址管理.html">地址管理</a></p>

								</div>
							</li>
							<li class="ms-nav-msg"><a>消息</a><i class="nav-arrow"></i></li>
						</ul>
						<div class="ms-search">
							<form>
								<input id="" type="text" value="">
								<img src="./public/img/pi/搜索.png"  style="height: 10px;width: 10px;float: right;margin-right: 10px;" />
							</form>
						</div>
					</nav>
				</div>

			</article>

			<article class="ms-useinfo">
				<div class="header-useinfo" id="">
					<div class="ms-avatar">
						<div class="useinfo-avatar">
							<img src="<?php echo $_smarty_tpl->tpl_vars['personimg']->value;?>
" style="margin-left: 0px ;width:60px;height:60px;">
							<div class="edit-avatar"></div>
							<a class="text-edit-avatar">修改</a>
						</div>
						<a><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
					</div>

					<div class="ms-name-info">
						<div class="link-myinfo">
							<a>我的编号</a>
						</div>
						<div class="info-member">
							<span class="name-member member-1">
        				 <i></i><a target="_blank" >注册会员</a></span>
							<span style="margin-left: 20px;">
        				 <a target="_blank" >我的资料</a></span>
						</div>
						<div class="info-safety">
							<span class="safety-lv lv-3">
        				<a >安全等级：<span>中</span></a>
							</span>
							<a class="bind-phone">
								<i style="background-image: url(./public/img/pi/修改手机.png);"></i>修改手机</a>
							<a class="bind-email">
								<i style="background-image: url(./public/img/pi/绑定邮箱.png);"></i>修改邮箱</a>
							<a class="manage-addr"><i style="background-image: url(./public/img/pi/地址管理.png);"></i>地址管理</a>
						</div>
					</div>
				</div>

			</article>
		</header>
		<div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-side">
					<div class="side-neck" style="margin-top: 20px;">
						<i></i>
					</div>
					<div class="ms-side" style="margin-top: 20px;">
						<article class="side-menu side-menu-off">
							<dl class="side-menu-tree" style="padding-left: 50px;">
								<dt><img src="./public/img/pi/left/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/><a href='?c=pi&a=index'>个人中心</a></dt>
								<dd>
                                    <dt><img src="./public/img/pi/left/我的购物车.png"  style="margin-right: 10px;margin-left: -20px;"/><a href="?c=car&a=show">我的购物车</a></dt>
								<dt><img src="./public/img/pi/left/file.png"  style="margin-right: 10px;margin-left: -20px;"/>订单管理</dt>
								
								<dd>
									<a href="?c=pi&a=unsend">待收货</a>
								</dd>	
													
								<dd>
									<a href="?c=pi&a=order">购买记录</a>

								</dd>
                            
								<dd>
									<a href="?c=pi&a=comment">我的评价</a>

								</dd>

								<dt><img src="./public/img/pi/left/file.png"  style="margin-right: 10px;margin-left: -20px;"/>账户管理</dt>
								<dd>
									<a href="?c=pi&a=myinfo">我的资料</a>

								</dd>
								<dd>
									<a href="?c=pi&a=safe">安全设置</a>

								</dd>
								<dt><img src="./public/img/pi/left/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/>我的Bhere</dt>
									<dd>
									<a href="?c=pi&a=address">收货地址管理</a>
								</dd>
								<dd>
									<a href="?c=pi&a=mymoney">我的钱包</a>

								</dd>
								<dt><img src="./public/img/pi/left/v-card-3.png"  style="margin-right: 10px;margin-left: -20px;"/>售后服务</dt>
								<dd>
									<a href="?c=pi&a=rg">退换货</a>

								</dd>
								<dd>
									<a href="#">意见/投诉</a>

								</dd>
							</dl>

							<a ison="on" class="switch-side-menu icon-up-side"><i></i></a>
						</article>
					</div>
				</div>
				<div class="cont-main">
					<div class="main-wrap mt15" style="border: 0px;">
						<!--<h3>
	                        <strong>我的会员等级</strong>
	                    </h3>-->
						<div class="server-wrapper">
							<div class="server-tab" style="margin-top: 26px;">
								<div style=" float: left;vertical-align: bottom;text-align: center;">
								<div style="width: 680px;padding: 10px;float: left;background-color: #fff;height: 250px;">
								<div style="float: left;width:98% ;height: 152px;border: 1px #ccc solid;box-shadow: 1px 1px 1px #F5F5F5;padding: 5px;">
									<div style="width: 100%;height: 100%;border: 1px #F2873B dashed;">
										<span style="font-size: 14px;color: #686868;font-weight: bold;display: block;display: block;width: 164px;margin-left: 20px;margin-top: 20px;">今天是:<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</span>
                                        <a href="?c=pi&a=index"  style="border-radius: 5px;color: #fff;font-size: 14px;border: 0px;width: 127px;height: 26px;margin-top: 30px;display: inline-block;background: green;line-height: 26px;">刷新数据</a>
									</div>
								</div>
								

								
								<div style="border-top:1px #ccc solid;width: 650px;position: absolute;margin-top: 200px;margin-left: 20px;float: left;"></div>
								<div style="position: absolute;margin-top: 230px;font-size: 14px;color: #686868;float: left;">
									<span class="xxk on">待付款</span>
									<span class="xxk">待收货</span>
									<span class="xxk">购买记录</span>
									<span class="xxk">我的评价</span>
									
								</div>
								</div>	
								
								
								<!--
                                	作者：右侧
                                	时间：2016-05-24
                                	描述：
                                -->
								<div style="float: left;width:250px ;height: 152px;margin-left: 20px;">
								 <p style="font-size: 14px;color: #686868;text-align:center;background-color: #fff;padding: 10px;color: #F88600;font-size: 14px;">菜单管理</p>
								 <div style="background-color: #fff;margin-top: 10px;height: 300px;padding: 10px;">
								 	<p style="font-size: 16px;text-align: left;">我的优惠券</p>
								 	<img src="./public/img/pi/个人中心/组-15.png"/>
								 	<img src="./public/img/pi/个人中心/组-14.png" style="margin-top: 20px;"/>
								 	<p style="margin-top: 30px;font-size: 14px;color: #686868;">全部优惠券(<font color="red">96</font>)</p>
								 </div>
								
								<div style="background-color: #fff;margin-top: 10px;height: 200px;padding: 10px;">
								 	<p style="font-size: 20px;text-align: left;">收藏的商品</p>
								 	<img src="./public/img/pi/个人中心/形状-1.png" style="margin-top: 20px;"/>
								 	<p style="margin-top: 30px;font-size: 14px;color: #686868;">您的收藏空空的，赶紧<br/>
								 	去首页看看购物吧</p>
								 </div>

								<div style="background-color: #fff;margin-top: 10px;height: 300px;padding: 10px;overflow:auto">
								 	<p style="font-size: 16px;text-align: left;">购物车</p>
                                    <?php if ($_smarty_tpl->tpl_vars['shopcar']->value != '') {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopcar']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
								 	<div style="float:left ;">
                                        <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" style="margin-top: 10px;height: 150px;width: 150px;float: left;margin-left:25px;"/></a>
								 	<br />
                                        <span style="display: block;float: left;margin-left: 70px;color: #f78642;font-size: 16px;margin-top: 5px;font-family: initial;">¥<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</span>
                                        <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><p style=" width: 200px;font-size: 12px;color: #686868;height: 64px;float: left;text-align: center;margin-left: 8px;font-family: initial;font-weight: bold;color: yellowgreen;}"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</p></a>
								 	</div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    <?php } else { ?>
                                    <a href="?c=index&a=index">返回首页去购物</a>
                                    <?php }?>
								   <p style="margin-top: 30px;font-size: 14px;color: #686868;"><a
                                           href="?c=car&a=select"></a></p>
								   
								</div>
								
								
								<div style="background-color: #fff;margin-top: 10px;height: 200px;padding: 10px;">
								 	<p style="font-size: 16px;text-align: left;">我的足迹</p>
								 	<img src="./public/img/pi/个人中心/矢量智能对象.png" style="margin-top: 20px;"/>
								 	<p style="margin-top: 30px;font-size: 14px;color: #686868;">您还没有留下任何足迹呢！</p>
								 </div>
								
								
								</div>
								
								<!--右侧---end------->

                                    <!--我的代付款遍历-->
                                    <div style="width: 680px;padding:10px;display:inline-block; float: left;margin-top: 20px;background-color: #fff;overflow: auto;height: 423px;" id="0">
                                        <div style="border-bottom: 1px #ccc solid;">
                                            <p style="font-size: 20px;text-align: left;">待付款</p>

                                        </div>


                                        <?php if ($_smarty_tpl->tpl_vars['nopay']->value != '') {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nopay']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                        <div style="padding: 20px 20px;border-bottom: 1px #F5F5F5 solid;height: 150px;">
                                            <table style="text-align: center">
                                                <tr>
                                                    <td colspan="4"> <span style="display: block;float: right;font-family: -webkit-pictograph;font-size: 14px;;">订单号：<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="  width:130px;">
                                                        <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" /></a>
                                                    </td>
                                                    <td style="width:250px;">
                                                        <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><p style="font-size:12px;color: olivedrab;font-family: fantasy;"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</p></a>
                                                        <p><span style="    font-size: 14px;font-family: initial;color: slateblue;">下单时间：</span>&nbsp;&nbsp;<i style="font-style: italic;font-family: cursive;"><?php echo $_smarty_tpl->tpl_vars['value']->value['addtime'];?>
</i></p>
                                                    </td>
                                                    <td style="width: 158px;">
                                                        <span style="color: tomato;font-family: fantasy;">¥<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</span><span style="    font-size: 15px;color: peru;font-family: sans-serif;margin-left: 13px;">X <?php echo $_smarty_tpl->tpl_vars['value']->value['amount'];?>
</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)" onclick="topay(<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
,$(this))" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;background: #008a80;    font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;" >去支付</a>
                                                        <a href="javascript:void(0)" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;background: #cccccc;    font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;display:none;" >已支付</a>
                                                        <a href="javascript:void(0)" onclick="delorder(<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
,$(this))" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;margin-top: 30px;background: tomato;font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;">删除订单</a>
                                                        <a href="javascript:void(0)"  style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;margin-top: 30px;background: #333333;font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;display: none;">已删除</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php } else { ?>
                                        <p>你暂时还没有相应的订单信息</p>
                                        <?php }?>
                                    </div>

                                    <!--我的物流遍历-->
								<div style="width: 680px;padding:10px;display:none; float: left;margin-top: 20px;background-color: #fff;overflow: auto;height: 423px;" id="1">
									<div style="border-bottom: 1px #ccc solid;">
										<p style="font-size: 20px;text-align: left;">我的物流</p>
									</div>

                                    <?php if ($_smarty_tpl->tpl_vars['arr']->value != '') {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
									<div style="padding: 20px 20px;border-bottom: 1px #F5F5F5 solid;height: 150px;">
										 <table style="text-align: center">
                                             <tr>
                                                 <td colspan="4"> <span style="display: block;float: right;font-family: -webkit-pictograph;font-size: 14px;;">订单号：<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
</span></td>
                                             </tr>
                                             <tr>
                                                 <td style="  width:130px;">
                                               <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" /></a>
                                             </td>
                                                 <td style="width:250px;">
                                                     <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><p style="font-size:12px;color: olivedrab;font-family: fantasy;"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</p></a>
											<p><span style="    font-size: 14px;font-family: initial;color: slateblue;">下单时间：</span>&nbsp;&nbsp;<i style="font-style: italic;font-family: cursive;"><?php echo $_smarty_tpl->tpl_vars['value']->value['addtime'];?>
</i></p>
                                                 </td>
                                                 <td style="width: 158px;">
                                                     <span style="color: tomato;font-family: fantasy;">¥<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</span><span style="    font-size: 15px;color: peru;font-family: sans-serif;margin-left: 13px;">X <?php echo $_smarty_tpl->tpl_vars['value']->value['amount'];?>

                                                     	<br/><i style='font-size:12px;'>订单派送中..</i></span>
                                                 </td>
									      <td>
                                              <a href="javascript:void(0)" onclick="order(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,$(this))" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;background: #008a80;    font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;" >确认收货</a>
                                              <a href="javascript:void(0)" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;background: #cccccc;    font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;display:none;" >已收货</a>
                                              <a href="?c=pi&a=logistics&order=<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
" style="    width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;margin-top: 30px;background: tomato;font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;">查看物流</a>
                                          </td>
                                             </tr>
                                         </table>
									</div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                     <?php } else { ?>
                                      <p>你暂时还没有相应的物流信息</p>

                                    <?php }?>
									</div>



                                    <!--购买记录遍历-->
                                    <div style="width: 680px;padding:10px;display:none; float: left;margin-top: 20px;background-color: #fff;overflow: auto;height: 423px;" id="2">
                                        <div style="border-bottom: 1px #ccc solid;">
                                            <p style="font-size: 20px;text-align: left;">购买记录</p>

                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['recordx']->value != '') {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recordx']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                        <div style="padding: 20px 20px;border-bottom: 1px #F5F5F5 solid;height: 150px;">
                                            <table style="text-align: center">
                                                <tr>
                                                    <td colspan="4"> <span style="display: block;float: right;font-family: -webkit-pictograph;font-size: 14px;;">订单号：<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="  width:130px;">
                                                    <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" /></a>
                                                    </td>
                                                    <td style="width:250px;">
                                                        <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><p style="font-size:12px;color: olivedrab;font-family: fantasy;"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</p></a>
                                                        <p><span style="    font-size: 14px;font-family: initial;color: slateblue;">下单时间：</span>&nbsp;&nbsp;<i style="font-style: italic;font-family: cursive;"><?php echo $_smarty_tpl->tpl_vars['value']->value['addtime'];?>
</i></p>
                                                    </td>
                                                    <td style="width: 158px;">
                                                        <span style="color: tomato;font-family: fantasy;">¥<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</span><span style="    font-size: 15px;color: peru;font-family: sans-serif;margin-left: 13px;">X <?php echo $_smarty_tpl->tpl_vars['value']->value['amount'];?>
</span>
                                                    </td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['value']->value['comment_status'] == 0) {?>
                                                        <a href="javascript:void(0)" onclick="showcomment($(this))" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;background: #008a80;    font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;" >评价商品</a>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['comment_status'] == 1) {?>
                                                        <a href="javascript:void(0)"  style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;background: #cccccc;    font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;" >已评价</a>
                                                        <?php }?>
                                                        <div id="showcomment">
                                                            <img src="./public/img/logo/close.png" alt="" style=" float: right;margin: 21px;width: 25px;" class="close"/>
                                                            <table border="1" style="    margin-left: 90px;margin-top: 75px;width: 550px;height: 369px;text-align: center;">
                                                                <tr>
                                                                    <td colspan="2">订单号:<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                               <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" style="margin-left:0px;"/></a>
                                                                    </td>
                                                                    <td><a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><p style="font-size:12px;color: olivedrab;font-family: fantasy;"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</p></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                    <p style="float: left;margin-left: 15px;font-family: -webkit-pictograph;font-size: 14px;font-weight: bold;color: steelblue; margin-top: 50px;">详细评价</p>
                                                                    <textarea name="" cols="30" rows="5" style="width: 378px;border-radius: 10px;margin-left: 60px;">
                                                                    </textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                      <div style="width: 300px;height: 69px;"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <a href="javascript:void(0)" onclick="tocomment($(this),<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
)" style="width: 100px;height: 25px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;background: #008a80;font-size: 12px;text-align: center;line-height: 25px;font-family: -webkit-body; margin-right: 225px;" >点击评价</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <a href="javascript:void(0)" onclick="delrecord(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,$(this))"style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;margin-top: 30px;background: tomato;font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;">删除</a>
                                                        <a href="javascript:void(0)" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;margin-top: 30px;background:#cccccc;font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;display:none;">已删除</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <div id="star" style="position: absolute;left: 282px;top: 500px;display: none;">
                                            <span  style="font-weight:bold">为商品评分吧！</span>
                                            <ul>
                                                <li class="on"><a href="javascript:;">1</a></li>

                                                <li class="on"><a href="javascript:;">2</a></li>

                                                <li class="on"><a href="javascript:;">3</a></li>

                                                <li class="on"><a href="javascript:;">4</a></li>

                                                <li class=""><a href="javascript:;">5</a></li>
                                            </ul>
                                            <span><strong>4 分</strong> (质量不错，与卖家描述的基本一致，还是挺满意的)</span>
                                            <p style="display: none; left: 84px;"><em><b>4</b> 分 满意</em>质量不错，与卖家描述的基本一致，还是挺满意的</p>
                                        </div>
                                        <?php } else { ?>
                                        <p>你暂时还没有相应的物流信息</p>

                                        <?php }?>
                                    </div>

                                    <!--我的评价遍历-->
                                    <div style="width: 680px;padding:10px;display:none; float: left;margin-top: 20px;background-color: #fff;overflow: auto;height: 423px;" id="3">
                                        <div style="border-bottom: 1px #ccc solid;">
                                            <p style="font-size: 20px;text-align: left;">我的评价</p>

                                        </div>


                                        <?php if ($_smarty_tpl->tpl_vars['comment']->value != '') {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                        <div style="padding: 20px 20px;border-bottom: 1px #F5F5F5 solid;height: 150px;">
                                            <table style="text-align: center">
                                                <tr>
                                                    <td colspan="3"> <span style="display: block;float: left;font-family: -webkit-pictograph;font-size: 14px;;">评价时间：<?php echo smarty_modifier_time($_smarty_tpl->tpl_vars['value']->value['addtime']);?>
</span></td>
                                                    <td><span>操作</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="  width:130px;">
                                                        <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" /></a>
                                                    </td>
                                                    <td style="width:250px;">
                                                        <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><p style="font-size:12px;color: olivedrab;font-family: fantasy;"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</p></a>
                                                    </td>
                                                    <td style="width: 370px;">
                                                        <span style="color: tomato;font-family: fantasy;font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)" onclick="delcomment(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,$(this))" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;background:tomato;    font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;" >删除评论</a>
                                                        <a href="javascript:void(0)" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 10px;color: #eeeeee;background: #cccccc;    font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;display:none;" >已删除</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php } else { ?>
                                        <p>你暂时还没有相应的物流信息</p>

                                        <?php }?>
                                    </div>




									<p style="text-align: center;margin-top: 30px;">展开全部信息</p>
									 <!--<div style="float:left;display: inline;border: 1px #ccc solid;display: inline-block;background-color: #f5f5f5;height: 25px;width: 150px;"> 
                                        <input type="text" placeholder="搜索会员编号"  style="padding-left:5px;width:130px;border: 0px;background-color: #fff;line-height: 25px;border-right: 0px #ccc solid;" />
									    <img src="./public/img/pi/搜索.png"  style="height: 10px;width: 10px;  margin-left: 2px; margin-bottom: 5px;" />
                                        </div> -->
								</div>
								
								<div style="width: 680px;padding:10px;display: inline-block; margin-top: 20px;background-color: #fff;float: left;border-bottom: 1px #ccc solid;padding-bottom: 20px;">
									<span style="text-align: left;line-height: 20px;">根据浏览 猜你喜欢</span>
								</div>
                                <!--猜你喜欢遍历-->
								<div style="width: 680px;padding:10px;display: inline-block; margin-top:0px;background-color: #fff;float: left;">
									<div style="padding:10px ;text-align: center;float: left;">
                                        <?php if ($_smarty_tpl->tpl_vars['mylike']->value != '') {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mylike']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
										<div style="float: left;margin-left: 30px">
                                            <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" /></a>
                                            <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><p style="width: 180px;"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</p></a>
											<span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</span>
										</div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php } else { ?>
                                        <p><a href="?c=index&a=index">快去购买你喜欢的商品吧！</a></p>
                                        <?php }?>
									</div>
									
								</div>
								
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
		</div>
		<div class="clear "></div>
		<div class="ng-footer ">

			<textarea class="footer-dom " id="footer-dom-02 ">
			</textarea>
			<div class="ng-fix-bar "></div>
		</div>
		<style type="text/css ">
		
			.ng-footer {
				height: 130px;
				margin-top: 0;
			}
		
			
			.ng-s-footer {
				height: 130px;
				background: none;
				text-align: center;
			}
			
			.ng-s-footer p.ng-url-list {
				height: 25px;
				line-height: 25px;
			}
			
			.ng-s-footer p.ng-url-list a {
				color: #666666;
			}
			
			.ng-s-footer p.ng-url-list a:hover {
				color: #f60;
			}
			
			.ng-s-footer .ng-authentication {
				float: none;
				margin: 0 auto;
				height: 25px;
				width: 990px;
				margin-top: 5px;
			}
			
			.ng-s-footer p.ng-copyright {
				float: none;
				width: 100%;
			}
			
			.root1200 .ng-s-footer p.ng-copyright {
				width: 100%;
			}
		</style>
		<?php echo '<script'; ?>
 type="text/javascript " src="./public/js/pi/safe/ms_common.min.js "><?php echo '</script'; ?>
>
	</body>
    <?php echo '<script'; ?>
 type="text/javascript">
          //确认支付
        function topay(ordernum,node){
            var ordernum=ordernum;//订单号ID
            var total = $('input[name=total]').val();
            location.href='?c=pay&a=finish&num='+ordernum;
        }
        //删除未支付的订单
        function delorder(data,node){
            if(confirm('确认删除吗？')){
                $.getJSON("?c=pi&a=delorder",{ordernum:data},function(msg){
                    if(msg==1){
                        node.hide(100)
                        node.next().show(200)
                    }else{
                        alert('删除失败')
                    }

                })
            }
        }
        //确认收货
        function order(id,node){
            var orderid=id;//订单ID
                if(confirm('确认收货吗？')){
                    $.getJSON("?c=pi&a=confirmorder",{id:orderid},function(msg){;
                       if(msg==1){
                            node.hide(100)
                            node.next().show(200)
                        }else{
                            alert('确认失败')
                        }
                    })
                }

        }
        //订单选项卡
        $(".xxk").click(function(){
           var index = $(this).index();
            for(var i = 0;i<5;i++){
                if(index==i){
                    $("#"+i).show()
                    $(".xxk").eq(i).addClass("on")
                }else{
                    $("#"+i).hide()
                    $(".xxk").eq(i).removeClass("on")
                }
            }
        })
        //展现评价弹窗
       function showcomment(node){
           node.next().fadeIn(300)
           $("#star").fadeIn(300)
       }
       //关闭评价弹窗
       $(".close").click(function(){
          $(this).parent().fadeOut(300)
           $("#star").fadeOut(300)
       })
       //评价商品
        function tocomment(node,orderid,goodsid){
           var goodsid=goodsid //商品ID
           var orderid=orderid//订单ID
           var content= node.parent().parent().prev().prev().children().children().last().val();//评价内容
           var rank=$("#star").children().last().prev().children().html().substr(0,1)//星星评价
            var status = node.parent().parent().parent().parent().parent().prev()//状态
            $.getJSON("?c=pi&a=tocomment",{id:goodsid,orderid:orderid,content:content,rank:rank},function(msg){
                if(msg==1){
                    status.text('已评价').css({backgroundColor:'#cccccc'})
             node.parent().parent().parent().parent().parent().fadeOut(500);
                    $("#star").fadeOut(500)
                }else{
                    alert('评价失败')
             node.parent().parent().parent().parent().parent().fadeOut(500);
                    $("#star").fadeOut(500)
                }
            })
        }
      //删除购买记录
         function delrecord(data,node){
             if(confirm('确认删除吗？')){
                 $.getJSON("?c=pi&a=delrecord",{id:data},function(msg){
                     if(msg==1){
                         node.hide(300)
                         node.next().show(300)
                     }else{
                         node.text('删除失败')
                     }

                 })
             }
         }
        //删除评论
        function delcomment(data,node){
            if(confirm('确认删除吗？')){
                $.getJSON("?c=pi&a=delc",{id:data},function(msg){
                    if(msg==1){
                        node.hide(300)
                        node.next().show(300)
                    }else{
                        node.text('删除失败')
                    }

                })
            }
        }
    <?php echo '</script'; ?>
>
</html><?php }
}
