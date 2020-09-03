<?php

class Excellence_Ajax_Block_Itemcard extends Mage_Catalog_Block_Product_List
{
    public function getAllowAttributes($id)
    {
        $_product = Mage::getModel('catalog/product')->load($id);

        return $_product->getTypeInstance(true)
            ->getConfigurableAttributes($_product);
    }
}