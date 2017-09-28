<?php

namespace AboutYou\Entity;


class Product
{
    /**
     * Id of the Product.
     *
     * @var int
     */
    private $id;

    /**
     * Name of the Product.
     *
     * @var string
     */
    private $name;

    /**
     * Description of the Product.
     * 
     * @var string
     */
    private $description;

    /**
     * Unsorted list of Variants with their corresponding prices.
     * 
     * @var \AboutYou\Entity\Variant[]
     */
    private $variants = [];
}
