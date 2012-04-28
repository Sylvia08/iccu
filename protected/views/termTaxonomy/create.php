<?php
$this->breadcrumbs=array(
	'Term Taxonomies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TermTaxonomy', 'url'=>array('index')),
	array('label'=>'Manage TermTaxonomy', 'url'=>array('admin')),
);
?>

<h1>Create TermTaxonomy</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>