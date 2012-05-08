<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	UserModule::t('Create'),
);
?>
<?php 
$this->menu=array(
    array('label'=>'USERS'),
    array('label'=>'Manage Users', 'icon'=>'th-list', 'url'=>array('admin')),
    array('label'=>'Create User', 'icon'=>'file', 'url'=>array('create'), 'active'=>'true'),
    array('label'=>'PROFILE FIELDS'),
    array('label'=>'Profile Field Manager', 'icon'=>'cog', 'url'=>array('profileField/admin')),
);
?>
<h2><?php echo UserModule::t("Create User"); ?></h2>

<?php 
	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));
?>