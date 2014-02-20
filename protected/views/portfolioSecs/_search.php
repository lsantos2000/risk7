<?php
/* @var $this PortfolioSecsController */
/* @var $model PortfolioSecs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'portfolio_sec_id'); ?>
		<?php echo $form->textField($model,'portfolio_sec_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'portfolio_id'); ?>
		<?php echo $form->textField($model,'portfolio_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'starting_ts'); ?>
		<?php echo $form->textField($model,'starting_ts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'security_id'); ?>
		<?php echo $form->textField($model,'security_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'investment_volume'); ?>
		<?php echo $form->textField($model,'investment_volume',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'investment_rate_in'); ?>
		<?php echo $form->textField($model,'investment_rate_in',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'investment_rate_out'); ?>
		<?php echo $form->textField($model,'investment_rate_out',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ending_ts'); ?>
		<?php echo $form->textField($model,'ending_ts'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->