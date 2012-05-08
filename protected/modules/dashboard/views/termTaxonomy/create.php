<?php
$this->breadcrumbs=array(
	'Category Manager'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'OPERATIONS'),
	array('label'=>'Manage Categories', 'icon'=>'cog', 'url'=>array('admin')),
    array('label'=>'Create Category', 'icon'=>'pencil', 'url'=>'#', 'active'=>true),
);
?>

<h2>Create Category</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>