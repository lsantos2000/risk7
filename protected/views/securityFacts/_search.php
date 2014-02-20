<?php
/* @var $this SecurityFactsController */
/* @var $model SecurityFacts */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'security_fact_id'); ?>
		<?php echo $form->textField($model,'security_fact_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'security_id'); ?>
		<?php echo $form->textField($model,'security_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duration_cd'); ?>
		<?php echo $form->textField($model,'duration_cd',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fact_source_id'); ?>
		<?php echo $form->textField($model,'fact_source_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fact_type_id'); ?>
		<?php echo $form->textField($model,'fact_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_range'); ?>
		<?php echo $form->textField($model,'date_range'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'closing_value'); ?>
		<?php echo $form->textField($model,'closing_value',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opening_value'); ?>
		<?php echo $form->textField($model,'opening_value',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'high_value'); ?>
		<?php echo $form->textField($model,'high_value',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'low_value'); ?>
		<?php echo $form->textField($model,'low_value',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'volume'); ?>
		<?php echo $form->textField($model,'volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other_facts'); ?>
		<?php echo $form->textField($model,'other_facts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
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