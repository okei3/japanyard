<?php
/**
 *  Support/Item.php
 *
 *  @author     {$author}
 *  @package    Japanyard
 *  @version    $Id$
 */

/**
 *  support_item Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Japanyard
 */
class Japanyard_Form_SupportItem extends Japanyard_ActionForm
{
    var $form = array(
    );

}

class Japanyard_Action_SupportItem extends Japanyard_ActionClass
{
    /**
     *  preprocess of support_item Action.
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
     *  support_item action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    function perform()
    {
        return 'support_item';
    }
}

?>
