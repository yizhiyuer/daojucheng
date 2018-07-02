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
  lid int not null  PRIMARY KEY  AUTO_INCREMENT,
  lname VARCHAR(50) not null DEFAULT "",
  lscore DECIMAL(2,1) not null DEFAULT 0,
  ltime  TINYINT  NOT NULL  DEFAULT 40
)CHARSET = utf8,ENGINE =MyISAM;


#练习：通过sql语句 为users表添加一个email字段？

alter table users add
  email varchar(50) not null default "";

#练习：通过SQL语句将users 中的uclass改成stuclass,且字段长度为50 ？
alter table users change uclass stuclass varchar(50) not null DEFAULT "";

#录入课程信息：
insert into lesson values(null,'大学语文',5.0,80);#写出所有字段的值；
insert into lesson values(null,'English',8.0,320);
insert into lesson(lname,lscore) values('C++',2.0);

insert into lesson values(null,'HTML',2.0,40),(null,'CSS',2.0,40),(null,'JavaScript',2.0,40);

insert into lesson values(null,'高等数学',5.0,160);
insert into lesson values(null,'离散数学',5.0,160);


#删除，带条件子句：
delete from lesson where lname=''; #sql语句中的条件没有 ==

#练习：通过SQL语句删除 课时大于80的课程记录？
delete from lesson where ltime>80;

#6.更新、修改数据表记录：

update lesson set lscore=5.0,ltime=90;

update lesson set lscore=2.0,ltime = 50 where lid>2;

#练习：再添加5条记录，将主键编号值大于 4的数据修改,修改学时与学分？
insert into lesson values
  (null,'PHP',2.0,40),
  (null,'ThinkPHP',2.0,40),
  (null,'Vue.js',2.0,40),
  (null,'Linux',2.0,40),
  (null,'SVN版本控制',2.0,40);

update lesson set lscore=5.0,ltime=80 where lid>4;

#扩展：主键编号值为3和4的数据，在原有的基础上加上5个学时;
update lesson set ltime = ltime+5 where lid in(3,4);
update lesson set ltime = ltime-15 where lid=3 or lid =4;

#商品分类信息表：分类cid,分类名称cname，从属分类pid,分类等级clev
create table goods_cate(
  cid int not null primary key auto_increment,
  cname VARCHAR(50) not null default '',
  pid  int not null default 0,
  clev int not null default 0
)engine=MyISAM,CHARSET = utf8;

insert into goods_cate(cname) values
  ('女装 / 男装 / 内衣'),
  ('鞋靴 / 箱包 / 配件'),
  ('童装玩具 / 孕产 / 用品'),
  ('家电 / 数码 / 手机'),
  ('珠宝 / 眼镜 / 手表'),
  ('运动 / 户外 / 乐器'),
  ('美食 / 生鲜 / 零食'),
  ('房产 / 装修 / 建材'),
  ('汽车 / 二手车 / 用品'),
  ('学习 / 卡券 / 本地服务');

#商品详情信息表：商品编号id,商品名称sname,商品价格，price,商品详情detail，商品相册photos,商品分类cid
create table goods(
  id int not null primary key auto_increment,
  sname VARCHAR(50) not null default '',
  price DECIMAL(11,2) not null default 0,
  detail text not null default '',
  photos VARCHAR(500) not null default '',
  cid int not null default 0
)engine=MyISAM,CHARSET = utf8;
insert into goods(sname,price,cid) VALUES
  ('iphone 6s',1018,4),
  ('Lenovo/联想 Y7000',6599,4),
  ('华硕 静音鼠标',16.8,4),
  ('骑行裤内裤短裤rbtwin',249.9,6),
  ('太阳镜',49.9,6),
  ('西装X0001',149.9,1),
  ('连衣裙',149.9,1),
  ('奥拓',14490.9,9),
  ('奔驰S0007',549000.9,9),
  ('smart',149000.9,9);

select id,sname,price,cid  from goods


# 练习：
# 1.查询出goods 表中，价格大于100的商品；
Select *from goods where price > 100;
Select *from myshop.goods  where price > 100;
# 2.查询出 goods 表中，价格小于50的商品；
select *from goods where price <50;
# 3.查询出goods 表中，价格大于100且小于10000的商品；
select *from goods where price >100 and price<10000;
# 4.查询出 goods 表中，价格大于500 且 类型编号为9 的商品；
select * from goods where price> 5000 and cid=9;
# 5.条件查询-范围查询:
# 枚举（in）:where 字段 in (值1，...，值);
# 例子：select * from goods where id in (1,2,3,4,5);

