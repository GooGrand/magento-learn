<?php
class IGN_Siteblocks_Block_List extends Mage_Core_Block_Template {

    public function getBlocks()
    {
        Mage::log(__METHOD__);
        //return Mage::getResourceModel('siteblocks/block_collection');
        return Mage::getModel('catalog/products')->getCollection();
//            ->addFieldToFilter('block_status',array('eq'=>IGN_Siteblocks_Model_Source_Status::ENABLED));
    }
}