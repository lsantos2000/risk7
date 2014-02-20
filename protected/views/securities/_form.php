<?php
/* @var $this SecuritiesController */
/* @var $model Securities */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'securities-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'security_type_id'); ?>
		<?php echo $form->textField($model,'security_type_id'); ?>
		<?php echo $form->error($model,'security_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'security_status_cd'); ?>
		<?php echo $form->textField($model,'security_status_cd',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'security_status_cd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_cd'); ?>
		<?php echo $form->textField($model,'currency_cd',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'currency_cd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_cd'); ?>
		<?php echo $form->textField($model,'country_cd',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'country_cd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'region_id'); ?>
		<?php echo $form->textField($model,'region_id'); ?>
		<?php echo $form->error($model,'region_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exchange_id'); ?>
		<?php echo $form->textField($model,'exchange_id'); ?>
		<?php echo $form->error($model,'exchange_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ticker_cd'); ?>
		<?php echo $form->textField($model,'ticker_cd',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ticker_cd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
		<?php echo $form->error($model,'group_id'); ?>
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