<?php

namespace app\models;

use machour\yii2\swagger\api\ApiModel;

/**
 * Class Tag
 *
 * @package app\models
 */
class Tag extends ApiModel
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
