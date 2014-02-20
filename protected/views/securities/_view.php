<?php
/* @var $this SecuritiesController */
/* @var $data Securities */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->security_id), array('view', 'id'=>$data->security_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->security_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_status_cd')); ?>:</b>
	<?php echo CHtml::encode($data->security_status_cd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_cd')); ?>:</b>
	<?php echo CHtml::encode($data->currency_cd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_cd')); ?>:</b>
	<?php echo CHtml::encode($data->country_cd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region_id')); ?>:</b>
	<?php echo CHtml::encode($data->region_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('exchange_id')); ?>:</b>
	<?php echo CHtml::encode($data->exchange_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ticker_cd')); ?>:</b>
	<?php echo CHtml::encode($data->ticker_cd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cr_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->cr_timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('up_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->up_timestamp); ?>
	<br />

	*/ ?>

</div>