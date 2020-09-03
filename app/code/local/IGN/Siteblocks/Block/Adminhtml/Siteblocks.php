<?php

class IGN_Siteblocks_Block_Adminhtml_Siteblock extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller = 'adminhtml.siteblocks';
        $this->_headerText = Mage::helper('siteblocks')->__('Siteblocks');
        $this->_addButtonLabel = Mage::helper('siteblocks')->__('Add New Siteblocks');
        parent::__construct();
    }

}
