<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'posts-form',
    'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>true,
)); ?>

	<?php $this->widget('bootstrap.widgets.BootAlert'); ?>

    <?php echo $form->textFieldRow($model, 'post_title', array('size'=>160, 'class'=>'span12')); ?>
	<?php echo $form->textAreaRow($model, 'post_excerpt', array('rows'=>4, 'class'=>'span12')); ?>
    <?php echo $form->dropDownListRow($model, 'taxonomies', TermTaxonomy::items('category')); ?>
    <?php echo $form->labelEx($model,'post_content'); ?>
	<?php $this->widget('application.extensions.ckeditor.CKEditor', array(
               'model'=>$model,
               'attribute'=>'post_content', // model atribute
               'language'=>'en', /* default lang, If not declared the language of the project will be used in case of using multiple languages */
               'editorTemplate'=>'full', // Toolbar settings (full, basic, advanced)
       )); ?>
    <?php echo $form->dropDownListRow($model, 'post_status', Utils::getPostStatus()); ?>
    <?php echo $form->textFieldRow($model, 'post_date'); ?>
    <br/>
	<?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'icon'=>'ok', 'label'=>'Save')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->