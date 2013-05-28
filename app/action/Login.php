<?php
class Japanyard_Form_Login extends Japanyard_ActionForm
{
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
    );
}

/**
 *  login action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Japanyard
 */
class Japanyard_Action_Login extends Japanyard_ActionClass
{
    /**
     *  preprocess of login Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    function prepare()
    {
        if ($this->af->validate() > 1) {
            return 'top';
        }

        return null;
    }

    /**
     *  login action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    function perform()
    {
        $this->user = new User($this->backend);
        $this->name = $this->af->get('name');
        $this->password = $this->af->get('password');
        $user_info = $this->user->getUserInfoByNameAndPassword($this->name, $this->password);
        if ($user_info) {
            $this->session->start();
            $this->user->login($user_info);
            return 'mypage';
        }
        return 'top';
    }
}

?>
