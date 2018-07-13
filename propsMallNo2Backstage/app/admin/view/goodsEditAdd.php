<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="../../../assets/js/html5.js"></script>
    <script type="text/javascript" src="../../../assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="../../../assets/lib/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../../../assets/css/style.css"/>
    <link href="../../../assets/lib/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../assets/lib/css/ace.min.css"/>
    <link rel="stylesheet" href="../../../assets/widget/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">
    <link rel="stylesheet" href="../../../assets/lib/css/font-awesome.min.css"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="../../../assets/lib/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    <link href="../../../assets/widget/icheck/icheck.css" rel="stylesheet" type="text/css"/>
    <link href="../../../assets/widget/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css"/>

    <title>新增图片</title>
    <style>
        #form-article-add .cl .form-label {
            line-height: 25px;
        }
    </style>
</head>
<body>
<?PHP include '../ctrl/goodsEditAddCtrl.php'; ?>
<?PHP //echo "<pre>"; print_r($goodsInfo); echo "</pre>"; ?>
<div class="clearfix" id="add_picture">
    <div class="page_right_style">
        <div class="type_title"><?PHP echo $goodsAct; ?></div>
        <form action="" method="post" class="form form-horizontal" id="form-article-add">
            <?PHP if (isset($goodsInfo) && $goodsInfo) {
                foreach ($goodsInfo as $val) { ?>
                    <div class="clearfix cl">
                        <label class="form-label col-2"><span class="c-red">*</span>商品名称：</label>
                        <div class="formControls col-5">
                            <input type="text" class="input-text"
                                   value="<?PHP echo isset($val['id']) ? $val['id'] : ""; ?>" placeholder=""
                                   id=""
                                   name=""></div>
                    </div>
                    <div class="clearfix cl">
                        <label class="form-label col-2"><span class="c-red">*</span>商品名称：</label>
                        <div class="formControls col-5">
                            <input type="text" class="input-text" value="<?PHP echo $val['name']; ?>" placeholder=""
                                   id=""
                                   name=""></div>
                    </div>
                    <div class="clearfix cl">
                        <label class="form-label col-2">商品简介：</label>
                        <div class="formControls col-5"><input type="text" class="input-text"
                                                               value="<?PHP echo $val['introduction']; ?>"
                                                               placeholder=""
                                                               id=""
                                                               name=""></div>
                    </div>
                    <div class="clearfix cl">
                        <label class="form-label col-2">商品库存：</label>
                        <div class="formControls col-5"><input type="text" class="input-text"
                                                               value="<?PHP echo $val['number']; ?>" placeholder=""
                                                               id=""
                                                               name=""></div>
                    </div>
                    <div class="clearfix cl">
                        <label class="form-label col-2">商品分类：</label>
                        <div class="formControls col-5"><input type="text" class="input-text"
                                                               value="<?PHP echo $val['sort']; ?>" placeholder=""
                                                               id=""
                                                               name=""></div>
                    </div>
                    <div class="clearfix cl">
                        <label class="form-label col-2">商品重量：</label>
                        <div class="formControls col-5"><input type="text" class="input-text"
                                                               value="<?PHP echo $val['weight']; ?>" placeholder=""
                                                               id=""
                                                               name="">
                        </div>
                    </div>
                    <div class="clearfix cl">
                        <label class="form-label col-2">商品价格：</label>
                        <div class="formControls col-5"><input type="text" class="input-text"
                                                               value="<?PHP echo $val['price']; ?>" placeholder=""
                                                               id=""
                                                               name="">
                        </div>
                    </div>
                    <div class="clearfix cl">
                        <?php //$picname="pic";
                        include "common/imagesUpload.php"; ?>

                        <!--<label class="form-label col-2">图片上传：</label>
                        <div class="formControls col-10">
                            <div class="uploader-list-container">
                                <div class="queueList">
                                    <div id="dndArea" class="placeholder">
                                        <div id="filePicker-2"></div>
                                        <p>或将照片拖到这里，单次最多可选300张</p>
                                    </div>
                                </div>
                                <div class="statusBar" style="display:none;">
                                    <div class="progress"><span class="text">0%</span> <span class="percentage"></span>
                                    </div>
                                    <div class="info"></div>
                                    <div class="btns">
                                        <div id="filePicker2"></div>
                                        <div class="uploadBtn">开始上传</div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="clearfix cl">
                        <label class="form-label col-2">详细内容：</label>
                        <div class="formControls col-10">
                            <script id="editor" type="text/plain"></script>
                        </div>
                    </div>
                <?PHP }
            } ?>


            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="clearfix cl" style="margin-top: 70px;">
                <div class="Button_operation">
                    <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i
                                class="icon-save "></i>保存并提交审核
                    </button>
                    <!--                            <button onClick="article_save();" class="btn btn-secondary  btn-warning" type="button"><i-->
                    <!--                                        class="icon-save"></i>保存草稿-->
                    <!--                            </button>-->
                    <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../../../assets/js/jquery-1.9.1.min.js"></script>
<script src="../../../assets/lib/js/bootstrap.min.js"></script>
<script src="../../../assets/lib/js/typeahead-bs2.min.js"></script>
<script src="../../../assets/lib/layer/layer.js" type="text/javascript"></script>
<script src="../../../assets/lib/laydate/laydate.js" type="text/javascript"></script>
<script type="text/javascript" src="../../../assets/widget/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="../../../assets/widget/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="../../../assets/widget/zTree/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="../../../assets/widget/Validform/5.3.2/Validform.min.js"></script>
<!--<script type="text/javascript" src="../../../assets/widget/webuploader/0.1.5/webuploader.min.js"></script>-->
<script type="text/javascript" src="../../../assets/widget/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="../../../assets/widget/ueditor/1.4.3/ueditor.all.min.js"></script>
<script type="text/javascript" src="../../../assets/widget/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script src="../../../assets/js/lrtk.js" type="text/javascript"></script>
<script type="text/javascript" src="../../../assets/js/H-ui.js"></script>
<script type="text/javascript" src="../../../assets/js/H-ui.admin.js"></script>
<script>

    $(document).ready(function () {
        //初始化宽度、高度
        $(".widget-box").width(0);
        $(".widget-box").height($(window).height());
        $(".page_right_style").height($(window).height());
        $(".page_right_style").width($(window).width() - 0);
        //当文档窗口发生改变时 触发
        $(window).resize(function () {
            $(".widget-box").height($(window).height());
            $(".page_right_style").height($(window).height());
            $(".page_right_style").width($(window).width() - 0);
        });
    });
    $(function () {

    });

</script>
<script type="text/javascript">
    $(function () {

    });


</script>
</body>
</html>