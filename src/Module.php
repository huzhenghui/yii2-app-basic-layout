<?php

namespace huzhenghui\yii2\app_basic\layout;

use huzhenghui\yii2\app_basic\layout\navbar\NavItemsCollection;

/**
 * basiclayout module definition class
 */
class Module extends \yii\base\Module
{
    private $navItemsCollection;

    public function init()
    {
        parent::init();
        $this->navItemsCollection = new NavItemsCollection();
    }

    public function getNavItemsCollection()
    {
        return $this->navItemsCollection;
    }
}
