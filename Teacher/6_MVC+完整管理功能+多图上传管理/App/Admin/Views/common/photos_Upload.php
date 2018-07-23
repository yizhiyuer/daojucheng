<label for="photos_chose"
       style="padding: 10px;background: #2aabd2;color:#eee">
    选择多张图片</label>
<input type="file" id="photos_chose" style="display: none"
       onchange="photos_upl()">
<input type="text" hidden
       name="<?php echo isset($psname)?$psname:"photos" ?>"
       value="<?php echo isset($psvalue)?$psvalue:"" ?>"
       id="photosurl" style="width: 1000px" >
<br>
<div id="show_photos"></div>
<script>
    appendArr=[];
    //---在编辑中显示旧图片----//
    window.onload=function(){
        psvalue ="<?php echo isset($psvalue)?$psvalue:"" ?>";
        if(psvalue!=null && psvalue!=""){
            appendArr = psvalue.split(",");
            console.log(appendArr);
            for(i=0;i<appendArr.length;i++){
                var pspath = appendArr[i];
                appendImg='<div style="float: left;text-align: center">' +
                    '<img src="'+pspath+'" style="height: 100px;margin: 10px 10px">' +
                    '<br><span  onclick="rmps(this)">删除</span></div>';
                $("#show_photos").append(appendImg);
            }
        }
    }
    //---在编辑中显示旧图片----//
    function photos_upl() {
        formData=new FormData();//创建一个表单对象
        formData.append('files',
            document.getElementById("photos_chose").files[0]);//获取文件选择控件放入表单对象
        console.log("表单对象",formData);
        $.ajax({
            url:'./admin.php?act=upload&view=doup',//上传文件接收服务
            type:'POST',
            data:formData,//表单数据对象
            dataType:"json",
            cache: false,
            contentType: false,    //不可缺
            processData: false,    //不可缺
            success:function(data){
                console.log(data);
                appendImg='<div style="float: left;text-align: center">' +
                    '<img src="'+data.filepath+'" style="height: 100px;margin: 10px 10px">' +
                    '<br><span onclick="rmps(this)">删除</span></div>';
                $("#show_photos").append(appendImg);
                appendArr.push(data.filepath);
                $("#photosurl").val(appendArr);//数组会强转为字符串
            }});
    }

    function rmps($obj){
        $img = $($obj).prev().prev();
        $rmstr = $img.attr("src");
        $parent = $img.parent();
        $parent.html("");//1.删除节点；
        //2.删除路径数组中的内容；
        var starpos = appendArr.indexOf($rmstr);
        console.log(starpos);//找到待删除路径所在数组中位置
        appendArr.splice(starpos,1);
        console.log($rmstr,appendArr);
        $("#photosurl").val(appendArr);//更新表单内容
    }
</script>