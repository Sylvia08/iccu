<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	$model->username,
);

$this->menu=array(
    array('label'=>'USERS'),
    array('label'=>'Manage Users', 'icon'=>'th-list', 'url'=>array('admin')),
    array('label'=>'Create User', 'icon'=>'file', 'url'=>array('create')),
    array('label'=>''),
    array('label'=>'Update this User', 'icon'=>'pencil', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete this User', 'icon'=>'trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'PROFILE FIELDS'),
    array('label'=>'Profile Field Manager', 'icon'=>'cog', 'url'=>array('profileField/admin')),
);
?>
<h2><?php echo UserModule::t('User').' "'.$model->username.'"'; ?></h2>

<?php
	$attributes = array(
		'id',
		'username',
	);
	
	$profileFields=ProfileField::model()->forOwner()->sort()->findAll();
	if ($profileFields) {
		foreach($profileFields as $field) {
			array_push($attributes,array(
					'label' => UserModule::t($field->title),
					'name' => $field->varname,
					'type'=>'raw',
					'value' => (($field->widgetView($model->profile))?$field->widgetView($model->profile):(($field->range)?Profile::range($field->range,$model->profile->getAttribute($field->varname)):$model->profile->getAttribute($field->varname))),
				));
		}
	}
	
	array_push($attributes,
		'email',
		'activkey',
		array(
			'name' => 'createtime',
			'value' => date("d.m.Y H:i:s",$model->createtime),
		),
		array(
			'name' => 'lastvisit',
			'value' => (($model->lastvisit)?date("d.m.Y H:i:s",$model->lastvisit):UserModule::t("Not visited")),
		),
		array(
			'name' => 'superuser',
			'value' => User::itemAlias("AdminStatus",$model->superuser),
		),
		array(
			'name' => 'status',
			'value' => User::itemAlias("UserStatus",$model->status),
		)
	);
	
	$this->widget('bootstrap.widgets.BootDetailView', array(
		'data'=>$model,
		'attributes'=>$attributes,
	));
	

?>
