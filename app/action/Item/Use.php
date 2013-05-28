<?php
class Japanyard_Form_ItemUse extends Japanyard_ActionForm
{
    var $form = array(
        'item_id' => array(
            'name' => 'item id',
            'required'  => true,
            'type'      => VAR_TYPE_INT,
        ),
    );
}

/**
 *  ItemGet action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Japanyard
 */
class Japanyard_Action_ItemUse extends Japanyard_Authenticate
{
    /**
     *  preprocess of ItemGet Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    function prepare()
    {
        if (Ethna_Util::isDuplicatePost()) {
            return 'mypage';
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
        $this->item = new Item($this->backend);
        $user_id = $this->session->get('user_id');
        $this->item->useItem($user_id, $this->af->get('item_id'));
        return 'mypage';
    }
}

?>
