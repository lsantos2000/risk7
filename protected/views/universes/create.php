<?php
/* @var $this UniversesController */
/* @var $model Universes */

$this->breadcrumbs=array(
	'Universes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Universes', 'url'=>array('index')),
	array('label'=>'Manage Universes', 'url'=>array('admin')),
);
?>

<h1>Create Universes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>