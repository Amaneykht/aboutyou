<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 28/09/2017
 * Time: 05:06 م
 */

namespace AboutYou\Service;


class ProductService implements ProductServiceInterface
{
    /**
     * @var CategoryServiceInterface
     */
    private $categoryService;

    private $productFilter;

    /**
     * Maps from category name to the id for the category service.
     *
     * @var array
     */
    private $categoryNameToIdMapping = [
        'Clothes' => 17325
    ];

    /**
     * @param ProductServiceInterface $productService
     */
    public function __construct(CategoryServiceInterface $categoryService, ProductFilterInterface $productFilter)
    {
        $this->categoryService = $categoryService;
        $this->productFilter = $productFilter;
    }

    /**
     * @inheritdoc
     */
    public function getProductsForCategory($categoryName)
    {
        if (!isset($this->categoryNameToIdMapping[$categoryName]))
        {
            throw new \InvalidArgumentException(sprintf('Given category name [%s] is not mapped.', $categoryName));
        }

        $categoryId = $this->categoryNameToIdMapping[$categoryName];
        $productResults = $this->categoryService->getProducts($categoryId);
        return $this->productFilter->filterProducts($productResults);
    }
}