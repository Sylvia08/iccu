<?php
$this->breadcrumbs=array(
	'Post Manager',
);

$this->menu=array(
	array('label'=>'OPERATIONS'),
    array('label'=>'Manage Posts', 'icon'=>'th-list', 'url'=>array('admin'), 'active'=>'true'),
    array('label'=>'Create Post', 'icon'=>'file', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('posts-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Manage Posts</h2>

<?php
    Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".alert").animate({opacity: 1.0}, 5000).fadeOut("slow");',
       CClientScript::POS_READY
    );
?>
<?php $this->widget('bootstrap.widgets.BootAlert'); ?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('bootstrap.widgets.BootGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        array('name'=>'ID', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 50px')),
        array('name'=>'post_title', 'header'=>'Title'),
        array('name'=>'post_status', 'header'=>'Status'),
        array('name'=>'author', 'value'=>'$data->author->username'),
        array('name'=>'category', 'header'=>'Category', 'value'=>'$data->category'),
        array(
            'class'=>'bootstrap.widgets.BootButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>

<?php print_r ($data->taxonomies[0]);?>