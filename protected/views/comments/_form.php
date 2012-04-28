<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comments-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_post_ID'); ?>
		<?php echo $form->textField($model,'comment_post_ID',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comment_post_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_author'); ?>
		<?php echo $form->textArea($model,'comment_author',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_author_email'); ?>
		<?php echo $form->textField($model,'comment_author_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'comment_author_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_author_url'); ?>
		<?php echo $form->textField($model,'comment_author_url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'comment_author_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_author_IP'); ?>
		<?php echo $form->textField($model,'comment_author_IP',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'comment_author_IP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_date'); ?>
		<?php echo $form->textField($model,'comment_date'); ?>
		<?php echo $form->error($model,'comment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_date_gmt'); ?>
		<?php echo $form->textField($model,'comment_date_gmt'); ?>
		<?php echo $form->error($model,'comment_date_gmt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_content'); ?>
		<?php echo $form->textArea($model,'comment_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_karma'); ?>
		<?php echo $form->textField($model,'comment_karma'); ?>
		<?php echo $form->error($model,'comment_karma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_approved'); ?>
		<?php echo $form->textField($model,'comment_approved',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comment_approved'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_agent'); ?>
		<?php echo $form->textField($model,'comment_agent',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comment_agent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_type'); ?>
		<?php echo $form->textField($model,'comment_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comment_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_parent'); ?>
		<?php echo $form->textField($model,'comment_parent',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comment_parent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->