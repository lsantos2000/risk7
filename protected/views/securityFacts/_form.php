<?php
/* @var $this SecurityFactsController */
/* @var $model SecurityFacts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'security-facts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'security_id'); ?>
		<?php echo $form->textField($model,'security_id'); ?>
		<?php echo $form->error($model,'security_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration_cd'); ?>
		<?php echo $form->textField($model,'duration_cd',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'duration_cd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fact_source_id'); ?>
		<?php echo $form->textField($model,'fact_source_id'); ?>
		<?php echo $form->error($model,'fact_source_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fact_type_id'); ?>
		<?php echo $form->textField($model,'fact_type_id'); ?>
		<?php echo $form->error($model,'fact_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_range'); ?>
		<?php echo $form->textField($model,'date_range'); ?>
		<?php echo $form->error($model,'date_range'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'closing_value'); ?>
		<?php echo $form->textField($model,'closing_value',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'closing_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opening_value'); ?>
		<?php echo $form->textField($model,'opening_value',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'opening_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'high_value'); ?>
		<?php echo $form->textField($model,'high_value',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'high_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'low_value'); ?>
		<?php echo $form->textField($model,'low_value',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'low_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'volume'); ?>
		<?php echo $form->textField($model,'volume'); ?>
		<?php echo $form->error($model,'volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_facts'); ?>
		<?php echo $form->textField($model,'other_facts'); ?>
		<?php echo $form->error($model,'other_facts'); ?>
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