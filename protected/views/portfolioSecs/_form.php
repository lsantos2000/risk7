<?php
/* @var $this PortfolioSecsController */
/* @var $model PortfolioSecs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'portfolio-secs-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'portfolio_id'); ?>
		<?php echo $form->textField($model,'portfolio_id'); ?>
		<?php echo $form->error($model,'portfolio_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'starting_ts'); ?>
		<?php echo $form->textField($model,'starting_ts'); ?>
		<?php echo $form->error($model,'starting_ts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'security_id'); ?>
		<?php echo $form->textField($model,'security_id'); ?>
		<?php echo $form->error($model,'security_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'investment_volume'); ?>
		<?php echo $form->textField($model,'investment_volume',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'investment_volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'investment_rate_in'); ?>
		<?php echo $form->textField($model,'investment_rate_in',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'investment_rate_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'investment_rate_out'); ?>
		<?php echo $form->textField($model,'investment_rate_out',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'investment_rate_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ending_ts'); ?>
		<?php echo $form->textField($model,'ending_ts'); ?>
		<?php echo $form->error($model,'ending_ts'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->