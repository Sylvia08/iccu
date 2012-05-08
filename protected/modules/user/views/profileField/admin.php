<?php
$this->breadcrumbs=array(
	UserModule::t('Profile Fields')=>array('admin'),
	UserModule::t('Manage'),
);
$this->menu=array(
  array('label'=>'USERS'),
  array('label'=>'User Manager', 'icon'=>'th-list', 'url'=>array('/user/admin')),
  array('label'=>'PROFILE FIELDS'),
  array('label'=>'Manage Profile Fields', 'icon'=>'cog', 'url'=>array('profileField/admin'), 'active'=>'true'),
  array('label'=>'Create Profile Field', 'icon'=>'file', 'url'=>array('profileField/create')),
);
?>
<h2><?php echo UserModule::t('Manage Profile Fields'); ?></h2>

<?php $this->widget('bootstrap.widgets.BootGridView', array(
    'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id',
		'varname',
		array(
			'name'=>'title',
			'value'=>'UserModule::t($data->title)',
		),
		'field_type',
		'field_size',
		//'field_size_min',
		array(
			'name'=>'required',
			'value'=>'ProfileField::itemAlias("required",$data->required)',
		),
		//'match',
		//'range',
		//'error_message',
		//'other_validator',
		//'default',
		'position',
		array(
			'name'=>'visible',
			'value'=>'ProfileField::itemAlias("visible",$data->visible)',
		),
		//*/
		array(
            'class'=>'bootstrap.widgets.BootButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
	),
)); ?>
