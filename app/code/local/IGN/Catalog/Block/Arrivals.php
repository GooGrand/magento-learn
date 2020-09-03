<?php

class IGN_Catalog_Block_Arrivals extends Mage_Core_Block_Template
{
    public function getProductItems()
    {
        return Mage::getModel('catalog/product')
            ->getCollection()
            ->addAttributeToFilter('arrivals', true)
            ->addAttributeToSelect('name', 'price', 'weight', 'description');
    }
}