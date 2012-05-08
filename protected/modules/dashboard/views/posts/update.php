<?php
$this->breadcrumbs=array(
	'Posts'=>array('admin'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
    array('label'=>'OPERATIONS'),
    array('label'=>'Manage Posts', 'icon'=>'th-list', 'url'=>array('admin')),
    array('label'=>'Create Post', 'icon'=>'file', 'url'=>array('create')),
    array('label'=>''),
    array('label'=>'View This Post', 'icon'=>'eye-open', 'url'=>array('view', 'id'=>$model->ID)),
    array('label'=>'Delete This Post', 'icon'=>'trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Update Post <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>