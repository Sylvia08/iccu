<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'post_author'); ?>
		<?php echo $form->textField($model,'post_author',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'post_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_date'); ?>
		<?php echo $form->textField($model,'post_date'); ?>
		<?php echo $form->error($model,'post_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_date_gmt'); ?>
		<?php echo $form->textField($model,'post_date_gmt'); ?>
		<?php echo $form->error($model,'post_date_gmt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_content'); ?>
		<?php echo $form->textArea($model,'post_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'post_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_title'); ?>
		<?php echo $form->textArea($model,'post_title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'post_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_excerpt'); ?>
		<?php echo $form->textArea($model,'post_excerpt',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'post_excerpt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_status'); ?>
		<?php echo $form->textField($model,'post_status',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'post_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_status'); ?>
		<?php echo $form->textField($model,'comment_status',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ping_status'); ?>
		<?php echo $form->textField($model,'ping_status',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ping_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_password'); ?>
		<?php echo $form->textField($model,'post_password',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'post_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_name'); ?>
		<?php echo $form->textField($model,'post_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'post_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_ping'); ?>
		<?php echo $form->textArea($model,'to_ping',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'to_ping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pinged'); ?>
		<?php echo $form->textArea($model,'pinged',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pinged'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_modified'); ?>
		<?php echo $form->textField($model,'post_modified'); ?>
		<?php echo $form->error($model,'post_modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_modified_gmt'); ?>
		<?php echo $form->textField($model,'post_modified_gmt'); ?>
		<?php echo $form->error($model,'post_modified_gmt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_content_filtered'); ?>
		<?php echo $form->textArea($model,'post_content_filtered',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'post_content_filtered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_parent'); ?>
		<?php echo $form->textField($model,'post_parent',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'post_parent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'guid'); ?>
		<?php echo $form->textField($model,'guid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'guid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_order'); ?>
		<?php echo $form->textField($model,'menu_order'); ?>
		<?php echo $form->error($model,'menu_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_type'); ?>
		<?php echo $form->textField($model,'post_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'post_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_mime_type'); ?>
		<?php echo $form->textField($model,'post_mime_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'post_mime_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_count'); ?>
		<?php echo $form->textField($model,'comment_count',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comment_count'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->