# 区间（between ... and ...）:where 字段 x between 边界值1 and 边界值2
# 例子：select * from goods where price between 100 and 10000;
# 等价：select * from goods where price>=100 and price <=10000;

# 练习：查询goods 主键编号在5,8 区间的记录？
select *from goods where id between 5 and 8;

# 6.条件查询-模糊查询：
# 关键字:like ;  模糊字符：%（不计长度）  _(代表模糊一个字符)
# 格式：where 字段x
select *from goods where sname like '%骑行%';
select *from goods where sname like '%牛%';
select *from goods where price like '%9%';
select *from goods where price like '49.90';
# 注意：like  没有使用模糊符号的时候，相当于 =；
select *from goods where price like '%9_';
select *from goods where price like '%9__';
select *from goods where price like '%9___';
select *from goods where price like '_9%';


# 练习：插入相关的数据让下方的sql有查询结果 ；
select * from goods where price like '_6';
select * from goods where price like '6_';

select * from goods where price like '%8';
select * from goods where price like '8_%';

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
  lid int not null  PRIMARY KEY  AUTO_INCREMENT,
  lname VARCHAR(50) not null DEFAULT "",
  lscore DECIMAL(2,1) not null DEFAULT 0,
  ltime  TINYINT  NOT NULL  DEFAULT 40
)CHARSET = utf8,ENGINE =MyISAM;


#练习：通过sql语句 为users表添加一个email字段？

alter table users add
  email varchar(50) not null default "";

#练习：通过SQL语句将users 中的uclass改成stuclass,且字段长度为50 ？
alter table users change uclass stuclass varchar(50) not null DEFAULT "";

#录入课程信息：
insert into lesson values(null,'大学语文',5.0,80);#写出所有字段的值；
insert into lesson values(null,'English',8.0,320);
insert into lesson(lname,lscore) values('C++',2.0);

insert into lesson values(null,'HTML',2.0,40),(null,'CSS',2.0,40),(null,'JavaScript',2.0,40);

insert into lesson values(null,'高等数学',5.0,160);
insert into lesson values(null,'离散数学',5.0,160);


#删除，带条件子句：
delete from lesson where lname=''; #sql语句中的条件没有 ==

#练习：通过SQL语句删除 课时大于80的课程记录？
delete from lesson where ltime>80;

#6.更新、修改数据表记录：

update lesson set lscore=5.0,ltime=90;

update lesson set lscore=2.0,ltime = 50 where lid>2;

#练习：再添加5条记录，将主键编号值大于 4的数据修改,修改学时与学分？
insert into lesson values
  (null,'PHP',2.0,40),
  (null,'ThinkPHP',2.0,40),
  (null,'Vue.js',2.0,40),
  (null,'Linux',2.0,40),
  (null,'SVN版本控制',2.0,40);

update lesson set lscore=5.0,ltime=80 where lid>4;

#扩展：主键编号值为3和4的数据，在原有的基础上加上5个学时;
update lesson set ltime = ltime+5 where lid in(3,4);
update lesson set ltime = ltime-15 where lid=3 or lid =4;

#商品分类信息表：分类cid,分类名称cname，从属分类pid,分类等级clev
create table goods_cate(
  cid int not null primary key auto_increment,
  cname VARCHAR(50) not null default '',
  pid  int not null default 0,
  clev int not null default 0
)engine=MyISAM,CHARSET = utf8;

insert into goods_cate(cname) values
  ('女装 / 男装 / 内衣'),
  ('鞋靴 / 箱包 / 配件'),
  ('童装玩具 / 孕产 / 用品'),
  ('家电 / 数码 / 手机'),
  ('珠宝 / 眼镜 / 手表'),
  ('运动 / 户外 / 乐器'),
  ('美食 / 生鲜 / 零食'),
  ('房产 / 装修 / 建材'),
  ('汽车 / 二手车 / 用品'),
  ('学习 / 卡券 / 本地服务');

