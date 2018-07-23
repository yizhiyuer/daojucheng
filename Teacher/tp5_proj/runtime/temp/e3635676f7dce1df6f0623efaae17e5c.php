<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"E:\web04php\PHPTutorial\WWW\tp5_proj/application/admin\view\index\infoedit.html";i:1532078922;s:78:"E:\web04php\PHPTutorial\WWW\tp5_proj\application\admin\view\common\header.html";i:1532076587;s:80:"E:\web04php\PHPTutorial\WWW\tp5_proj\application\admin\view\common\leftside.html";i:1532078740;s:76:"E:\web04php\PHPTutorial\WWW\tp5_proj\application\admin\view\common\foot.html";i:1532076518;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/tp5_proj/public/admin/css/base.css" />
<link rel="stylesheet" type="text/css" href="/tp5_proj/public/admin/css/jquery.dialog.css" />
    <link rel="stylesheet" href="/tp5_proj/public/admin/css/index.css" />
    <link rel="stylesheet" href="/tp5_proj/public/admin/css/info-reg.css" />
    <link rel="stylesheet" href="/tp5_proj/public/admin/css/WdatePicker.css" />
<title>移动办公自动化系统</title>
</head>

<body>
<div id="container">
    <!--头部导航部分-->
    <div id="hd">
    <div class="hd-wrap ue-clear">
        <div class="top-light"></div>
        <h1 class="logo"></h1>
        <div class="login-info ue-clear">
            <div class="welcome ue-clear"><span>欢迎您,</span><a href="javascript:;" class="user-name">Admin</a></div>
            <div class="login-msg ue-clear">
                <a href="javascript:;" class="msg-txt">消息</a>
                <a href="javascript:;" class="msg-num">10</a>
            </div>
        </div>
        <div class="toolbar ue-clear">
            <a href="javascript:;" class="home-btn">首页</a>
            <a href="javascript:;" class="quit-btn exit"></a>
        </div>
    </div>
</div>
    <!--/头部导航部分-->
    <div id="bd">
    	<div class="wrap ue-clear">
            <!--左边菜单部分-->
            <div class="sidebar">
    <h2 class="sidebar-header"><p>功能导航</p></h2>
    <ul class="nav">
        <li class="office"><div class="nav-header"><a href="<?php echo url('index/index'); ?>"class="ue-clear"><span>首页</span><i class="icon"></i></a></div></li>
        <li class="gongwen"><div class="nav-header"><a href="<?php echo url('index/infomg'); ?>" class="ue-clear"><span>信息管理</span><i class="icon"></i></a></div></li>
        <li class="nav-info">
            <div class="nav-header"><a href="<?php echo url('index/infoedit'); ?>" class="ue-clear"><span>信息录入</span><i class="icon"></i></a></div>
        </li>
        <li class="konwledge"><div class="nav-header"><a href="javascript:;" class="ue-clear"><span>知识管理</span><i class="icon"></i></a></div></li>
        <li class="agency"><div class="nav-header"><a href="javascript:;" class="ue-clear"><span>组织结构</span><i class="icon"></i></a></div></li>
        <li class="email"><div class="nav-header"><a href="javascript:;" class="ue-clear"><span>邮件管理</span><i class="icon"></i></a></div></li>
        <li class="system"><div class="nav-header"><a href="javascript:;" class="ue-clear"><span>系统管理</span><i class="icon"></i></a></div></li>
    </ul>
</div>
            <!--/左边菜单部分-->
            <div class="content" style="overflow-x: hidden">
                <!--右边主体部分内容-->
                <div class="title"><h2>信息登记</h2></div>
                <div class="main">
                    <p class="short-input ue-clear">
                        <label>来文时间：</label>
                        <input type="text" placeholder="来文时间" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
                        <span><em>*</em>请输入正确的时间格式</span>
                    </p>
                    <p class="short-input ue-clear">
                        <label>收文时间：</label>
                        <input type="text" placeholder="收文时间" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
                    </p>
                    <p class="long-input ue-clear">
                        <label>来文单位：</label>
                        <input type="text" placeholder="来文单位" />
                    </p>
                    <p class="long-input ue-clear">
                        <label>文件编号：</label>
                        <input type="text" placeholder="请输入编号" />
                    </p>
                    <p class="long-input ue-clear">
                        <label>文件标题：</label>
                        <input type="text" placeholder="请输入标题" />
                    </p>
                    <p class="short-input ue-clear">
                        <label>分类号：</label>
                        <input type="text" placeholder="分类号" />
                    </p>
                    <div class="short-input select ue-clear">
                        <label>密级：</label>
                        <div class="select-wrap">
                            <div class="select-title ue-clear"><span>平件</span><i class="icon"></i></div>
                            <ul class="select-list">
                                <li>平件</li>
                                <li>保密</li>
                                <li>高级保密</li>
                            </ul>
                        </div>
                    </div>
                    <p class="short-input ue-clear">
                        <label>归档时间：</label>
                        <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
                    </p>
                    <p class="short-input ue-clear">
                        <label>保管期限：</label>
                        <input type="text" />
                    </p>
                    <p class="short-input ue-clear">
                        <label>备注：</label>
                        <textarea placeholder="请输入内容"></textarea>
                    </p>
                </div>
                <div class="btn ue-clear">
                    <a href="javascript:;" class="confirm">确定</a>
                    <a href="javascript:;" class="clear">清空内容</a>
                </div>
                <!--/右边主体部分内容-->
            </div>
        </div>
    </div>
    <!--脚注部分-->
    <div id="ft" class="ue-clear">
    <div class="ft-left">
        <span>中国移动</span>
        <em>Office&nbsp;System</em>
    </div>
    <div class="ft-right">
        <span>Automation</span>
        <em>V2.0&nbsp;2014</em>
    </div>
</div>
    <!--/脚注部分-->
</div>
<div class="exitDialog">
	<div class="dialog-content">
    	<div class="ui-dialog-icon"></div>
        <div class="ui-dialog-text">
        	<p class="dialog-content">你确定要退出系统？</p>
            <p class="tips">如果是请点击“确定”，否则点“取消”</p>
            
            <div class="buttons">
                <input type="button" class="button long2 ok" value="确定" />
                <input type="button" class="button long2 normal" value="取消" />
            </div>
        </div>
        
    </div>
</div>
</body>
<script type="text/javascript" src="/tp5_proj/public/admin/js/jquery.js"></script>
<script type="text/javascript" src="/tp5_proj/public/admin/js/common.js"></script>
<script type="text/javascript" src="/tp5_proj/public/admin/js/core.js"></script>
<script type="text/javascript" src="/tp5_proj/public/admin/js/jquery.dialog.js"></script>
<script type="text/javascript" src="/tp5_proj/public/admin/js/index.js"></script>
<script type="text/javascript" src="/tp5_proj/public/admin/js/WdatePicker.js"></script>
<script type="text/javascript" src="/tp5_proj/public/admin/js/jquery.pagination.js"></script>
<script type="text/javascript">
    $(".select-title").on("click",function(){
        $(".select-list").toggle();
        return false;
    });
    $(".select-list").on("click","li",function(){
        var txt = $(this).text();
        $(".select-title").find("span").text(txt);
    });


    showRemind('input[type=text], textarea','placeholder');
</script>
</html>
