<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 26/09/2017
 * Time: 10:40 ص
 */

namespace AboutYou\Service;


use AboutYou\Helper\JsonParser;

class CategoryService implements CategoryServiceInterface
{

    /**
     * This method should read from a data source (JSON in our case)
     * and return an unsorted list of products found in the data source.
     *
     * @param integer $categoryId
     *
     * @return \AboutYou\Entity\Product[]
     */
    public function getProducts($categoryId)
    {
        $data = JsonParser::getData();

        if(isset($data['id']))
            if($data['id'] == $categoryId)
                return $data['products'];

        foreach($data as $key => $value) {
            if(isset($value['id']) && $value['id'] == $categoryId){
                return $data['products'];
            }
        }

        return [];
    }
}