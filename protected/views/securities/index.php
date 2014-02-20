<?php
/* @var $this SecuritiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Securities',
);

$this->menu=array(
	array('label'=>'Create Securities', 'url'=>array('create')),
	array('label'=>'Manage Securities', 'url'=>array('admin')),
);
?>

<h1>Securities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
