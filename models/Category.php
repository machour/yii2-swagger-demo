<?php

namespace app\models;

use machour\yii2\swagger\api\ApiModel;

/**
 * Class Category
 *
 * @package app\models
 */
class Category extends ApiModel
{
    /**
     * @var integer
     * @format int64
     */
    public $id;
    /**
     * @var string
     */
    public $name;
}
