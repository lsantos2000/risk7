<?php
/* @var $this AssetAllocationModelsController */
/* @var $model AssetAllocationModels */

$this->breadcrumbs=array(
	'Asset Allocation Models'=>array('index'),
	$model->aa_model_uuid=>array('view','id'=>$model->aa_model_uuid),
	'Update',
);

$this->menu=array(
	array('label'=>'List AssetAllocationModels', 'url'=>array('index')),
	array('label'=>'Create AssetAllocationModels', 'url'=>array('create')),
	array('label'=>'View AssetAllocationModels', 'url'=>array('view', 'id'=>$model->aa_model_uuid)),
	array('label'=>'Manage AssetAllocationModels', 'url'=>array('admin')),
);
?>

<h1>Update AssetAllocationModels <?php echo $model->aa_model_uuid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>