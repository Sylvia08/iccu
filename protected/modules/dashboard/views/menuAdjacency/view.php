<?php
$this->breadcrumbs=array(
	'Menu Manager'=>array('admin'),
	$model->title,
);

$this->menu=array(
	array('label'=>'OPERATIONS'),
    array('label'=>'Manage Menu Items', 'icon'=>'th-list', 'url'=>array('admin')),
    array('label'=>'Create Menu Item', 'icon'=>'file', 'url'=>array('create')),
    array('label'=>''),
    array('label'=>'Update this Menu Item', 'icon'=>'eye-open', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete this Menu Item', 'icon'=>'trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h2>Menu Item #<?php echo $model->id; ?></h2>
    
<?php $this->widget('bootstrap.widgets.BootDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'parent_id',
		'title',
		'position',
		'tooltip',
		'url',
		'visible',
		'task',
		'options',
	),
)); ?>
