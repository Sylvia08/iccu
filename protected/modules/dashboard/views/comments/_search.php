<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'comment_ID'); ?>
		<?php echo $form->textField($model,'comment_ID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_post_ID'); ?>
		<?php echo $form->textField($model,'comment_post_ID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_author'); ?>
		<?php echo $form->textArea($model,'comment_author',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_author_email'); ?>
		<?php echo $form->textField($model,'comment_author_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_author_url'); ?>
		<?php echo $form->textField($model,'comment_author_url',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_author_IP'); ?>
		<?php echo $form->textField($model,'comment_author_IP',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_date'); ?>
		<?php echo $form->textField($model,'comment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_date_gmt'); ?>
		<?php echo $form->textField($model,'comment_date_gmt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_content'); ?>
		<?php echo $form->textArea($model,'comment_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_karma'); ?>
		<?php echo $form->textField($model,'comment_karma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_approved'); ?>
		<?php echo $form->textField($model,'comment_approved',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_agent'); ?>
		<?php echo $form->textField($model,'comment_agent',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_type'); ?>
		<?php echo $form->textField($model,'comment_type',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_parent'); ?>
		<?php echo $form->textField($model,'comment_parent',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->