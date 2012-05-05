<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_author')); ?>:</b>
	<?php echo CHtml::encode($data->post_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_date')); ?>:</b>
	<?php echo CHtml::encode($data->post_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_date_gmt')); ?>:</b>
	<?php echo CHtml::encode($data->post_date_gmt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_content')); ?>:</b>
	<?php echo CHtml::encode($data->post_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_title')); ?>:</b>
	<?php echo CHtml::encode($data->post_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_excerpt')); ?>:</b>
	<?php echo CHtml::encode($data->post_excerpt); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('post_status')); ?>:</b>
	<?php echo CHtml::encode($data->post_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_status')); ?>:</b>
	<?php echo CHtml::encode($data->comment_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ping_status')); ?>:</b>
	<?php echo CHtml::encode($data->ping_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_password')); ?>:</b>
	<?php echo CHtml::encode($data->post_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_name')); ?>:</b>
	<?php echo CHtml::encode($data->post_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_ping')); ?>:</b>
	<?php echo CHtml::encode($data->to_ping); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pinged')); ?>:</b>
	<?php echo CHtml::encode($data->pinged); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_modified')); ?>:</b>
	<?php echo CHtml::encode($data->post_modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_modified_gmt')); ?>:</b>
	<?php echo CHtml::encode($data->post_modified_gmt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_content_filtered')); ?>:</b>
	<?php echo CHtml::encode($data->post_content_filtered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_parent')); ?>:</b>
	<?php echo CHtml::encode($data->post_parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guid')); ?>:</b>
	<?php echo CHtml::encode($data->guid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_order')); ?>:</b>
	<?php echo CHtml::encode($data->menu_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_type')); ?>:</b>
	<?php echo CHtml::encode($data->post_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_mime_type')); ?>:</b>
	<?php echo CHtml::encode($data->post_mime_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_count')); ?>:</b>
	<?php echo CHtml::encode($data->comment_count); ?>
	<br />

	*/ ?>

</div>