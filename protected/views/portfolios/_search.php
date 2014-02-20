<?php
/* @var $this PortfoliosController */
/* @var $model Portfolios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'portfolio_id'); ?>
		<?php echo $form->textField($model,'portfolio_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'portfolio_status_cd'); ?>
		<?php echo $form->textField($model,'portfolio_status_cd',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->