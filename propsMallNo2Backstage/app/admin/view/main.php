<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>道聚城 - 后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="./assets/lib/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="icon" href="./assets/images/icon-1.png"/>
    <link rel="stylesheet" href="./assets/lib/css/font-awesome.min.css"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="./assets/lib/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    <link rel="stylesheet" href="./assets/lib/css/ace.min.css"/>
    <link rel="stylesheet" href="./assets/lib/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="./assets/lib/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="./assets/css/style.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="./assets/lib/css/ace-ie.min.css"/>
    <![endif]-->
    <script src="./assets/lib/js/ace-extra.min.js"></script>
    <!--[if lt IE 9]>
    <script src="./assets/lib/js/html5shiv.js"></script>
    <script src="./assets/lib/js/respond.min.js"></script>
    <![endif]-->
    <!--[if !IE]> -->
    <script src="./assets/js/jquery-1.9.1.min.js"></script>
    <!-- <![endif]-->
    <!--[if IE]>
    <script type="text/javascript">window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>" + "<" + "script>");</script>
    <![endif]-->
    <script type="text/javascript">
        if ("ontouchend" in document) document.write("<script src='./assets/lib/js/jquery.mobile.custom.min.js'>" + "<" + "script>");
    </script>
    <script src="./assets/lib/js/bootstrap.min.js"></script>
    <script src="./assets/lib/js/typeahead-bs2.min.js"></script>
    <!--[if lte IE 8]>
    <script src="./assets/lib/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="./assets/lib/js/ace-elements.min.js"></script>
    <script src="./assets/lib/js/ace.min.js"></script>
    <script src="./assets/lib/layer/layer.js" type="text/javascript"></script>
    <script src="./assets/lib/laydate/laydate.js" type="text/javascript"></script>
    <script src="./assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="./assets/js/index.js" type="text/javascript"></script>

</head>
<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <span class="logo"></span>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->
        <div class="navbar-header operating pull-left">

        </div>
        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <span class="time"><em id="time"></em></span><span class="user-info"><small>欢迎光临,</small>超级管理员</span>
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li><a href="javascript:void(0)" name="Systems.html" title="系统设置" class="iframeurl"><i
                                        class="icon-cog"></i>网站设置</a></li>
                        <li><a href="javascript:void(0)" name="admin_info.html" title="个人信息" class="iframeurl"><i
                                        class="icon-user"></i>个人资料</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)" id="Exit_system"><i class="icon-off"></i>退出</a></li>
                    </ul>
                </li>
                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-bell-alt"></i><span
                                class="badge badge-important">8</span></a>
                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header"><i class="icon-warning-sign"></i>8条通知</li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comments-alt"></i>
												最新消息
											</span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i>
                                切换为编辑登录..
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												用户消息
											</span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                查看所有通知
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>
    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>
        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {
                }
            </script>
            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <a class="btn btn-success">
                        <i class="icon-signal"></i>
                    </a>

                    <a class="btn btn-info">
                        <i class="icon-pencil"></i>
                    </a>

                    <a class="btn btn-warning">
                        <i class="icon-group"></i>
                    </a>

                    <a class="btn btn-danger">
                        <i class="icon-cogs"></i>
                    </a>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->
            <div id="menu_style" class="menu_style">
                <ul class="nav nav-list" id="nav_list">
                    <li class="home"><a href="./index.php?page=home"  class="iframeurl" title=""><i
                                    class="icon-home"></i><span class="menu-text"> 系统首页 </span></a></li>
                    <li><a href="#" class="dropdown-toggle"><i class="icon-desktop"></i><span
                                    class="menu-text"> 商品管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
