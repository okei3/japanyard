<?php 

class ModuleUserItem extends ModuleBase
{
    function __construct($backend) {
        $this->db_user_item = new DBUserItem($backend);
    }

    function addItem($user_id, $user_info) {
        return  $this->db_user_item->addItem($user_id, $user_info[0]['id']);
    }

    function useItem($user_id, $item_id) {
        return  $this->db_user_item->addItem($user_id, $user_info[0]['id']);
    }

    function countItem($user_id, $item_id) {
        $count = $this->db_user_item->countItem($user_id, $item_id);
        return $count[0];
    }

    function deleteItem($user_id, $item_id) {
        return  $this->db_user_item->deleteItem($user_id, $item_id);
    }

    function getUserItem($user_id) {
        return  $this->db_user_item->getUserItem($user_id);
    }

    function updateCount($user_id, $item_id, $count) {
        return  $this->db_user_item->updateCount($user_id, $item_id, $count);
    }

    function getUserInfoByNameAndPassword($name, $password) {
        //$password = hash('sha256',$input_password);
        $user_info = $this->db_user->getUserInfoByNameAndPassword($name, $password);
        if (!$user_info) {
            return false;
        }
        return $user_info;
    }
}
