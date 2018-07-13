<!DOCTYPE html >
<html>
<head>
    <meta content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link href="../../../assets/lib/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../../../assets/css/style.css"/>
    <link rel="stylesheet" href="../../../assets/lib/css/ace.min.css"/>
    <link rel="stylesheet" href="../../../assets/lib/css/font-awesome.min.css"/>
    <!--    <link rel="stylesheet" href="../../../widget/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">-->
    <!--    <link href="../../../widget/icheck/icheck.css" rel="stylesheet" type="text/css"/>-->
    <!--[if IE 7]>
    <link rel="stylesheet" href="../../../assets/lib/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="../../../assets/lib/css/ace-ie.min.css"/>
    <![endif]-->
    <script src="../../../assets/js/jquery-1.9.1.min.js"></script>
    <script src="../../../assets/lib/js/bootstrap.min.js"></script>
    <script src="../../../assets/lib/js/typeahead-bs2.min.js"></script>
    <!-- page specific plugin scripts -->
    <script src="../../../assets/lib/js/jquery.dataTables.min.js"></script>
    <script src="../../../assets/lib/js/jquery.dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="../../../assets/js/H-ui.js"></script>
    <script type="text/javascript" src="../../../assets/js/H-ui.admin.js"></script>
    <script src="../../../assets/lib/layer/layer.js" type="text/javascript"></script>
    <script src="../../../assets/lib/laydate/laydate.js" type="text/javascript"></script>
    <!--    <script type="text/javascript" src="../../../widget/zTree/js/jquery.ztree.all-3.5.min.js"></script>-->
    <script src="../../../assets/js/lrtk.js" type="text/javascript"></script>
    <title>商品列表</title>
</head>
<body>
<?PHP include '../ctrl/goodsListCtrl.php'; ?>

<div class=" page-content clearfix">
    <div id="products_style">
        <div class="search_style">
            <ul class="search_content clearfix">
                <li><label class="l_f">商品名称</label><input name="" type="text" class="text_add" placeholder="输入品牌名称"
                                                          style=" width:250px"/></li>
                <li><label class="l_f">添加时间</label><input class="inline laydate-icon" id="start"
                                                          style=" margin-left:10px;"></li>
                <li style="width:90px;">
                    <button type="button" class="btn_search"><i class="icon-search"></i>查询</button>
                </li>
            </ul>
        </div>
        <div class="border clearfix">
       <span class="l_f">
        <a href="goodsEditAdd.php?goods_act=add" title="添加商品" class="btn btn-warning Order_form"><i class="icon-plus"></i>添加商品</a>
        <a href="javascript:void(0)" class="btn btn-danger"><i class="icon-trash"></i>批量删除</a>
       </span>
            <span class="r_f">共：<b>2334</b>件商品</span>
        </div>
        <!--商品列表展示-->
        <div class="h_products_list clearfix" id="products_list">
            <div id="scrollsidebar" class="left_Treeview">
                <div class="show_btn" id="rightArrow"><span></span></div>
                <div class="widget-box side_content">
                    <div class="side_title"><a title="隐藏" class="close_btn"><span></span></a></div>
                    <div class="side_list">
                        <div class="widget-header header-color-green2"><h4 class="lighter smaller">商品类型列表</h4></div>
                        <div class="widget-body">
                            <div class="widget-main padding-8">
                                <div id="treeDemo" class="ztree"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-left: 0;" class="table_menu_list" id="testIframe">
                <table class="table table-striped table-bordered table-hover" id="sample-table">
                    <thead>
                    <tr>
                        <th><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                        <th>编号</th>
                        <th>名称</th>
                        <th>简介</th>
                        <th>主图</th>
                        <th>库存</th>
                        <th>重量</th>
                        <th>价格</th>
                        <th>详情</th>
                        <th>类型</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP
                    if (getGoodsList()) {
                        $goodsList = getGoodsList();
                        ?>
                        <?PHP foreach ($goodsList as $val) {
                            $val['shelves']?$val['shelves']='已上架':$val['shelves']='已下架'; ?>
                            <tr>
                                <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
                                <td><?PHP echo $val['id']?></td>
                                <td><u style="cursor:pointer" class="text-primary" onclick=""><?PHP echo $val['name'] ?></u></td>
                                <td><?PHP echo $val['introduction'] ?></td>
                                <td><img style="width: 50px;height: 50px;" src="<?PHP echo $val['images'] ?>"
                                         alt=""></td>
                                <td><?PHP echo $val['number'] ?></td>
                                <td><?PHP echo $val['weight'] ?></td>
                                <td class="text-l"><span style="margin-right: 2px;">¥</span><?PHP echo $val['price'] ?></td>
                                <td>...</td>
                                <td><?PHP echo $val['sort'] ?></td>
                                <td class="td-status"><span class="label label-success radius"><?PHP echo $val['shelves'] ?></span></td>
                                <td class="td-manage">
                                    <a onClick="member_stop(this,'10001')" href="javascript:;" title="下架"
                                       class="btn btn-xs "><i class="icon-arrow-down bigger-120"></i></a>
                                    <a title="编辑" onclick='member_edit("编辑","goodsEditAdd.php", "edit", "<?PHP echo $val['id']; ?>", "", "500")'
                                       href="javascript:;"
                                       class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></a>
                                    <a title="删除" href="javascript:;" onclick="member_del(this,'1')"
                                       class="btn btn-xs btn-warning"><i
                                                class="icon-trash  bigger-120"></i></a>
                                </td>
                            </tr>
                        <?PHP }
                    }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    jQuery(function ($) {
        var oTable1 = $('#sample-table').dataTable({
            "aaSorting": [[1, "desc"]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable": false, "aTargets": [0, 2, 3, 4, 5, 8, 9]}// 制定列不参与排序
            ]
        });


        $('table th input:checkbox').on('click', function () {
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function () {
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                });

        });


        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
            return 'left';
        }
    });
    laydate({
        elem: '#start',
        event: 'focus'
    });
    $(function () {
        $("#products_style").fix({
            float: 'left',
            //minStatue : true,
            skin: 'green',
            durationTime: false,
            spacingw: 30,//设置隐藏时的距离
            spacingh: 260,//设置显示时间距
        });
    });
