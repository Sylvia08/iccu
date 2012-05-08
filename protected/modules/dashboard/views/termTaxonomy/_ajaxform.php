<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'term-taxonomy-form',
    'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>true,
)); ?>
    <input type="hidden" value="category" name="TermTaxonomy[term]"/>
	<?php Yii::app()->user->setFlash('error', $form->errorSummary($model)); ?>
    <?php echo $form->textFieldRow($model, 'taxonomy'); ?>
    <?php echo $form->textAreaRow($model, 'description', array('rows'=>4)); ?>
    <?php echo $form->dropDownListRow($model, 'parent', TermTaxonomy::items('category'), array('prompt'=>'Select')); ?>
    <br/>
     
<?php $this->endWidget(); ?>

</div><!-- form -->