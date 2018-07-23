<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"E:\PHP\PHPTutorial\WWW\bhlv/application/admin\view\subject\index.html";i:1532317108;s:69:"E:\PHP\PHPTutorial\WWW\bhlv\application\admin\view\common\header.html";i:1532076588;s:71:"E:\PHP\PHPTutorial\WWW\bhlv\application\admin\view\common\leftside.html";i:1532315796;s:67:"E:\PHP\PHPTutorial\WWW\bhlv\application\admin\view\common\foot.html";i:1532076520;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/tp5_proj/public/admin/css/base.css" />
<link rel="stylesheet" type="text/css" href="/tp5_proj/public/admin/css/jquery.dialog.css" />
    <link rel="stylesheet" href="/tp5_proj/public/admin/css/index.css" />
    <link rel="stylesheet" href="/tp5_proj/public/admin/css/info-mgt.css" />
    <link rel="stylesheet" href="/tp5_proj/public/admin/css/WdatePicker.css" />
<title>主题管理-旅游评星投票后台管理</title>
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
        <li class="gongwen"><div class="nav-header"><a href="<?php echo url('subject/index'); ?>" class="ue-clear"><span>主题管理</span><i class="icon"></i></a></div></li>
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
                <div class="title"><h2>信息管理</h2></div>
                <div class="query">
                    <div class="query-conditions ue-clear">
                        <div class="conditions name ue-clear">
                            <label>流程名称：</label>
                            <div class="select-wrap">
                                <div class="select-title ue-clear"><span>请选择</span><i class="icon"></i></div>
                                <ul class="select-list">
                                    <li>呵呵</li>
                                    <li>哈哈</li>
                                    <li>嘻嘻</li>
                                </ul>
                            </div>
                        </div>
                        <div class="conditions operate-time ue-clear">
                            <label>操作时间：</label>
                            <div class="select-wrap">
                                <div class="select-title ue-clear"><span>大于或等于</span><i class="icon"></i></div>
                                <ul class="select-list">
                                    <li>呵呵</li>
                                    <li>哈哈</li>
                                    <li>嘻嘻</li>
                                </ul>
                            </div>
                            <div class="input-box ue-clear">
                                <input type="text" />
                                <span>小时</span>
                            </div>
                        </div>
                        <div class="conditions time ue-clear">
                            <label>时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;间：</label>
                            <div class="time-select">
                                <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" placeholder="开始时间" />
                                <i class="icon"></i>
                            </div>
                            <span class="line">-</span>
                            <div class="time-select">
                                <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" placeholder="开始时间" />
                                <i class="icon"></i>
                            </div>
                        </div>
                        <div class="conditions staff ue-clear">
                            <label>人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;员：</label>
                            <input type="text" placeholder="可以直接输入或选择" />
                            <a href="javascript:;" class="staff-select">选择</a>
                        </div>
                    </div>
                    <div class="query-btn ue-clear">
                        <a href="javascript:;" class="confirm">查询</a>
                        <a href="javascript:;" class="clear">清空条件</a>
                    </div>
                </div>
                <div class="table-operate ue-clear">
                    <a href="javascript:;" class="add">添加</a>
                    <a href="javascript:;" class="del">删除</a>
                    <a href="javascript:;" class="edit">编辑</a>
                    <a href="javascript:;" class="count">统计</a>
                    <a href="javascript:;" class="check">审核</a>
                </div>
                <div class="table-box">

                    <table>
                        <thead>
                        <tr>
                            <th class="num">编号</th>
                            <th class="name">主题</th>
                            <th class="name">分类</th>
                            <th class="name">简介</th>
                            <th class="name">图片</th>
                            <th class="name">经纬度</th>
                            <th class="process">人均消费</th>
                            <th class="time">更新时间</th>
                            <th class="operate">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($sublist) || $sublist instanceof \think\Collection || $sublist instanceof \think\Paginator): $i = 0; $__LIST__ = $sublist;if( count($__LIST__)==0 ) : echo "当前无数据" ;else: foreach($__LIST__ as $key=>$subitem): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td class="num"><?php echo $subitem['sid']; ?></td>
                            <td class="name"><?php echo $subitem['sname']; ?></td>
                            <td class="process"><?php echo $subitem['cid']; ?></td>
                            <td class="name"><?php echo $subitem['subintro']; ?></td>
                            <td class="name"><?php echo $subitem['subpic']; ?></td>
                            <td class="name"><?php echo $subitem['lon']; ?>,<?php echo $subitem['lat']; ?></td>
                            <td class="name"><?php echo $subitem['avgprice']; ?></td>
                            <td class="time"><?php echo $subitem['updtime']; ?></td>
                            <td class="operate">
                                <a href="javascript:;">编辑</a>
                                <a href="<?php echo url('subject/dodel',['id'=>$subitem['sid']]); ?>">删除</a>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "当前无数据" ;endif; ?>

                        </tbody>
                    </table>
                </div>
                <div class="pagination ue-clear"></div>
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
        $(".select-list").hide();
        $(this).siblings($(".select-list")).show();
        return false;
    })
    $(".select-list").on("click","li",function(){
        var txt = $(this).text();
        $(this).parent($(".select-list")).siblings($(".select-title")).find("span").text(txt);
    })

    $('.pagination').pagination(100,{
        callback: function(page){
            alert(page);
        },
        display_msg: true,
        setPageNo: true
    });

    $("tbody").find("tr:odd").css("backgroundColor","#eff6fa");

    showRemind('input[type=text], textarea','placeholder');
</script>
</html>
