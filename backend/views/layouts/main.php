<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php')
?>

    <main class="d-flex">
        <?php echo $this->render('_sidebar') ?>
        <div class="content-wrapper p-3 col-sm-10">
            <?=Alert::widget()?>
            <?=$content?>
        </div>
    </main>



<?php $this->endContent()?>
