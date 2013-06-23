<?php
/**
 *  Mypage.php
 *
 *  @author     {$author}
 *  @package    Japanyard
 *  @version    $Id$
 */

/**
 *  mypage view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Japanyard
 */
class Japanyard_View_SupportItem extends Japanyard_ViewClass
{
    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    function preforward()
    {
        $module_item = new ModuleItem($this->backend);
        $item_list = $module_item->getAllItemInfo();
        $this->af->setApp('item_list', $item_list);
        /*
        if ($user_item_list) {
            $user_item_info = $item->getItemsInfo($user_item_list);

            $this->af->setApp('user_item_list', $user_item_list);
            $this->af->setApp('user_item_info', $user_item_info);
        }
        $this->af->setApp('user_id', $this->session->get('user_id'));
        */
    }
}

?>
