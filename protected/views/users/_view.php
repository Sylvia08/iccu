<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_login')); ?>:</b>
	<?php echo CHtml::encode($data->user_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_pass')); ?>:</b>
	<?php echo CHtml::encode($data->user_pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_nicename')); ?>:</b>
	<?php echo CHtml::encode($data->user_nicename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_url')); ?>:</b>
	<?php echo CHtml::encode($data->user_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_registered')); ?>:</b>
	<?php echo CHtml::encode($data->user_registered); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_activation_key')); ?>:</b>
	<?php echo CHtml::encode($data->user_activation_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_status')); ?>:</b>
	<?php echo CHtml::encode($data->user_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('display_name')); ?>:</b>
	<?php echo CHtml::encode($data->display_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salt')); ?>:</b>
	<?php echo CHtml::encode($data->salt); ?>
	<br />

	*/ ?>

</div>