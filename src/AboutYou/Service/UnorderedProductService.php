<?php

namespace AboutYou\Service;

/**
 * This class is an (unfinished) example implementation of an unordered product service.
 */
class UnorderedProductService implements ProductFilterInterface
{

    public function filterProducts($productList)
    {
        return $productList;
    }
}
