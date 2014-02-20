<?php
/* @var $this PortfolioSecsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Portfolio Secs',
);

$this->menu=array(
	array('label'=>'Create PortfolioSecs', 'url'=>array('create')),
	array('label'=>'Manage PortfolioSecs', 'url'=>array('admin')),
);
?>

<h1>Portfolio Secs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
