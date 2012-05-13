<?php
$this->breadcrumbs=array(
	'Menu Manager'=>array('admin'),
	'Manage',
);

$this->menu=array(
    array('label'=>'OPERATIONS'),
    array('label'=>'Manage Menu Items', 'icon'=>'th-list', 'url'=>array('admin'), 'active'=>'true'),
    array('label'=>'Create Menu Item', 'icon'=>'file', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('menu-adjacency-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Manage Menu Items</h2>

<?php 
    Yii::app()->user->setFlash('info', '<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
    </p>');
    
    $this->widget('bootstrap.widgets.BootAlert'); 
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.BootGridView', array(
    'type'=>'striped bordered condensed',
	'id'=>'menu-adjacency-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'parent_id',
		'title',
		'position',
		'tooltip',
		'url',
		array(
            'class'=>'bootstrap.widgets.BootButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
	),
)); ?>
