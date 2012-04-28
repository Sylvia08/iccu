<?php
$this->breadcrumbs=array(
	'Term Taxonomies'=>array('index'),
	$model->term_taxonomy_id,
);

$this->menu=array(
	array('label'=>'List TermTaxonomy', 'url'=>array('index')),
	array('label'=>'Create TermTaxonomy', 'url'=>array('create')),
	array('label'=>'Update TermTaxonomy', 'url'=>array('update', 'id'=>$model->term_taxonomy_id)),
	array('label'=>'Delete TermTaxonomy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->term_taxonomy_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TermTaxonomy', 'url'=>array('admin')),
);
?>

<h1>View TermTaxonomy #<?php echo $model->term_taxonomy_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'term_taxonomy_id',
		'term_id',
		'taxonomy',
		'description',
		'parent',
		'count',
	),
)); ?>
