# 用户信息表：
create table  bhlv_users(
  uid  int not null AUTO_INCREMENT PRIMARY KEY,
  uname VARCHAR(20) NOT NULL  DEFAULT "",
  password VARCHAR(32) NOT NULL  DEFAULT "",
  phone VARCHAR(11) NOT NULL  DEFAULT "",
  email VARCHAR(11) NOT NULL  DEFAULT "",
  age  int NOT NULL  DEFAULT 8,
  gender int NOT NULL  DEFAULT 0,
  avatar VARCHAR(200) NOT NULL  DEFAULT "",
  regtime VARCHAR(200) NOT NULL  DEFAULT ""
)ENGINE = MyISAM CHARSET =UTF8;

# 广告信息表：
create table  bhlv_ads(
  adsid  int not null AUTO_INCREMENT PRIMARY KEY,
  adstitle VARCHAR(20) NOT NULL  DEFAULT "",
  adsintro VARCHAR(200) NOT NULL  DEFAULT "",
  adspic VARCHAR(100) NOT NULL  DEFAULT "",
  adslink VARCHAR(100) NOT NULL  DEFAULT "",
  adspos  int NOT NULL  DEFAULT 8,
  updtime VARCHAR(200) NOT NULL  DEFAULT ""
)ENGINE = MyISAM CHARSET =UTF8;

# 主题分类信息表：
create table  bhlv_subcate(
  cid  int not null AUTO_INCREMENT PRIMARY KEY,
  cname VARCHAR(20) NOT NULL  DEFAULT "",
  pid int NOT NULL  DEFAULT 0,
  updtime VARCHAR(50) NOT NULL  DEFAULT ""
)ENGINE = MyISAM CHARSET =UTF8;

#主题信息表：
create table  bhlv_subject(
  sid  int not null AUTO_INCREMENT PRIMARY KEY,
  sname VARCHAR(20) NOT NULL  DEFAULT "",
  subintro VARCHAR(200) NOT NULL  DEFAULT "",
  subdetail VARCHAR(3000) NOT NULL  DEFAULT "",
  subphotos VARCHAR(1000) NOT NULL  DEFAULT "",
  subpic  VARCHAR(100) NOT NULL  DEFAULT "",
  cid int NOT NULL  DEFAULT 0,
  lon VARCHAR(10) NOT NULL  DEFAULT "",
  lat VARCHAR(10) NOT NULL  DEFAULT "",
  avgprice DECIMAL(9,2) NOT NULL  DEFAULT 0,
  tickets int NOT NULL  DEFAULT 0,
  updtime VARCHAR(200) NOT NULL  DEFAULT ""
)ENGINE = MyISAM CHARSET =UTF8;

#投票记录信息表：
create table  bhlv_throwlog(
  thid  int not null AUTO_INCREMENT PRIMARY KEY,
  uid int NOT NULL  DEFAULT 0,
  sid int NOT NULL  DEFAULT 0,
  tnum int NOT NULL  DEFAULT 1,
  updtime VARCHAR(50) NOT NULL  DEFAULT ""
)ENGINE = MyISAM CHARSET =UTF8;