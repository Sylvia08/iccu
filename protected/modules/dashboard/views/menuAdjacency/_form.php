<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'menu-adjacency-form',
    'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>false,
)); ?>

<?php $this->widget('bootstrap.widgets.BootAlert'); ?>

    <?php echo $form->textFieldRow($model, 'title'); ?>
    <?php echo $form->textFieldRow($model, 'position'); ?>
    <?php echo $form->textFieldRow($model, 'tooltip'); ?>
    <?php echo $form->textFieldRow($model, 'url'); ?>
	<?php echo $form->textFieldRow($model, 'task'); ?>
	<?php echo $form->textFieldRow($model, 'options'); ?>
    <?php echo $form->dropDownListRow($model, 'parent_id', MenuAdjacency::items($model->title), array('prompt'=>'Select')); ?>
    <?php echo $form->checkboxRow($model, 'visible'); ?>
    <br/>
	<?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'icon'=>'ok', 'label'=>'Save')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->