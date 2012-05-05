<?php
$this->breadcrumbs=array(
	'Terms'=>array('index'),
	$model->name=>array('view','id'=>$model->term_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Terms', 'url'=>array('index')),
	array('label'=>'Create Terms', 'url'=>array('create')),
	array('label'=>'View Terms', 'url'=>array('view', 'id'=>$model->term_id)),
	array('label'=>'Manage Terms', 'url'=>array('admin')),
);
?>

<h1>Update Terms <?php echo $model->term_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>