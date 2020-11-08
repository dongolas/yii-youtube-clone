<?php

// use \common\model\Video

use yii\helpers\Url;

?>

<a href="<?php echo Url::to(['video/like', 'id' => $model->video_id]); ?> "    
    data-method="post" 
    class="btn btn-sm <?php echo $model->isLikedBy(Yii::$app->user->id) ? 'btn-outline-primary' : 'btn-outline-secondary' ?> " 
    data-pjax="1">
    <i class="fas fa-thumbs-up"></i> <?php echo $model->getLikes()->count(); ?>
</a>
<button class="btn btn-sm btn-outline-secondary"><i class="fas fa-thumbs-down"></i> 6
</button>