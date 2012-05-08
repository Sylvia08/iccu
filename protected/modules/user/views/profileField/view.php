<?php
$this->breadcrumbs=array(
	UserModule::t('Profile Fields')=>array('admin'),
	UserModule::t($model->title),
);
$this->menu=array(
  array('label'=>'USERS'),
  array('label'=>'User Manager', 'icon'=>'th-list', 'url'=>array('/user/admin')),
  array('label'=>'PROFILE FIELDS'),
  array('label'=>'Manage Profile Fields', 'icon'=>'cog', 'url'=>array('profileField/admin')),
  array('label'=>'Create Profile Field', 'icon'=>'file', 'url'=>array('profileField/create')),
  array('label'=>''),
  array('label'=>'Update this Field', 'icon'=>'pencil', 'url'=>array('profileField/update', 'id'=>$model->id)),
  array('label'=>'Delete this Field', 'icon'=>'trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('profileField/delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<h2><?php echo UserModule::t('Profile Field #').$model->varname; ?></h2>

<?php $this->widget('bootstrap.widgets.BootDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'varname',
		'title',
		'field_type',
		'field_size',
		'field_size_min',
		'required',
		'match',
		'range',
		'error_message',
		'other_validator',
		'widget',
		'widgetparams',
		'default',
		'position',
		'visible',
	),
)); ?>
