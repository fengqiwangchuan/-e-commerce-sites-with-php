<?php
/* Smarty version 3.1.30, created on 2017-03-31 00:03:58
  from "/usr/lamp/apache2/htdocs/template/pi/change-mb2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd2c6ec55a74_65145964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6325273e502c23da3a5ca286183941d518bf08a' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pi/change-mb2.html',
      1 => 1490889836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dd2c6ec55a74_65145964 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link rel="stylesheet" href="./public/css/pi/amazeui.min.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/amazeui.min.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="./public/css/pi/zpwd/sjsz.css" />
		<link rel="stylesheet" href="./public/css/pi/sui.css" />
		<link rel="stylesheet" href="./public/css/pi/css.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/sui.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="./public/css/pi/jd.css" />
		<title>Bhere shop 个人中心</title>
		<style>
			/*.bottomLine {
				border-bottom: 1px solid #ccc;
				border-top: 1px solid #ccc;
				margin-bottom: 10px;
				/*padding: 10px;*/
			/*padding-top: 10px;
				padding-bottom: 10px;
				word-spacing: 0.05rem;
				text-align: center;
				margin-top: 82px;*/
			/*width:677px ;*/
			/*line-height: ;*/
			/*}*/
			
			.bottomLine {
				border-bottom: 1px solid #ccc;
				border-top: 1px solid #ccc;
				padding-top: 8px;
				/*padding-bottom:10px;*/
			}
			
			.bot {
				margin-bottom: 50px;
				/*text-align: center;*/
				color: #7b6f5b;
			}
			
			.radio-pretty.checked > span:before {
				color: #f88600;
			}
			
			input {
				height: 62px;
			}
			
			.imgbot {
				width: 128px;
				height: 128px;
			}
			.am-form-field {
    display: inline;
    width: 100%;
    width: 90%;
    padding: .5em;
    font-size: 1.6rem;
    line-height: 1.2;
    color: #555;
    vertical-align: middle;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 0;
    -webkit-appearance: none;
    -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
}
 
		</style>
	</head>

	<body>
		<!--<div class="am-g" style="margin-top: 25px;">
			
		</div>-->
			<div class="ng-toolbar">
		<!--顶部导航的位置-->
				
        <div id="menu">
            <ul>
                <li><a href="?c=index&a=index">WELCOME BHERESHOP</a>
                    <div>
                        <ul>
                            <li><a href="?c=lr&a=select">新用户注册</a></li>
                            <li><a href="default.htm">一键登录Bhere</a></li>
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
                            <li><a href="default.htm">体验培训中心</a></li>
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
                <li><a href="#" style='color:#EA2F2F'>欢迎!<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a></li>
                <li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a></li>
                <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
                </ul>
        </div>
    </div>

				</div>
		</div>
		<div style="background-color: #ffffff;padding-top: 30px;margin-top: 21px;">
			<div class="am-g content" style="margin-top: 45px;">
				<div data-am-widget="tabs" class="am-tabs am-tabs-d2">
					<ul class="am-tabs-nav1" style="margin-top: 20px;display:flex;list-style: none;text-align: center;">
						<li style="max-width: 95px; margin-left: 100px;"></li>
						<li style="max-width: 80px;"><span class="am-badge1 am-round am-badge-warning-active " style="background-color: #F89406;font-size: 18px;">1</span>
							<br />
							<p class="bottitle active">验证身份</p>
						</li>
						<li style="max-width: 273px;">
							<hr style="width: 273px;    border-top: 3px #F89406 solid;">
						</li>
						<li style="max-width: 80px;margin-left: 10px;"><span class="am-badge1  am-round am-badge-warning-active" style="background-color: #F89406;font-size: 18px">2</span>
							<br />
							<p class="bottitle active">修改手机</p>
						</li>
						<li style="max-width: 273px;">
							<hr style="height: 3px;">
						</li>
						<li style="max-width: 80px;margin-left: 10px;"><span class="am-badge1  am-round" style="background-image: url(./public/img/pi/duihao.png);background-repeat: no-repeat;background-position: center;background-position-x: 5px;"></span>
							<br />
							<p style="margin-left: -10px" class="bottitle">完成</p>
						</li>
					</ul>
					<!--输入账户名-->
					<div class="am-tabs-bd" style="margin-left: 200px;">
						<div data-tab-panel-0 class="am-tab-panel am-active" style="margin-top: 20px;">
							<div class="am-g">
								<img src="./public/img/pi/jinggao.png" />
								<span style="font-weight:bold;margin-left: 10px;font-size: 14px;color: #3d3d3d">我们不会泄露您的手机信息</span>
							</div>
							<div class="am-g" style="margin-top: 20px;margin-left: 55px;" >
								<span >手机号码:</span><input class="am-form-field" type="text" style="width: 285px;height: 45px;margin-left: 22px;" name="mobile"/>
							</div>
							<div class="am-g" style="margin-top: 20px;margin-left:50px;">
								<input type="button" style="width: 114px;height: 47px;margin-left: 80px; background-color:orange;color: #fff;border: 0px;border-radius: 5px;" onclick="sendyzm($(this))" value="免费获取验证码" />
								<span style="display:none"></span>
							</div>
							
							<div class="am-g" style="margin-top: 20px;margin-left: 65px;">
								<span >验证码:</span>
								<input class="am-form-field" type="text" style="width: 285px;height: 45px;margin-left: 22px;padding-left: 10px;font-size:12px" placeholder="请入验证码" name="checkphone" />
								<span id="tips" style="display:none"></span>
							</div>
							<div class="am-g" style="margin-top: 30px;margin-left: 135px;">
								<a href='javascript:void(0)' class="am-btn am-btn-warning" style="width: 265px;height: 50px;font-size: 16px;border: 1px rgba(187, 187, 187, 0.5)B solid;margin: 0 auto;border-radius: 5px;line-height: 33px;" id='go'>确定</a>
							</div>
							<div class="am-g" style="padding-top:40px;padding-left:50px;border: 1px rgba(241,161,69, 0.18) solid;   margin-left:0px;margin-top:50px;height: 169px;width: 718px;background-color: #FEFBEE;">
							
							<span style="font-size: 14px;font-weight: bold;">没收到短信验证码</span>	
							<p style="font-size: 12px;margin-top: 10px;">1.网络通信异常可能会造成短信丢失,请重新获取或稍后重试</p>
							<p style="font-size: 12px;margin-top: -16px;">2.请核实手机是否已欠费停机,或者屏蔽了系统短信</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="am-g " style="margin-top: 81px;text-align: center;font-size: 12px;">
			<div class="bottomLine" style="margin:0 auto;width:700px;height: 35px;">
				<span style="float: left;word-spacing:0.52rem;    text-align: center;    width: 100%;">关于我们 | 联系我们 | 商家入驻 | 友情链接 | 站点地图 | 手机商城 | 销售联盟 | 商城社区 | 企业文化 | 帮助中心 
			</span>
			</div>
		</div>
		<div class="am-g">
            <div class="bot ">
                <div style="margin:0 auto;width:700px;height: 30px;">
                    <p style="font-size: 12px;float: left;margin-left: 210px;"><span style="margin-left: 30px;">Bhere shop</span><span style="margin-left: 30px;">bhereshop@163.com</span> </p>
                </div>
            </div>
		</div>
		</div>
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function(){
                $('button[name=yes]').click(function(){

                    location.href = '?c=pi&a=cmb3';

                })

            })
           //发送手机到后台
            function sendyzm(node){
               var mobile =  $("input[name='mobile']").val()
                var reg =/^1[34578]\d{9}$/
                  if(reg.test(mobile)){
                      $.post("?c=pi&a=sendto",{mobile:mobile},function(msg){
                          node.hide(100)
                     node.next().show(100)
                      var n = 60;
                      var tag = setInterval(function(){
                        if(n<1){
                           clearInterval(tag);
                           node.show(300)
                            node.next().hide(300);
                        }else{
                           n--
                           node.next().text(n+"秒之后可重新发送");
                        }
                      },1000)
                   
                      },"xml")
                  }else{
                      alert('请输入正确的手机号！')
                  }
            }
			$("input[name='checkphone']").blur(function(){
				$.getJSON("?c=pi&a=checkphone",{data:$(this).val()},function(msg){
					 if(msg==1){
						 $("#tips").text("输入正确").css({color:'#008800'}).show(200,function(){
							 $(this).delay(2000).hide(100)
						 })
					 }else{
						 $("#tips").show(200).text("输入错误").css({color:'#ff0000'})
					 }

				})
			})
			$("#go").click(function(){
				if($("#tips").text()=="输入正确"){
					 var mobile = $("input[name='mobile']").val()
					 $.getJSON("?c=pi&a=updatemobile",{mobile:mobile},function(msg){
					 	     if(msg==1){
					 	     	location.href="?c=pi&a=cmb3"
					 	    }else{
					 	    	alert('跳转失败')
					 	    }
					})
					 
				}
				})
     <?php echo '</script'; ?>
>
	</body>
</html><?php }
}
