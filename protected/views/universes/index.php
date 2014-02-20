<?php
/* @var $this UniversesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Universes',
);

$this->menu=array(
	array('label'=>'Create Universes', 'url'=>array('create')),
	array('label'=>'Manage Universes', 'url'=>array('admin')),
);
?>

<h1>Universes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
