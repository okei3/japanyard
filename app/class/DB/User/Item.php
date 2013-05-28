<?php 

class DBUserItem extends DBBase
{
    function __construct($backend) {
        $this->db = &$backend->getDB('default');
    }

    function addItem($user_id, $item_id) {
        $sql = " SELECT 1 FROM user_item where user_id=${user_id}  AND item_id=${item_id}";
        $result = $this->db->query($sql);
        $data = $result->fetchRow();
        if($data) {
            $sql = " UPDATE user_item SET count=count+1 WHERE user_id=${user_id} AND item_id=${item_id}";
            return $this->db->query($sql);
        } else {
            $sql = " INSERT INTO user_item (user_id, item_id) values (${user_id}, ${item_id})";
            return $this->db->query($sql);
        }
    }

    function getUserItem($user_id) {
        $sql = "select * from user_item  where user_id='${user_id}'";
        $result =& $this->db->query($sql);
        $data = $this->getResult($result);
        return $data;
    }

    function countItem($user_id, $item_id) {
        $sql = "select count from user_item  where user_id='${user_id}' AND item_id=${item_id}";
        $result =& $this->db->query($sql);
        $count = $result->fetchRow();
        return $count;
    }

    function deleteItem($user_id, $item_id) {
        $sql = "delete from user_item  where user_id='${user_id}' AND item_id=${item_id}";
        return $this->db->query($sql);
    }

    function getUserInfoByNameAndPassword($name, $password) {
        $sql = "select * from user  where name='${name}' AND password='${password}'";
        $result =& $this->db->query($sql);
        $data = $this->getResult($result);
        return $data;
    }

    function updateCount($user_id, $item_id, $count) {
        $sql = " UPDATE user_item SET count=count+${count} WHERE user_id=${user_id} AND item_id=${item_id}";
        return $this->db->query($sql);
    }

    function getResult($result) {
        $result_data = array();
        $i = 0;
        while ($data = $result->fetchRow()) {
            $result_data[$i]['id'] = $data[0];
            $result_data[$i]['user_id'] = $data[1];
            $result_data[$i]['item_id'] = $data[2];
            $result_data[$i]['count'] = $data[3];
            $result_data[$i]['use_flag'] = $data[4];
            $result_data[$i]['set_place'] = $data[5];
            $result_data[$i]['ctime'] = $data[6];
            $result_data[$i]['mtime'] = $data[7];
            $i++;
        }
        return $result_data;
    }
/*
CREATE TABLE `user_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL DEFAULT '1',
  `use_flag` int(10) unsigned NOT NULL DEFAULT '0',
  `set_place` int(10) unsigned DEFAULT '0',
  `ctime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `mtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `user_item` (`user_id`,`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8
*/
}
