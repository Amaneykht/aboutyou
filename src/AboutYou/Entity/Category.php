<?php

namespace AboutYou\Entity;


class Category
{
    /**
     * Id of the Category.
     *
     * @var int
     */
    private $id;

    /**
     * Name of the Category.
     *
     * @var string
     */
    private $name;

    /**
     * List of Products that belong to a Category.
     *
     * @var \AboutYou\Entity\Product[]
     */
    private $products = [];
}
