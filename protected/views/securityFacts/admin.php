<?php
/* @var $this SecurityFactsController */
/* @var $model SecurityFacts */

$this->breadcrumbs=array(
	'Security Facts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SecurityFacts', 'url'=>array('index')),
	array('label'=>'Create SecurityFacts', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#security-facts-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Security Facts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'security-facts-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'security_fact_id',
		'security_id',
		'duration_cd',
		'fact_source_id',
		'fact_type_id',
		'date_range',
		/*
		'closing_value',
		'opening_value',
		'high_value',
		'low_value',
		'volume',
		'other_facts',
		'user_id',
		'group_id',
		'cr_timestamp',
		'up_timestamp',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
