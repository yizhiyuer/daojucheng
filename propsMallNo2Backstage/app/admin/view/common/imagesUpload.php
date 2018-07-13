<label for="uppic" style="padding: 10px;background: #2aabd2;color:#eee">选择图片</label>
<input type="file" id="uppic" style="display: none" onchange="doupbyajax()">
<input type="text" hidden
       name="<?php echo isset($picname)?$picname:"pic" ?>"
       value="<?php echo isset($picvalue)?$picvalue:"" ?>"
       id="picurl" >
<br>
<img src="<?php echo isset($picvalue)?$picvalue:"" ?>" id="showpic" height="100px">

<script>
    function doupbyajax(){
        formData=new FormData();//创建一个表单对象
        formData.append('files',
            document.getElementById("uppic").files[0]);
        $.ajax({
            url:"../ctrl/goodsEditAddCtrl.php?goods_act=image_upload",//上传文件接收服务
            type:'POST',
            data:formData,//表单数据对象
            dataType:"json",
            cache: false,
            contentType: false,    //不可缺
            processData: false,    //不可缺
            success:function(data){
                console.log(data);
                // $("#showpic").attr("src",data.filepath);//设置图片的src属性值
                // $("#picurl").val(data.filepath);//返回路径放入表单元素
            }});
    }
</script>