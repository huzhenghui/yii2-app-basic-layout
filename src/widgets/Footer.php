<?php

namespace huzhenghui\yii2\app_basic\layout\widgets;

use Yii;

class Footer extends \yii\bootstrap4\Widget
{
    public function run()
    {
?>
        <footer class="footer mt-auto py-3 text-muted">
            <div class="container">
                <p class="float-left">&copy; My Company <?= date('Y') ?></p>
                <p class="float-right"><?= Yii::powered() ?></p>
            </div>
        </footer>
<?php
    }
}
