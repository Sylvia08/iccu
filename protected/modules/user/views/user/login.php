<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>

<h1><?php echo UserModule::t("Login"); ?></h1>

<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<p><?php echo UserModule::t("Please fill out the following form with your login credentials:"); ?></p>

<div class="form">
    <?php /** @var BootActiveForm $form */
    $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
        'id'=>'verticalForm',
    )); ?>
    <p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
    <?php echo CHtml::errorSummary($model); ?>
    <?php echo $form->textFieldRow($model, 'username', array('class'=>'span3')); ?>
    <?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
    <div class="row-fluid">
        <p class="hint">
        <?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
    	</p>
    </div>
    <?php echo $form->checkboxRow($model, 'rememberMe'); ?>
    <?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'icon'=>'ok', 'label'=>'Submit')); ?>
     
    <?php $this->endWidget(); ?>
</div><!-- form -->


<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>