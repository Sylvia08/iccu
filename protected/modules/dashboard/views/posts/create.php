<?php
$this->breadcrumbs=array(
	'Post Manager'=>array('admin'),
	'Create',
);

$this->menu=array(
    array('label'=>'OPERATIONS'),
    array('label'=>'Manage Posts', 'icon'=>'th-list', 'url'=>array('admin')),
    array('label'=>'Create Post', 'icon'=>'file', 'url'=>array('create'), 'active'=>"true"),
);
?>

<h1>Create Post</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>