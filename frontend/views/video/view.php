<?php

// @var $model \common\models\Video

use yii\widgets\Pjax;

?>

<div class="row">
  <div class="col-sm-8">
    <div class="embed-responsive embed-responsive-16by9">
      <video class="embed-responsive-item"
             poster="<?php echo $model->getThumbnailLink(); ?>"
             src="<?php echo $model->getVideoLink(); ?>"
             allowfullscreen
             controls></video>
    </div>
    <h3 class="mt-2"><?php echo $model->title; ?></h3>
    <div class="d-flex justify-content-between align-items-center" >
      <div>
        <?php echo $model->getViews()->count(); ?> views • <?php echo Yii::$app->formatter->asDate($model->created_at); ?>
      </div>
      <div>
        <?php Pjax::begin();?>
        <?php echo $this->render('_buttons', [
    'model' => $model,
]) ?>
        <?php Pjax::end();?>
      </div>
    </div>
  </div>
  <div class="col-sm-4">

  </div>
</div>