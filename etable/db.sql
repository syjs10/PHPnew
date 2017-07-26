grant all privileges on  etable.* to 'shaddow'@'localhost' identified by '123456';
DROP DATABASE IF EXISTS etable;
create database etable;
use etable;
create table et_data(
	id int primary key auto_increment,
	c_a varchar(30),
	c_b varchar(30),
	c_c varchar(30),
	c_d varchar(30),
	c_e varchar(30),
	c_f varchar(30),
	c_g varchar(30),
	c_h varchar(30)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

LOCK TABLES `et_data` WRITE;
/*!40000 ALTER TABLE `et_data` DISABLE KEYS */;
INSERT INTO `et_data` VALUES (12,'my','heart','will','go','on','and','on','forever'),(13,'hello','world','are','you','ok','with','your','skill'),(14,'when','i','was','young','i','listen','to','the radio'),(15,'wait','for','my','faveriate','song','you','like','it'),(17,'你','好','吗？','你','真的','好','嘛','确定？'),(18,'我','很','好','啊','谢谢','你','吧','非常'),(19,'故事','发生','在','1998','年','那时候','我们','都不大'),(20,'php','javascript','c','c++','python','golang','c#','java');
UNLOCK TABLES;
