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
class Japanyard_Form_SupportItemAdd extends Japanyard_ActionForm
{
    var $form = array(
        'name' => array(
            'name' => 'name',
            'required'  => true,
            'type'      => VAR_TYPE_TEXT,
        ),
        'explain' => array(
            'name' => 'explain',
            'required'  => true,
            'type'      => VAR_TYPE_TEXT,
        ),
        'speciality' => array(
            'name' => 'speciality',
            'required'  => true,
            'type'      => VAR_TYPE_INT,
        ),
    );
}

class Japanyard_Action_SupportItemAdd extends Japanyard_ActionClass
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
        if ($this->af->validate() > 0) {
            //error
        }
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
        $name = $this->af->get('name');
        $explain = $this->af->get('explain');
        $speciality = $this->af->get('speciality');
        $module_item->insertItemInfo($name, $explain, $speciality);
        return 'support_item';
    }
}

?>
