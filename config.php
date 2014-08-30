<?php
session_start();
/**
 * config.php
 * 程序的配置文件
 * @author yangzie1192@163.com
 * 用于存放一些常量
 * 统一使用session存放
 */
//自定义token值
$_SESSION['token']="weixin";

//是否开启错误调试，默认开启
$_SESSION['debug']=TRUE;

//是否开启自定义菜单，默认关闭
$_SESSION['ismenu']=TRUE;


/*
 * 自定义菜单结构
 * ------------特别说明----------------
 * 目前自定义菜单最多包括3个一级菜单
 * 每个一级菜单最多包含5个二级菜单
 * 一级菜单最多4个汉字，二级菜单最多7个汉字
 * 多出来的部分将会以“...”代替
 * 请注意，创建自定义菜单后
 * 由于微信客户端缓存 需要24小时微信客户端才会展现出来
 * 建议测试时可以尝试取消关注公众账号后再次关注
 * 则可以看到创建后的效果
 * 请按照以下格式修改菜单内容 
 * ----------------------------------
 */
$_SESSION['menu']= array (
			'button' => array (
					array (
							'name' => urlencode ( "金叶金叶" ),
							'sub_button' => array (
									array (
											'name' => urlencode ( "我的站点" ),
											'type' => 'view',
											'url' => 'http://www.yangguoqi.com' 
									),
									array (
											'name' => urlencode ( "邮件发送" ),
											'type' => 'click',
											'key' => 'CLICK_EMAIL' 
									) 
							) 
					),
					array (
							'name' => urlencode ( "金叶好吗" ),
							'sub_button' => array (
									array (
											'name' => urlencode ( "百度一下" ),
											'type' => 'view',
											'url' => 'http://www.baidu.com' 
									),
									array (
											'name' => urlencode ( "点击事件" ),
											'type' => 'click',
											'key' => 'CLICK_TWO' 
									) 
							) 
					),
					array (
							'name' => urlencode ( "金叶你好" ),
							'sub_button' => array (
									array (
											'name' => urlencode ( "点击到底" ),
											'type' => 'click',
											'key' => 'CLICK_MESSAGE' 
									),
									array (
											'name' => urlencode ( "点击事件" ),
											'type' => 'click',
											'key' => 'CLICK_THREE' 
									) 
							) 
					) 
			) 
	);
/*
 * ----------------------------------------------------------------------------------------
 */

//自定义图文消息
$_SESSION['arr']=array(
		array(
				"title"=>"获得位置",
				"description"=>"我是标题一",
				"picurl"=>"http://wechat1192.qiniudn.com/1.jpg",
				"url"=>"http://1.buschat.sinaapp.com/index.php/jumplink/getUserPosition"
			
		),
		array(
				"title"=>"百度以下",
				"description"=>"我是标题二",
				"picurl"=>"http://wechat1192.qiniudn.com/2.jpg",
				"url"=>"http://www.baidu.com"
		
		),
		array(
				"title"=>"给我留言",
				"description"=>"我是标题三",
				"picurl"=>"http://wechat1192.qiniudn.com/3.jpg",
				"url"=>"http://sexapp.sinaapp.com/index.php/jumplink/gotoleavemessage"
		)
);
//可以定义多组图文消息，发送的时候加载不同的结构就可以了
$_SESSION['arr1']=array(
		array(
				"title"=>"标题一",
				"description"=>"我是标题一",
				"picurl"=>"http://wechat1192.qiniudn.com/1.jpg",
				"url"=>"http://www.baidu.com"
		
		),
		array(
				"title"=>"标题二",
				"description"=>"我是标题二",
				"picurl"=>"http://wechat1192.qiniudn.com/2.jpg",
				"url"=>"http://www.qq.com"

		),
		array(
				"title"=>"标题三",
				"description"=>"我是标题三",
				"picurl"=>"http://wechat1192.qiniudn.com/3.jpg",
				"url"=>"http://www.yangguoqi.com"
		)
);






?>