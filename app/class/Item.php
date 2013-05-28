<?php 

class Item
{
    function __construct($backend) {
        $this->module_item = new ModuleItem($backend);
        $this->module_user_item = new ModuleUserItem($backend);
    }

    function gacha($user_id, $role=0) {
        $get_item = $this->module_item->gacha($role);
        $this->module_user_item->addItem($user_id, $get_item);
        return $get_item;
    }

    function getUserInfoByNameAndPassword($name, $password) {
        return $this->module_user->getUserInfoByNameAndPassword($name, $password);
    }

    function getUserItem($user_id) {
        return $this->module_user_item->getUserItem($user_id);
    }

    function useItem($user_id, $item_id) {
        $count = $this->module_user_item->countItem($user_id, $item_id);
        if ($count > 1) {
            return $this->module_user_item->updateCount($user_id, $item_id, -1);
        } else {
            return $this->module_user_item->deleteItem($user_id, $item_id);
        }
    }

    function getItemsInfo($item_list) {
        $list = array();
        foreach ($item_list as $item) {
            $list[] = $item['item_id'];
        }
        $list = implode(',',$list);
        return $this->module_item->getItemsInfo($list);
    }

    function login($user_info) {
        $_SESSION['user_id'] = $user_info[0]['id'];
    }
}
