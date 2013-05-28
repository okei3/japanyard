<?php 

class User
{
    function __construct($backend) {
        $this->module_user = new ModuleUser($backend);
    }

    function addUser($name, $password) {
        return $this->module_user->addUser($name, $password);
    }

    function getUserInfo($user_id) {
        return $this->module_user->getUserInfo($user_id);
    }

    function getUserInfoByNameAndPassword($name, $password) {
        return $this->module_user->getUserInfoByNameAndPassword($name, $password);
    }

    function login($user_info) {
        $_SESSION['user_id'] = $user_info[0]['id'];
    }
}
