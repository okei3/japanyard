<?php 

class DBItem extends DBBase
{
    function __construct($backend) {
        $this->db = &$backend->getDB('default');
    }

    function gacha($role) {
        $sql = " SELECT * FROM item where speciality=0 OR speciality=${role} ORDER BY RAND() LIMIT 1";
        $result = $this->db->query($sql);
        $data = $this->getResult($result);
        return $data;
    }

    function getItemsInfo($list) {
        $sql = "select * from item where id IN (${list})" ;
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
            $result_data[$i]['attribute'] = $data[2];
            $result_data[$i]['image_url'] = $data[3];
            $result_data[$i]['explain'] = $data[4];
            $result_data[$i]['speciality'] = $data[5];
            $result_data[$i]['ctime'] = $data[6];
            $result_data[$i]['mtime'] = $data[7];
            $i++;
        }
        return $result_data;
    }
/*
CREATE TABLE `item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `attribute` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `image_url` varchar(256) DEFAULT NULL,
  `explanation` varchar(256) NOT NULL,
  `speciality` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `ctime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `mtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `speciality` (`speciality`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8
*/
}
