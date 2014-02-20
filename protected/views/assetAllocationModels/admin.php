<?php
/* @var $this AssetAllocationModelsController */
/* @var $model AssetAllocationModels */

$this->breadcrumbs=array(
	'Asset Allocation Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AssetAllocationModels', 'url'=>array('index')),
	array('label'=>'Create AssetAllocationModels', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#asset-allocation-models-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Asset Allocation Models</h1>

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
	'id'=>'asset-allocation-models-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'aa_model_uuid',
		'aa_model_name',
		'aa_model_description',
		'excpected_ror',
		'risk_factor',
		'user_uuid',
		/*
		'group_uuid',
		'cr_timestamp',
		'up_timestamp',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
