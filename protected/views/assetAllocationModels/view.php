<?php
/* @var $this AssetAllocationModelsController */
/* @var $model AssetAllocationModels */

$this->breadcrumbs=array(
	'Asset Allocation Models'=>array('index'),
	$model->aa_model_uuid,
);

$this->menu=array(
	array('label'=>'List AssetAllocationModels', 'url'=>array('index')),
	array('label'=>'Create AssetAllocationModels', 'url'=>array('create')),
	array('label'=>'Update AssetAllocationModels', 'url'=>array('update', 'id'=>$model->aa_model_uuid)),
	array('label'=>'Delete AssetAllocationModels', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->aa_model_uuid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AssetAllocationModels', 'url'=>array('admin')),
);
?>

<h1>View AssetAllocationModels #<?php echo $model->aa_model_uuid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'aa_model_uuid',
		'aa_model_name',
		'aa_model_description',
		'excpected_ror',
		'risk_factor',
		'user_uuid',
		'group_uuid',
		'cr_timestamp',
		'up_timestamp',
	),
)); ?>
