<?php
/* @var $this PortfoliosController */
/* @var $model Portfolios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'portfolios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'portfolio_status_cd'); ?>
		<?php echo $form->textField($model,'portfolio_status_cd',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'portfolio_status_cd'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->