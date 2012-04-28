<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_login'); ?>
		<?php echo $form->textField($model,'user_login',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'user_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_pass'); ?>
		<?php echo $form->textField($model,'user_pass',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'user_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_nicename'); ?>
		<?php echo $form->textField($model,'user_nicename',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'user_nicename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_url'); ?>
		<?php echo $form->textField($model,'user_url',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'user_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_registered'); ?>
		<?php echo $form->textField($model,'user_registered'); ?>
		<?php echo $form->error($model,'user_registered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_activation_key'); ?>
		<?php echo $form->textField($model,'user_activation_key',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'user_activation_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_status'); ?>
		<?php echo $form->textField($model,'user_status'); ?>
		<?php echo $form->error($model,'user_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'display_name'); ?>
		<?php echo $form->textField($model,'display_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'display_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salt'); ?>
		<?php echo $form->textField($model,'salt',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'salt'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->