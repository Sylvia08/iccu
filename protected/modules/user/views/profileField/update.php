<?php
$this->breadcrumbs=array(
	UserModule::t('Profile Fields')=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	UserModule::t('Update'),
);
$this->menu=array(
  array('label'=>'USERS'),
  array('label'=>'User Manager', 'icon'=>'th-list', 'url'=>array('/user/admin')),
  array('label'=>'PROFILE FIELDS'),
  array('label'=>'Manage Profile Fields', 'icon'=>'cog', 'url'=>array('profileField/admin')),
  array('label'=>'Create Profile Field', 'icon'=>'file', 'url'=>array('profileField/create')),
  array('label'=>''),
  array('label'=>'View this Field', 'icon'=>'eye-open', 'url'=>array('profileField/view', 'id'=>$model->id)),
  array('label'=>'Delete this Field', 'icon'=>'trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('profileField/delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h2><?php echo UserModule::t('Update Profile Field ').$model->id; ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>