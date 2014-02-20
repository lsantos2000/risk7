<?php
/* @var $this UniversesController */
/* @var $model Universes */

$this->breadcrumbs=array(
	'Universes'=>array('index'),
	$model->universe_id,
);

$this->menu=array(
	array('label'=>'List Universes', 'url'=>array('index')),
	array('label'=>'Create Universes', 'url'=>array('create')),
	array('label'=>'Update Universes', 'url'=>array('update', 'id'=>$model->universe_id)),
	array('label'=>'Delete Universes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->universe_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Universes', 'url'=>array('admin')),
);
?>

<h1>View Universes #<?php echo $model->universe_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'universe_id',
		'univ_status_cd',
	),
)); ?>
