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
class Japanyard_View_Mypage extends Japanyard_ViewClass
{
    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    function preforward()
    {
        $item = new item($this->backend);
        $user_item_list = $item->getUserItem($this->session->get('user_id'));
        if ($user_item_list) {
            $user_item_info = $item->getItemsInfo($user_item_list);

            $this->af->setApp('user_item_list', $user_item_list);
            $this->af->setApp('user_item_info', $user_item_info);
        }
        $this->af->setApp('user_id', $this->session->get('user_id'));
    }
}

?>
