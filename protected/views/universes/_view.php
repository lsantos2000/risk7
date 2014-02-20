<?php
/* @var $this UniversesController */
/* @var $data Universes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('universe_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->universe_id), array('view', 'id'=>$data->universe_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('univ_status_cd')); ?>:</b>
	<?php echo CHtml::encode($data->univ_status_cd); ?>
	<br />


</div>