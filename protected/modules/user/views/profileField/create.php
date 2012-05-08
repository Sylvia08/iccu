<?php
$this->breadcrumbs=array(
	UserModule::t('Profile Fields')=>array('admin'),
	UserModule::t('Create'),
);

$this->menu=array(
  array('label'=>'USERS'),
  array('label'=>'User Manager', 'icon'=>'th-list', 'url'=>array('/user/admin')),
  array('label'=>'PROFILE FIELDS'),
  array('label'=>'Manage Profile Fields', 'icon'=>'cog', 'url'=>array('profileField/admin')),
  array('label'=>'Create Profile Field', 'icon'=>'file', 'url'=>array('profileField/create'), 'active'=>'true'),
);
?>
<h2><?php echo UserModule::t('Create Profile Field'); ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>