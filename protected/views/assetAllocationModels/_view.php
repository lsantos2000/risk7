<?php
/* @var $this AssetAllocationModelsController */
/* @var $data AssetAllocationModels */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('aa_model_uuid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->aa_model_uuid), array('view', 'id'=>$data->aa_model_uuid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aa_model_name')); ?>:</b>
	<?php echo CHtml::encode($data->aa_model_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aa_model_description')); ?>:</b>
	<?php echo CHtml::encode($data->aa_model_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('excpected_ror')); ?>:</b>
	<?php echo CHtml::encode($data->excpected_ror); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('risk_factor')); ?>:</b>
	<?php echo CHtml::encode($data->risk_factor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_uuid')); ?>:</b>
	<?php echo CHtml::encode($data->user_uuid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_uuid')); ?>:</b>
	<?php echo CHtml::encode($data->group_uuid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cr_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->cr_timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('up_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->up_timestamp); ?>
	<br />

	*/ ?>

</div>