</script>
<script type="text/javascript">
    //初始化宽度、高度
    $(".table_menu_list").width($(window).width() - 31);
    $(".table_menu_list").height($(window).height() - 145);


    $(".widget-box").width(0);
    $(".widget-box").height($(window).height() - 145);
    //当文档窗口发生改变时 触发
    $(window).resize(function () {
        $(".table_menu_list").width($(window).width() - 0);

        $(".widget-box").height($(window).height() - 0);
        $(".table_menu_list").height($(window).height() - 0);
    })

    /*******树状图*******/
    var setting = {
        view: {
            dblClickExpand: false,
            showLine: false,
            selectedMulti: false
        },
        data: {
            simpleData: {
                enable: true,
                idKey: "id",
                pIdKey: "pId",
                rootPId: ""
            }
        },
        callback: {
            beforeClick: function (treeId, treeNode) {
                var zTree = $.fn.zTree.getZTreeObj("tree");
                if (treeNode.isParent) {
                    zTree.expandNode(treeNode);
                    return false;
                } else {
                    demoIframe.attr("src", treeNode.file + ".html");
                    return true;
                }
            }
        }
    };

    var zNodes = [
        {id: 1, pId: 0, name: "商城分类列表", open: true},
        {id: 11, pId: 1, name: "蔬菜水果"},
        {id: 111, pId: 11, name: "蔬菜"},
        {id: 112, pId: 11, name: "苹果"},
        {id: 113, pId: 11, name: "大蒜"},
        {id: 114, pId: 11, name: "白菜"},
        {id: 115, pId: 11, name: "青菜"},
        {id: 12, pId: 1, name: "手机数码"},
        {id: 121, pId: 12, name: "手机 "},
        {id: 122, pId: 12, name: "照相机 "},
        {id: 13, pId: 1, name: "电脑配件"},
        {id: 131, pId: 13, name: "手机 "},
        {id: 122, pId: 13, name: "照相机 "},
        {id: 14, pId: 1, name: "服装鞋帽"},
        {id: 141, pId: 14, name: "手机 "},
        {id: 42, pId: 14, name: "照相机 "},
    ];

    var code;

    function showCode(str) {
        if (!code) code = $("#code");
        code.empty();
        code.append("<li>" + str + "</li>");
    }

    $(document).ready(function () {
        // var t = $("#treeDemo");
        // t = $.fn.zTree.init(t, setting, zNodes);
        // demoIframe = $("#testIframe");
        // demoIframe.bind("load", loadReady);
        // var zTree = $.fn.zTree.getZTreeObj("tree");
        // zTree.selectNode(zTree.getNodeByParam("id",'11'));
    });

    /*商品-停用*/
    function member_stop(obj, id) {
        layer.confirm('确认要下架吗？', function (index) {
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs btn-success" onClick="member_start(this,id)" href="javascript:;" title="下架"><i class="icon-arrow-up bigger-120"></i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
            $(obj).remove();
            layer.msg('已下架!', {icon: 5, time: 1000});
        });
    }

    /*商品-启用*/
    function member_start(obj, id) {
        layer.confirm('确认要上架吗？', function (index) {
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs " onClick="member_stop(this,id)" href="javascript:;" title="上架"><i class="icon-arrow-down bigger-120"></i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已上架</span>');
            $(obj).remove();
            layer.msg('已上架!', {icon: 6, time: 1000});
        });
    }

    /*商品-编辑*/
    function member_edit(title, url, act, goods_id, w, h) {
        layer_show(title, url, act, goods_id ,w, h);
    }

    /*商品-删除*/
    function member_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            $(obj).parents("tr").remove();
            layer.msg('已删除!', {icon: 1, time: 1000});
        });
    }

    //面包屑返回值
    var index = parent.layer.getFrameIndex(window.name);
    parent.layer.iframeAuto(index);
    $('.Order_form').on('click', function () {
        var cname = $(this).attr("title");
        var chref = $(this).attr("href");
        var cnames = parent.$('.Current_page').html();
        var herf = parent.$("#iframe").attr("src");
        parent.$('#parentIframe').html(cname);
        parent.$('#iframe').attr("src", chref).ready();
        ;
        parent.$('#parentIframe').css("display", "inline-block");
        parent.$('.Current_page').attr({"name": herf, "href": "javascript:void(0)"}).css({
            "color": "#4c8fbd",
            "cursor": "pointer"
        });
        //parent.$('.Current_page').html("<a href='javascript:void(0)' name="+herf+" class='iframeurl'>" + cnames + "</a>");
        parent.layer.close(index);

    });
</script>
