<?php
/* @var $this AssetAllocationModelsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asset Allocation Models',
);

$this->menu=array(
	array('label'=>'Create AssetAllocationModels', 'url'=>array('create')),
	array('label'=>'Manage AssetAllocationModels', 'url'=>array('admin')),
);
?>

<h1>Asset Allocation Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
