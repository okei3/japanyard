<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Japanyard
 *  @version    $Id$
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Japanyard_Controller.php';

ini_set('max_execution_time', 0);

Japanyard_Controller::main_CLI('Japanyard_Controller', '{$action_name}');
?>
