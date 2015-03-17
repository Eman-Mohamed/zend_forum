<?php

class Application_Model_SystemStatus extends Zend_Db_Table_Abstract
{
    function editSystemStatus($data){
        $this->update($data);
        return $this->fetchAll()->toArray();
    }

}

