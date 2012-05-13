<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'term-taxonomy-form',
    'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>true,
)); ?>
    <input type="hidden" value="category" name="TermTaxonomy[term]"/>
	
    <?php echo $form->textFieldRow($model, 'taxonomy'); ?>
    <?php echo $form->textFieldRow($model, 'feature_order'); ?>
    <?php echo $form->textAreaRow($model, 'excerpt', array('class'=>'span12', 'row'=>3)); ?>
    <?php echo $form->labelEx($model,'description'); ?>
    <?php $this->widget(
			'ext.p3extensions.widgets.ckeditor.CKEditor', array(
			'model' => $model,
			'attribute' => 'description',
			'options' => is_array(Yii::app()->params['ext.ckeditor.options']) ? Yii::app()->params['ext.ckeditor.options'] : array()
			)
	)?> 
    <?php echo $form->dropDownListRow($model, 'parent', TermTaxonomy::items('category', $model->taxonomy), array('prompt'=>'Select')); ?>
    <br/>
    <?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'icon'=>'ok', 'label'=>'Save')); ?>
     
<?php $this->endWidget(); ?>

</div><!-- form -->