<!--                            <li class="home"><a href="./index.php?page=productsList"  title="商品类表"-->
                            <li class="home"><a href="./index.php?page=goodsList"  title="商品列表"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>商品列表</a></li>
                            <li class="home"><a href="javascript:void(0)" name="Brand_Manage.html" title="品牌管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>品牌管理</a></li>
                            <li class="home"><a href="javascript:void(0)" name="Category_Manage.html" title="分类管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>分类管理</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle"><i class="icon-picture "></i><span
                                    class="menu-text"> 图片管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="advertising.html" title="广告管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>广告管理</a></li>
                            <li class="home"><a href="javascript:void(0)" name="Sort_ads.html" title="分类管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>分类管理</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle"><i class="icon-list"></i><span
                                    class="menu-text"> 交易管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="transaction.html" title="交易信息"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>交易信息</a></li>
                            <li class="home"><a href="javascript:void(0)" name="Order_Chart.html" title="交易订单（图）"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>交易订单(图)</a>
                            </li>
                            <li class="home"><a href="javascript:void(0)" name="Orderform.html" title="订单管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>订单管理</a></li>
                            <li class="home"><a href="javascript:void(0)" name="Amounts.html" title="交易金额"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>交易金额</a></li>
                            <li class="home"><a href="javascript:void(0)" name="Order_handling.html" title="订单处理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>订单处理</a></li>
                            <li class="home"><a href="javascript:void(0)" name="Refund.html" title="退款管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>退款管理</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle"><i class="icon-credit-card"></i><span class="menu-text"> 支付管理 </span><b
                                    class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="Cover_management.html" title="账户管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>账户管理</a></li>
                            <li class="home"><a href="javascript:void(0)" name="payment_method.html" title="支付方式"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>支付方式</a></li>
                            <li class="home"><a href="javascript:void(0)" name="Payment_Configure.html" title="支付配置"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>支付配置</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle"><i class="icon-user"></i><span
                                    class="menu-text"> 会员管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="user_list.html" title="会员列表"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>会员列表</a></li>
                            <li class="home"><a href="javascript:void(0)" name="member-Grading.html" title="等级管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>等级管理</a></li>
                            <li class="home"><a href="javascript:void(0)" name="integration.html" title="会员记录管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>会员记录管理</a></li>

                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle"><i class="icon-laptop"></i><span
                                    class="menu-text"> 店铺管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="Shop_list.html" title="店铺列表"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>店铺列表</a></li>
                            <li class="home"><a href="javascript:void(0)" name="Shops_Audit.html" title="店铺审核"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>店铺审核<span
                                            class="badge badge-danger">5</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle"><i class="icon-comments-alt"></i><span class="menu-text"> 消息管理 </span><b
                                    class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="Guestbook.html" title="留言列表"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>留言列表</a></li>
                            <li class="home"><a href="javascript:void(0)" name="Feedback.html" title="意见反馈"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>意见反馈</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle"><i class="icon-bookmark"></i><span
                                    class="menu-text"> 文章管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="article_list.html" title="文章列表"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>文章列表</a></li>
                            <li class="home"><a href="javascript:void(0)" name="article_Sort.html" title="分类管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>分类管理</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle"><i class="icon-cogs"></i><span
                                    class="menu-text"> 系统管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="Systems.html" title="系统设置"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>系统设置</a></li>
                            <li class="home"><a href="javascript:void(0)" name="System_section.html" title="系统栏目管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>系统栏目管理</a></li>

                            <li class="home"><a href="javascript:void(0)" name="System_Logs.html" title="系统日志"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>系统日志</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle"><i class="icon-group"></i><span
                                    class="menu-text"> 管理员管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">

                            <li class="home"><a href="javascript:void(0)" name="admin_Competence.html" title="权限管理"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>权限管理</a></li>
                            <li class="home"><a href="javascript:void(0)" name="administrator.html" title="管理员列表"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>管理员列表</a></li>
                            <li class="home"><a href="javascript:void(0)" name="admin_info.html" title="个人信息"
                                                class="iframeurl"><i class="icon-double-angle-right"></i>个人信息</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <script type="text/javascript">
                $("#menu_style").niceScroll({
                    cursorcolor: "#888888",
                    cursoropacitymax: 1,
                    touchbehavior: false,
                    cursorwidth: "5px",
                    cursorborder: "0",
                    cursorborderradius: "5px"
                });
            </script>
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left"
                   data-icon2="icon-double-angle-right"></i>
            </div>
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {
                }
            </script>
        </div>

        <div class="main-content">
            <script type="text/javascript">
                try {
                    ace.settings.check('breadcrumbs', 'fixed')
                } catch (e) {
                }
            </script>
            <div class="breadcrumbs" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="index.html">首页</a>
                    </li>
                    <li class="active"><span class="Current_page iframeurl"></span></li>
                    <li class="active" id="parentIframe"><span class="parentIframe iframeurl"></span></li>
                    <li class="active" id="parentIfour"><span class="parentIfour iframeurl"></span></li>
                </ul>
            </div>
            <iframe id="iframe" style="border:0; width:100%; background-color:#FFF;" name="iframe" frameborder="0" src="<?PHP echo $page_url; ?>">

            </iframe>

            <!-- /.page-content -->
        </div><!-- /.main-content -->
    </div><!-- /.main-container-inner -->
</div>
<!--底部样式-->

<div class="footer_style" id="footerstyle">
    <script type="text/javascript">try {
            ace.settings.check('footerstyle', 'fixed')
        } catch (e) {
        }</script>
    <p class="l_f">版权所有：Props Mall No 2 Backstage</p>
    <p class="r_f">地址：Props Mall No 2 Backstage 邮编：Props Mall No 2 Backstage 技术支持：Props Mall No 2 Backstage</p>
</div>
<!--修改密码样式-->
<div class="change_Pass_style" id="change_Pass">
    <ul class="xg_style">
        <li><label class="label_name">原&nbsp;&nbsp;密&nbsp;码</label><input name="原密码" type="password" class=""
                                                                          id="password"></li>
        <li><label class="label_name">新&nbsp;&nbsp;密&nbsp;码</label><input name="新密码" type="password" class=""
                                                                          id="Nes_pas"></li>
        <li><label class="label_name">确认密码</label><input name="再次确认密码" type="password" class="" id="c_mew_pas"></li>
    </ul>
</div>
<!-- /.main-container -->
<!-- basic scripts -->

</body>
</html>

