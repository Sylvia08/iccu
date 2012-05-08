<?php
$this->breadcrumbs=array(
	'Menu Manager'=>array('admin'),
	'Create',
);

$this->menu=array(
    array('label'=>'OPERATIONS'),
    array('label'=>'Manage Menu Items', 'icon'=>'th-list', 'url'=>array('admin')),
    array('label'=>'Create Menu Item', 'icon'=>'file', 'url'=>array('create'), 'active'=>'true'),
);

?>

<h2>Create Menu Item</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>