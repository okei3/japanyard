<?php
/**
 *  Registry.php
 *
 *  @author     {$author}
 *  @package    Japanyard
 *  @version    $Id$
 */

/**
 *  registry Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Japanyard
 */
class Japanyard_Form_Registry extends Japanyard_ActionForm
{
    /**
     *  @access private
     *  @var    array   form definition.
     */
    var $form = array(
        'name' => array(
            'name' => 'name',
            'required'  => true,
            'type'      => VAR_TYPE_TEXT,
        ),
        'password' => array(
            'name' => 'password',
            'required'  => true,
            'type'      => VAR_TYPE_TEXT,
        ),
        'confirm_password' => array(
            'name' => 'confirm password',
            'required'  => true,
            'type'      => VAR_TYPE_TEXT,
        ),
    );
}

/**
 *  registry action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Japanyard
 */
class Japanyard_Action_Registry extends Japanyard_ActionClass
{
    function prepare()
    {
        if ($this->af->validate() > 1) {
            return 'error';
        }
        $this->password = $this->af->get('password');
        if ($this->password != $this->af->get('confirm_password')) {
            return 'top';
        }

        return null;
    }

    function perform()
    {
        $this->user = new User($this->backend);

        $this->name = $this->af->get('name');
        $this->user->addUser($this->name,$this->password);
        return 'registry';
    }
}

?>