#商品详情信息表：商品编号id,商品名称sname,商品价格，price,商品详情detail，商品相册photos,商品分类cid
create table goods(
  id int not null primary key auto_increment,
  sname VARCHAR(50) not null default '',
  price DECIMAL(11,2) not null default 0,
  detail text not null default '',
  photos VARCHAR(500) not null default '',
  cid int not null default 0
)engine=MyISAM,CHARSET = utf8;
insert into goods(sname,price,cid) VALUES
  ('iphone 6s',1018,4),
  ('Lenovo/联想 Y7000',6599,4),
  ('华硕 静音鼠标',16.8,4),
  ('骑行裤内裤短裤rbtwin',249.9,6),
  ('太阳镜',49.9,6),
  ('西装X0001',149.9,1),
  ('连衣裙',149.9,1),
  ('奥拓',14490.9,9),
  ('奔驰S0007',549000.9,9),
  ('smart',149000.9,9);

select id,sname,price,cid  from goods;


# 练习：
# 1.查询出 goods 表中，价格大于100的商品；
select * from goods where price > 100;
select * from myshop.goods where price > 100;
# 2.查询出 goods 表中，价格小于50的商品；
select * from goods where price<50;
# 4.查询出 goods 表中，价格大于100且小于10000的商品；
select * from goods where price>100 and price<10000;
# 5.查询出 goods 表中，价格大于5000 且 类型编号为9 的商品；
select * from goods where price>5000 and cid=9;


insert into goods(sname,price,cid) VALUES
  ('福成牛肉',100,7),
  ('玉林狗肉',10000,7);


#练习：查询goods主键编号在5,8 区间的记录？
select * from goods where id between 5 and 8;


#模糊：
select * from goods where sname like '%骑行%';

#练习：插入相关数据让下方的sql有查询结果；
insert into goods(sname,price,cid) VALUES
  ('钢笔',16,10),
  ('钢笔制造',160,10),
  ('A4纸张',60,10),
  ('国画宣纸',601,10),
  ('手工剪纸材料',66,10);


insert into goods(sname,price,cid) VALUES
  ('劳力士',16998,5),
  ('学生电子表',168,5),
  ('卡西欧',8000,5),
  ('手绘手表',8,5);

#例1：统计类别编号为5的所有商品总价；
select sum(price) from goods where cid=5;
select sum(price) as 总价 from goods where cid=5;

#例子：按类别去分组，并筛选出 cid 大于6的分类；
Select cid as 分类编号 from goods  where cid>6 group by cid;
Select cid as 分类编号 from goods  group by cid having cid>6;

Select id,cid as 分类编号 from goods group by cid having id>6;


# 6.20
#创建数据库：
create database school;
#学生信息表：
create table students(
  stuid int not null PRIMARY KEY AUTO_INCREMENT,
  stuname VARCHAR(30) not null DEFAULT ''
)CHARSET =utf8,ENGINE = MyISAM;
insert into students(stuname)
values('jack wang'),('cavin kang'),
  ('davie cheng'),('lucy cen'),('vic chen');

#课程信息表：
create table lesson(
  lessid int not null PRIMARY KEY AUTO_INCREMENT,
  lessname VARCHAR(30) not null DEFAULT ''
)CHARSET =utf8,ENGINE = MyISAM;

insert into lesson(lessname)
values('大学语文'),('高等数学'),
  ('大学英语'),('大学体育'),('数据结构');

#学生课程关系表（成绩信息表）：
create table scinfo(
  scoreid int not null PRIMARY KEY AUTO_INCREMENT,
  stuid int not null DEFAULT 0,
  lessid int not null DEFAULT 0,
  score DECIMAL(3,1) not null DEFAULT 0
)CHARSET =utf8,ENGINE = MyISAM;

insert into scinfo(stuid,lessid,score)
values
  (1,1,90),(1,2,80),(1,3,98),(1,4,75),(1,5,81),
  (2,1,60),(2,2,22),(2,3,78),(2,4,73),(2,5,80),
  (3,1,63),(3,2,83),(3,3,93),(3,4,33),(3,5,61),
  (4,1,94),(4,2,84),(4,3,78),(4,4,45),(4,5,41),
  (5,1,95),(5,2,85),(5,3,98),(5,4,65),(5,5,66)








