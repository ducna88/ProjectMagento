<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 8/13/14
 * Time: 2:28 PM
 * To change this template use File | Settings | File Templates.
 */

class Quan_Demo_Model_MyDemo extends Mage_Core_Model_Abstract{
    public function _construct(){
      //  parent::_construct();
        $this->_init("Demo/MyDemo");
    }
}