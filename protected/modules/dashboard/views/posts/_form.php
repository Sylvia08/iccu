<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'posts-form',
    'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>true,
)); ?>

	<?php $this->widget('bootstrap.widgets.BootAlert'); ?>

    <?php echo $form->textFieldRow($model, 'post_title', array('class'=>'span12')); ?>
	<?php echo $form->textAreaRow($model, 'post_excerpt', array('rows'=>4, 'class'=>'span12')); ?>
    <?php echo $form->dropDownListRow($model, 'taxonomies', TermTaxonomy::items('category'), array('prompt'=>'-- Select a Category --')); ?>
    <?php echo $form->labelEx($model,'post_content'); ?>
       
    <?php $this->widget(
			'ext.p3extensions.widgets.ckeditor.CKEditor', array(
			'model' => $model,
			'attribute' => 'post_content',
			'options' => is_array(Yii::app()->params['ext.ckeditor.options']) ? Yii::app()->params['ext.ckeditor.options'] : array()
			)
		)?>   
    <?php echo $form->dropDownListRow($model, 'post_status', Posts::getPostStatus()); ?>
    <?php echo $form->textFieldRow($model, 'post_date'); ?>
    <br/>
	<?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'icon'=>'ok', 'label'=>'Save')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->