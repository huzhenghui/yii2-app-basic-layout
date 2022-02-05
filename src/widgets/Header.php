<?php

namespace huzhenghui\yii2\app_basic\layout\widgets;

use Yii;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Widget;

use huzhenghui\yii2\app_basic\layout\Module;
use huzhenghui\yii2\app_basic\layout\navbar\NavItemsInterface;

class Header extends Widget
{
    public function run()
    {
        $items = array();
        $basiclayout = Yii::$app->getModule('basiclayout');
        if ($basiclayout instanceof Module) {
            foreach ($basiclayout->getNavItemsCollection() as $navItems) {
                if ($navItems instanceof NavItemsInterface) {
                    foreach ($navItems->getNavItems() as $navItem) {
                        $items[] = $navItem;
                    }
                }
            }
        }
?>
        <header>
            <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => $items,
            ]);
            NavBar::end();
            ?>
        </header>
<?php
    }
}
