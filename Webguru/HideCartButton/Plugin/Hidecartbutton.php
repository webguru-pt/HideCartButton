<?php
namespace Webguru\HideCartButton\Plugin;

use Magento\Catalog\Model\Product;


class Hidecartbutton
{
    public function afterIsSaleable(Product $product)
    {
        return [];
    }
}