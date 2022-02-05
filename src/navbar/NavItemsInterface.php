<?php

namespace huzhenghui\yii2\app_basic\layout\navbar;

use Traversable;

interface NavItemsInterface
{
    /**
     * @return Traversable
     */
    public function getNavItems();
}
