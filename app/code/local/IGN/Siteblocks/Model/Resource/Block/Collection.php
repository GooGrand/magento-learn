<?php
class IGN_Siteblocks_Model_Resource_Block_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {

    public function _construct()
    {
        parent::_construct();
        $this->_init('catalog/product');
//        $collection = Mage::getModel('catalog/product')->getCollection();
//        $collection->addAttributeToSelect('name');
//        $collection->setOrder('name', 'asc');
//        $collection->load();
//        Mage::log($collection->load()->__toString());
//        Mage::log($collection->getSelect()->__toString());
    }
}