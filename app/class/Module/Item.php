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
}
