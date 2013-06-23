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
class Japanyard_Form_SupportItemDelete extends Japanyard_ActionForm
{
    var $form = array(
        'item_id' => array(
            'name' => 'item_id',
            'required'  => true,
            'type'      => VAR_TYPE_INNT
        ),
    );

}

class Japanyard_Action_SupportItemDelete extends Japanyard_ActionClass
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
        $module_item = new ModuleItem($this->backend);
        $item_id = $this->af->get('item_id');
        $module_item->deleteItemInfo($item_id);
        return 'support_item';
    }
}

?>
