<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->comment_ID), array('view', 'id'=>$data->comment_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_post_ID')); ?>:</b>
	<?php echo CHtml::encode($data->comment_post_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_author')); ?>:</b>
	<?php echo CHtml::encode($data->comment_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_author_email')); ?>:</b>
	<?php echo CHtml::encode($data->comment_author_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_author_url')); ?>:</b>
	<?php echo CHtml::encode($data->comment_author_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_author_IP')); ?>:</b>
	<?php echo CHtml::encode($data->comment_author_IP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_date')); ?>:</b>
	<?php echo CHtml::encode($data->comment_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_date_gmt')); ?>:</b>
	<?php echo CHtml::encode($data->comment_date_gmt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_content')); ?>:</b>
	<?php echo CHtml::encode($data->comment_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_karma')); ?>:</b>
	<?php echo CHtml::encode($data->comment_karma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_approved')); ?>:</b>
	<?php echo CHtml::encode($data->comment_approved); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_agent')); ?>:</b>
	<?php echo CHtml::encode($data->comment_agent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_type')); ?>:</b>
	<?php echo CHtml::encode($data->comment_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_parent')); ?>:</b>
	<?php echo CHtml::encode($data->comment_parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	*/ ?>

</div>