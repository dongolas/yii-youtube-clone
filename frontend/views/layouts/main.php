<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;

$this->beginContent('@frontend/views/layouts/base.php')
?>

    <main class="d-flex">
        <?php echo $this->render('_sidebar') ?>
        <div class="content-wrapper p-3 col-sm-10">
            <?=Alert::widget()?>
            <?=$content?>
        </div>
    </main>



<?php $this->endContent()?>
