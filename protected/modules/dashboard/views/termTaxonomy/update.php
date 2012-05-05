<?php
$this->breadcrumbs=array(
	'Term Taxonomies'=>array('index'),
	$model->term_taxonomy_id=>array('view','id'=>$model->term_taxonomy_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TermTaxonomy', 'url'=>array('index')),
	array('label'=>'Create TermTaxonomy', 'url'=>array('create')),
	array('label'=>'View TermTaxonomy', 'url'=>array('view', 'id'=>$model->term_taxonomy_id)),
	array('label'=>'Manage TermTaxonomy', 'url'=>array('admin')),
);
?>

<h1>Update TermTaxonomy <?php echo $model->term_taxonomy_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>