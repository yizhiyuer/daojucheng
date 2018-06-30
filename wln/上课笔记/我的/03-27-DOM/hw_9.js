fruit = document.getElementById("fruit");
function cli4append(obj) {
    var input = obj.previousElementSibling;
    console.log("前一个同辈节点：",input.value);
    li = document.createElement("li");//创建新节点
    li.innerText = input.value;
    fruit.appendChild(li);
}

function cli4insert(obj){
    //obj = this的值
    console.log("取出当前的表单对象：",
        obj.form, //取出当前的表单对象
        obj.form.instext, //form对象.formName
        obj.form.inspos);//form对象.formName
    insertpos = fruit.children[obj.form.inspos.value];
    newli = document.createElement("li");//创建新节点
    newli.innerText = obj.form.instext.value;
    fruit.insertBefore(newli,insertpos);
}
function cli4replace(obj){
    //obj = this的值
    console.log("取出当前的表单对象：",
        obj.form, //取出当前的表单对象
        obj.form.reptext, //form对象.formName
        obj.form.reppos);//form对象.formName
    replacepos = fruit.children[obj.form.reppos.value];
    newli = document.createElement("li");//创建新节点
    newli.innerText = obj.form.reptext.value;
    fruit.replaceChild(newli,replacepos);
}

function cli4remove(obj) {
    var input = obj.previousElementSibling;
    console.log("前一个同辈节点：",input.value);
    remvObj = fruit.children[input.value];
    fruit.removeChild(remvObj);
}