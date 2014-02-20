<?php
/* @var $this SecurityFactsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Security Facts',
);

$this->menu=array(
	array('label'=>'Create SecurityFacts', 'url'=>array('create')),
	array('label'=>'Manage SecurityFacts', 'url'=>array('admin')),
);
?>

<h1>Security Facts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
