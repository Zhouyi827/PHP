--创建数据库
create database mes charset=utf8;
--选择数据库
use mes;
--创建留言的信息表
create table mes_info(
id int auto_increment comment 'id',
title varchar(20) not null comment '标题',
content text not null comment '内容',
addtime varchar(20) not null comment '添加时间',
primary key(id)
)charset=utf8;
