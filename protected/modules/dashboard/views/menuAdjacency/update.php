<?php
$this->breadcrumbs=array(
	'Menu Manager'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'OPERATIONS'),
    array('label'=>'Manage Menu Items', 'icon'=>'th-list', 'url'=>array('admin')),
    array('label'=>'Create Menu Item', 'icon'=>'file', 'url'=>array('create')),
    array('label'=>''),
    array('label'=>'View this Menu Item', 'icon'=>'eye-open', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Delete this Menu Item', 'icon'=>'trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h2>Update Menu Item <?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>