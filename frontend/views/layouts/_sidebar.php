<aside class="shadow col-sm-2">
    <?php
echo \yii\bootstrap4\Nav::widget([
	'options' => [
		'class' => 'd-flex flex-column nav-pills',
	],
	'items' => [
		[
			'label' => 'Home',
			'url' => ['/video/index'],
		],
		[
			'label' => 'History',
			'url' => ['/video/history'],
		],
	],
])
?>
</aside>