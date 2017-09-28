<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 28/09/2017
 * Time: 05:12 م
 */

namespace AboutYou\Service;


class PriceOrderedProductService implements ProductFilterInterface
{
    public function filterProducts($productList)
    {
        //implement sorting mechanism here by name
        array_multisort($productList, SORT_ASC, ['name']);
        return $productList;
    }
}
