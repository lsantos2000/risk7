<?php
/* @var $this AssetAllocationModelsController */
/* @var $model AssetAllocationModels */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'aa_model_uuid'); ?>
		<?php echo $form->textField($model,'aa_model_uuid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aa_model_name'); ?>
		<?php echo $form->textField($model,'aa_model_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aa_model_description'); ?>
		<?php echo $form->textArea($model,'aa_model_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excpected_ror'); ?>
		<?php echo $form->textField($model,'excpected_ror',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'risk_factor'); ?>
		<?php echo $form->textField($model,'risk_factor',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_uuid'); ?>
		<?php echo $form->textField($model,'user_uuid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_uuid'); ?>
		<?php echo $form->textField($model,'group_uuid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cr_timestamp'); ?>
		<?php echo $form->textField($model,'cr_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'up_timestamp'); ?>
		<?php echo $form->textField($model,'up_timestamp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->