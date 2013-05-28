<?php 

class ModuleUser extends ModuleBase
{
    function __construct($backend) {
        $this->db_user = new DBUser($backend);
    }

    function addUser($name, $password) {
        $password = hash('sha256',$password);
        $result = $this->db_user->addUser($name, $password);
        if(!$result) {
            return true;
        }
        return false;
    }

    function getUserInfo($user_id) {
        $user_info = $this->db_user->getUserInfo($user_id);
        if (!$user_info) {
            return false;
        }
        return $user_info;
    }

    function getUserInfoByNameAndPassword($name, $password) {
        $password = hash('sha256',$password);
        $user_info = $this->db_user->getUserInfoByNameAndPassword($name, $password);
        if (!$user_info) {
            return false;
        }
        return $user_info;
    }
}
