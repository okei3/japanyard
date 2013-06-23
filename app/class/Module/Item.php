<?php 

class ModuleItem extends ModuleBase
{
    function __construct($backend) {
        $this->db_item = new DBItem($backend);
    }

    function gacha($role) {
        return  $this->db_item->gacha($role);
    }

    function getItemsInfo($list) {
        return $this->db_item->getItemsInfo($list);
    }

    function getAllItemInfo() {
        return $this->db_item->getAllItemInfo();
    }

    function insertItemInfo($name, $explain, $speciality) {
        return $this->db_item->insertItemInfo($name, $explain, $speciality);
    }

    function deleteItemInfo($id) {
        return $this->db_item->deleteItemInfo($id);
    }
}
