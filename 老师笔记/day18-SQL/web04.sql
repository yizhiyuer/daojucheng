#-------------用户信息表----------------
create table users(
  id    int    not null     auto_increment      primary key,
  uname varchar(10)  not null    default "",
  gender tinyint  not null   default 0,
  age    tinyint  not null  default 12,
  uclass  varchar(20)   not null  default "web",
  score   decimal(4,1)  not null  default  0
)charset=utf8;

#练习：在web04数据库中创建 课程信息表（lesson）
#字段名：id(课程编号|主键|自增), lname(课程名称)，lscore(课程学分)，ltime(课时)
# 保存创建命令在 .sql 文件中，方便修改和查看；

create table lesson(
  lid int not null AUTO_INCREMENT PRIMARY KEY ,
  lname VARCHAR(50) not null DEFAULT "",
  lscore DECIMAL(2,1) not null DEFAULT 0,
  ltime  TINYINT  NOT NULL  DEFAULT 40
)CHARSET = utf8,ENGINE =MyISAM;
