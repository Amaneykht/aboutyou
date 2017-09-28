<?php

namespace AboutYou\Entity;


class Variant extends BaseEntity
{
    /**
     * Id of the Variant.
     *
     * @var int
     */
    private $id;

    /**
     * Defines if the Variant is default for the product.
     *
     * @var bool
     */
    private $isDefault;

    /**
     * Defines if the Variant is Available or not.
     * 
     * @var bool
     */
    private $isAvailable;

    /**
     * Number of available items in stock.
     *
     * @var int
     */
    private $quantity;

    /**
     * Size of the Variant.
     *
     * @var mixed
     */
    private $size;

    /**
     * Variant price.
     * 
     * @var \AboutYou\Entity\Price
     */
    private $price;

    /**
     * Product that the Variant belongs to.
     *
     * @var \AboutYou\Entity\Product
     */
    private $product;

    public function rules()
    {
        return [
            'isDefault' => 'boolean',
            'isAvailable' => 'boolean',
            'quantity' => 'integer',
            'size' => ['in', ['XS', 'S', 'M', 'L', 'XL']],
        ];
    }
}
