<?php
/* @var $this AssetAllocationModelsController */
/* @var $model AssetAllocationModels */

$this->breadcrumbs=array(
	'Asset Allocation Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AssetAllocationModels', 'url'=>array('index')),
	array('label'=>'Manage AssetAllocationModels', 'url'=>array('admin')),
);
?>

<h1>Create AssetAllocationModels</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>