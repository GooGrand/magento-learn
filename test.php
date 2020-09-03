<?php
include "app/Mage.php";
Mage::app();


$customerBlock = Mage::getModel('catalog/product_list');
var_dump(get_class($customerBlock));