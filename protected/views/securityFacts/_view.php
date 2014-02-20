<?php
/* @var $this SecurityFactsController */
/* @var $data SecurityFacts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_fact_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->security_fact_id), array('view', 'id'=>$data->security_fact_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_id')); ?>:</b>
	<?php echo CHtml::encode($data->security_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration_cd')); ?>:</b>
	<?php echo CHtml::encode($data->duration_cd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fact_source_id')); ?>:</b>
	<?php echo CHtml::encode($data->fact_source_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fact_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->fact_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_range')); ?>:</b>
	<?php echo CHtml::encode($data->date_range); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closing_value')); ?>:</b>
	<?php echo CHtml::encode($data->closing_value); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('opening_value')); ?>:</b>
	<?php echo CHtml::encode($data->opening_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('high_value')); ?>:</b>
	<?php echo CHtml::encode($data->high_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('low_value')); ?>:</b>
	<?php echo CHtml::encode($data->low_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('volume')); ?>:</b>
	<?php echo CHtml::encode($data->volume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_facts')); ?>:</b>
	<?php echo CHtml::encode($data->other_facts); ?>
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