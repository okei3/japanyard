<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Japanyard_Controller.php';

Japanyard_Controller::main('Japanyard_Controller', array(
    '__ethna_unittest__',
    )
);
?>
