<?php
/* @var $this PortfoliosController */
/* @var $data Portfolios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('portfolio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->portfolio_id), array('view', 'id'=>$data->portfolio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portfolio_status_cd')); ?>:</b>
	<?php echo CHtml::encode($data->portfolio_status_cd); ?>
	<br />


</div>