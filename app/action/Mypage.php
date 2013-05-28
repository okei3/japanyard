<?php
class Japanyard_Form_Mypage extends Japanyard_ActionForm
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
 *  Mypage action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Japanyard
 */
class Japanyard_Action_Mypage extends Japanyard_Authenticate
{
    /**
     *  preprocess of Mypage Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    function prepare()
    {
        if ($this->af->validate() > 0) {
            return 'error';
        }

        return null;
    }

    /**
     *  Myapge action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    function perform()
    {
        return 'mypage';
    }
}

?>
