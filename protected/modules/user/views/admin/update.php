<?php
$this->breadcrumbs=array(
	(UserModule::t('Users'))=>array('admin'),
	$model->username=>array('view','id'=>$model->id),
	(UserModule::t('Update')),
);

$this->menu=array(
    array('label'=>'USERS'),
    array('label'=>'Manage Users', 'icon'=>'th-list', 'url'=>array('admin')),
    array('label'=>'Create User', 'icon'=>'file', 'url'=>array('create')),
    array('label'=>''),
    array('label'=>'View this User\'s profile', 'icon'=>'eye-open', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Delete this User', 'icon'=>'trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'PROFILE FIELDS'),
    array('label'=>'Profile Field Manager', 'icon'=>'cog', 'url'=>array('profileField/admin')),
);
?>

<h2><?php echo  UserModule::t('Update User')." ".$model->username; ?></h2>

<?php

	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile)); ?>