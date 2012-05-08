<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tooltip'); ?>
		<?php echo $form->textField($model,'tooltip',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'visible'); ?>
		<?php echo $form->textField($model,'visible'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'task'); ?>
		<?php echo $form->textField($model,'task',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'options'); ?>
		<?php echo $form->textField($model,'options',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->