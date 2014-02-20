<?php
/* @var $this SecuritiesController */
/* @var $model Securities */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'security_id'); ?>
		<?php echo $form->textField($model,'security_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'security_type_id'); ?>
		<?php echo $form->textField($model,'security_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'security_status_cd'); ?>
		<?php echo $form->textField($model,'security_status_cd',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currency_cd'); ?>
		<?php echo $form->textField($model,'currency_cd',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country_cd'); ?>
		<?php echo $form->textField($model,'country_cd',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'region_id'); ?>
		<?php echo $form->textField($model,'region_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exchange_id'); ?>
		<?php echo $form->textField($model,'exchange_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ticker_cd'); ?>
		<?php echo $form->textField($model,'ticker_cd',array('size'=>60,'maxlength'=>255)); ?>
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