<?php

namespace AboutYou\Entity;


class Price
{
    /**
     * Current price.
     *
     * @var int
     */
    private $current;

    /**
     * Old price.
     *
     * @var int|null
     */
    private $old;

    /**
     * Defines if the price is sale.
     *
     * @var bool
     */
    private $isSale;

    /**
     * Variant that the price belongs to.
     *
     * @var \AboutYou\Entity\Variant
     */
    private $variant;
}
