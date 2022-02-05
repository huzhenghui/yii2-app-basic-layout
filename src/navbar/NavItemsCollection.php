<?php

namespace huzhenghui\yii2\app_basic\layout\navbar;

use ArrayObject;
use ArrayIterator;
use IteratorAggregate;
use Traversable;

class NavItemsCollection implements IteratorAggregate
{
    private $navItemsCollection;

    public function __construct()
    {
        $this->navItemsCollection = new ArrayObject();
    }

    public function append(NavItemsInterface $navItems)
    {
        $this->navItemsCollection->append($navItems);
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->navItemsCollection);
    }
}
