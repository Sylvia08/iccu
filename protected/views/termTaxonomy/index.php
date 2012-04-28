<?php
$this->breadcrumbs=array(
	'Term Taxonomies',
);

$this->menu=array(
	array('label'=>'Create TermTaxonomy', 'url'=>array('create')),
	array('label'=>'Manage TermTaxonomy', 'url'=>array('admin')),
);
?>

<h1>Term Taxonomies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
