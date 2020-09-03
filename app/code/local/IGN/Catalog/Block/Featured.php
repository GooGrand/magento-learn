<?php

class IGN_Catalog_Block_Featured extends Mage_Core_Block_Template
{
    public function getProductItems()
    {
        return Mage::getModel('catalog/product')
            ->getCollection()
            ->addAttributeToFilter('featured', true)
            ->addAttributeToSelect('name', 'price', 'weight', 'description');
    }
}