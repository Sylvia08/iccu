<?php
$this->breadcrumbs=array(
	'Posts'=>array('admin'),
	$model->ID,
);

$this->menu=array(
    array('label'=>'OPERATIONS'),
    array('label'=>'Manage Posts', 'icon'=>'th-list', 'url'=>array('admin')),
    array('label'=>'Create Post', 'icon'=>'file', 'url'=>array('create')),
    array('label'=>''),
    array('label'=>'Update This Post', 'icon'=>'pencil', 'url'=>array('update', 'id'=>$model->ID)),
    array('label'=>'Delete This Post', 'icon'=>'trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h2><?php echo $model->post_title; ?></h2>

<?php $this->widget('bootstrap.widgets.BootDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'post_author', 'label'=>'Author', 'value'=>User::model()->findByPk($model->post_author)->username),
		array('name'=>'taxonomies', 'label'=>'Category', 'value'=>isset($model->category)?$model->category:""),
		'post_excerpt',
		'post_status',
		'post_date',
    	array('name'=>'post_content','type'=>'raw', 'value'=>$model->post_content),
	),
)); ?>
