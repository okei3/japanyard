<?php 

class DBUser extends DBBase
{
    function __construct($backend) {
        $this->db = &$backend->getDB('default');
    }

    function addUser($name, $password) {
        $sql = "insert into user(name, password) values ('${name}', '${password}')";
        $result = $this->db->query($sql);
        return $result;
    }

    function getUserInfo($user_id) {
        $sql = "select * from user  where id='${user_id}'";
        $result =& $this->db->query($sql);
        $data = $this->getResult($result);
        return $data;
    }

    function getUserInfoByNameAndPassword($name, $password) {
        $sql = "select * from user  where name='${name}' AND password='${password}'";
        $result =& $this->db->query($sql);
        $data = $this->getResult($result);
        return $data;
    }

    function getPracticeInfo($practice_id) {
        $sql = 'select * from practice where practice_id=' . $practice_id;
        $result =& $this->db->query($sql);
        $data = $this->getResult($result);
        return $data;
    }

    function getResult($result) {
        $result_data = array();
        $i = 0;
        while ($data = $result->fetchRow()) {
            $result_data[$i]['id'] = $data[0];
            $result_data[$i]['name'] = $data[1];
            $result_data[$i]['password'] = false;
            $result_data[$i]['role'] = $data[3];
            $result_data[$i]['ctime'] = $data[4];
            $result_data[$i]['mtime'] = $data[5];
            $i++;
        }
        return $result_data;
    }
/*
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `ctime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `mtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `name_pass` (`name`,`password`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 
*/
}
