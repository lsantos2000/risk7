<?php
/* @var $this PortfolioSecsController */
/* @var $data PortfolioSecs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('portfolio_sec_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->portfolio_sec_id), array('view', 'id'=>$data->portfolio_sec_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portfolio_id')); ?>:</b>
	<?php echo CHtml::encode($data->portfolio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('starting_ts')); ?>:</b>
	<?php echo CHtml::encode($data->starting_ts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_id')); ?>:</b>
	<?php echo CHtml::encode($data->security_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('investment_volume')); ?>:</b>
	<?php echo CHtml::encode($data->investment_volume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('investment_rate_in')); ?>:</b>
	<?php echo CHtml::encode($data->investment_rate_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('investment_rate_out')); ?>:</b>
	<?php echo CHtml::encode($data->investment_rate_out); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ending_ts')); ?>:</b>
	<?php echo CHtml::encode($data->ending_ts); ?>
	<br />

	*/ ?>

</div>