<?php
/* Smarty version 3.1.30, created on 2017-03-31 02:59:49
  from "/usr/lamp/apache2/htdocs/template/pi/nolog.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd55a5bbda70_36617129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb2d65a797cac28452f93f2eb5b093f270eea2c7' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pi/nolog.html',
      1 => 1490775002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dd55a5bbda70_36617129 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bhere shop 个人中心</title>
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/safe/aywmq_qt.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/safe/da_opt.js" ><?php echo '</script'; ?>
>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="./public/css/pi/safe/css.css" />
		<link rel="stylesheet" href="./public/css/pi/css.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/common.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/ms-style.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/personal_member.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/Snaddress.min.css" />
		<style>
			progress {
    width: 300px;
    border: 1px solid #ffffff;  
    background-color:#e6e6e6;
    color: #0064B4; /*IE10*/
}
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
progress::-moz-progress-bar { background: #FFFFFF; }
progress::-webkit-progress-bar { background: #ccc; }
progress::-webkit-progress-value  { background: #FF7700; }
	</style>
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
                            <li><a href="default.htm">一键登录Bhere</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="?c=pi&a=select">个人中心</a>
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
                <li><a href="?c=lr&a=select" style='color:#EA2F2F'>欢迎!<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a></li>
                <li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a></li>
                <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
                </ul>
        </div>
    </div>

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
				</style>
				<div class="header-menu">
					<div class="ms-logo">
						<a class="ms-head-logo" name="Myyigou_index_none_daohangLogo"><span style="font-size: 30px;color: #e33131;font-weight: bold; line-height: 28px;;">B</span><span style="font-size: 30px;color: #e55155;font-weight: bold; line-height: 28px;;">here</span></a>

					</div>
					<nav class="ms-nav">
							
						<div class="ms-search">
							<form >
								<input id="" type="text" value="">
									<a id="" href=""></a>
							</form>
						</div>
					</nav>
				</div>

			</article>

			<article class="ms-useinfo">
				<div class="header-useinfo" id="">
					<div class="ms-avatar">
						<div class="useinfo-avatar">
							<img src="./public/img/pi/头像.png">
							<div class="edit-avatar"></div>
							<a class="text-edit-avatar" >修改</a>
						</div>
						<a >sunshine</a>
					</div>

					<div class="ms-name-info">
						<div class="link-myinfo">
							<a ></a>
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
							<a class="bind-phone" >
								<i style="background-image: url(./public/img/pi/修改手机.png);"></i>修改手机</a>
							<a class="bind-email" >
								<i style="background-image: url(./public/img/pi/绑定邮箱.png);"></i>修改邮箱</a>
							<a  class="manage-addr" ><i style="background-image: url(./public/img/pi/地址管理.png);"></i>地址管理</a>
						</div>
					</div>
				</div>

			</article>
		</header>
		<div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-side">
					<div class="side-neck">
						<i></i>
					</div>
					<div class="ms-side">
						<article class="side-menu side-menu-off">
                            <dl class="side-menu-tree" style="padding-left: 50px;">
                                <dt><img src="./public/img/pi/left/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/><a href='?c=pi&a=index'>个人中心</a></dt>
                                <dd>
                                <dt><img src="./public/img/pi/left/我的购物车.png"  style="margin-right: 10px;margin-left: -20px;"/>我的购物车</dt>
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
                                <dd>
                                    <a href="?c=pi&a=bindacc">帐号绑定</a>

                                </dd>
                                <dd>
                                    <a href="?c=pi&a=address">地址管理</a>

                                </dd>
                                <dt><img src="./public/img/pi/left/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/>我的Bhere</dt>
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
					<div class="main-wrap mt15">
						<h3>
	                        <strong>物流跟踪查询</strong>
	                    </h3>
						<div class="form-list tab-switch personal-wrap-show">

								<div class="control-group clearfix"style="margin-top: 30px;" >
                                    <h3>暂时没有物流信息，商品正在准备中...</h3>

								</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="ng-footer">

			<textarea class="footer-dom" id="footer-dom-02">
			</textarea>
			<div class="ng-fix-bar"></div>
		</div>
		<style type="text/css">
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
 type="text/javascript" src="./public/js/pi/safe/ms_common.min.js" ><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
