<?php
class Japanyard_Form_ItemGet extends Japanyard_ActionForm
{
    var $form = array(
    );
}

/**
 *  ItemGet action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Japanyard
 */
class Japanyard_Action_ItemGet extends Japanyard_Authenticate
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
        $user_id = $this->session->get('user_id');
        $this->user = new User($this->backend);
        $user_info = $this->user->getUserInfo($user_id);

        $this->item = new Item($this->backend);
        $get_item = $this->item->gacha($user_id, $user_info[0]['role']);
        $this->af->setApp('get_item', $get_item);
        return 'mypage';
    }
}

?>
