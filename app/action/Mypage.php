<?php
class Japanyard_Form_Mypage extends Japanyard_ActionForm
{
    var $form = array(
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
