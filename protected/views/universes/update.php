<?php
/* @var $this UniversesController */
/* @var $model Universes */

$this->breadcrumbs=array(
	'Universes'=>array('index'),
	$model->universe_id=>array('view','id'=>$model->universe_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Universes', 'url'=>array('index')),
	array('label'=>'Create Universes', 'url'=>array('create')),
	array('label'=>'View Universes', 'url'=>array('view', 'id'=>$model->universe_id)),
	array('label'=>'Manage Universes', 'url'=>array('admin')),
);
?>

<h1>Update Universes <?php echo $model->universe_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>