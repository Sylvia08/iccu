<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change Password");
$this->breadcrumbs=array(
	UserModule::t("Profile") => array('/user/profile'),
	UserModule::t("Change Password"),
);
?>
<div class="row-fluid">
    <div class="span3">
        <?php echo $this->renderPartial('menu'); ?>
    </div>
    <div class="span9">
        <h2><?php echo UserModule::t("Change password"); ?></h2>
        <div class="form">
        <?php $form=$this->beginWidget('UActiveForm', array(
        	'id'=>'changepassword-form',
        	'enableAjaxValidation'=>true,
        )); ?>
        
        	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
        	<?php echo CHtml::errorSummary($model); ?>
        	
        	<div>
        	<?php echo $form->labelEx($model,'password'); ?>
        	<?php echo $form->passwordField($model,'password'); ?>
        	<?php echo $form->error($model,'password'); ?>
        	<p class="hint">
        	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
        	</p>
        	</div>
        	
        	<div>
        	<?php echo $form->labelEx($model,'verifyPassword'); ?>
        	<?php echo $form->passwordField($model,'verifyPassword'); ?>
        	<?php echo $form->error($model,'verifyPassword'); ?>
        	</div>
        	
        	
        	<div class="submit">
        	<?php echo CHtml::submitButton(UserModule::t("Save")); ?>
        	</div>
        
        <?php $this->endWidget(); ?>
        </div><!-- form -->
    </div>
</div>