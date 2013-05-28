<?php

class Japanyard_Authenticate extends Japanyard_ActionClass
{
    function authenticate()
    {
        if ( !$this->session->isStart() ) {
            return 'top';
        }
    }

    function prepare()
    {
        return null;
    }

    function perform()
    {
        return null;
    }
}
// }}}

?>
