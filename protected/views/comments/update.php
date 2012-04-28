<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->comment_ID=>array('view','id'=>$model->comment_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comments', 'url'=>array('index')),
	array('label'=>'Create Comments', 'url'=>array('create')),
	array('label'=>'View Comments', 'url'=>array('view', 'id'=>$model->comment_ID)),
	array('label'=>'Manage Comments', 'url'=>array('admin')),
);
?>

<h1>Update Comments <?php echo $model->comment_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>