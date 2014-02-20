<?php
/* @var $this PortfolioSecsController */
/* @var $model PortfolioSecs */

$this->breadcrumbs=array(
	'Portfolio Secs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PortfolioSecs', 'url'=>array('index')),
	array('label'=>'Manage PortfolioSecs', 'url'=>array('admin')),
);
?>

<h1>Create PortfolioSecs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>