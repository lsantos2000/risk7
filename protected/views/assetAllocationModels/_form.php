<?php
/* @var $this AssetAllocationModelsController */
/* @var $model AssetAllocationModels */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asset-allocation-models-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'aa_model_uuid'); ?>
		<?php echo $form->textField($model,'aa_model_uuid'); ?>
		<?php echo $form->error($model,'aa_model_uuid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aa_model_name'); ?>
		<?php echo $form->textField($model,'aa_model_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'aa_model_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aa_model_description'); ?>
		<?php echo $form->textArea($model,'aa_model_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'aa_model_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excpected_ror'); ?>
		<?php echo $form->textField($model,'excpected_ror',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'excpected_ror'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'risk_factor'); ?>
		<?php echo $form->textField($model,'risk_factor',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'risk_factor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_uuid'); ?>
		<?php echo $form->textField($model,'user_uuid'); ?>
		<?php echo $form->error($model,'user_uuid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group_uuid'); ?>
		<?php echo $form->textField($model,'group_uuid'); ?>
		<?php echo $form->error($model,'group_uuid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cr_timestamp'); ?>
		<?php echo $form->textField($model,'cr_timestamp'); ?>
		<?php echo $form->error($model,'cr_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'up_timestamp'); ?>
		<?php echo $form->textField($model,'up_timestamp'); ?>
		<?php echo $form->error($model,'up_timestamp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->