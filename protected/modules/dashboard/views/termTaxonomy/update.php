<?php
$this->breadcrumbs=array(
	'Category Manager'=>array('admin'),
	$model->term_taxonomy_id=>array('view','id'=>$model->term_taxonomy_id),
	'Update',
);

$this->menu=array(
	array('label'=>'OPERATIONS'),
	array('label'=>'Manage Categories', 'icon'=>'cog', 'url'=>array('admin')),
    array('label'=>'Create Category', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<h2>Update Category <?php echo $model->term_taxonomy_id; ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>