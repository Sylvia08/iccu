<?php
$this->breadcrumbs=array(
	'Terms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Terms', 'url'=>array('index')),
	array('label'=>'Manage Terms', 'url'=>array('admin')),
);
?>

<h1>Create Terms</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>