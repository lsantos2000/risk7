<?php
/* @var $this UniversesController */
/* @var $model Universes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'universe_id'); ?>
		<?php echo $form->textField($model,'universe_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'univ_status_cd'); ?>
		<?php echo $form->textField($model,'univ_status_cd',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->