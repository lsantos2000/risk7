<?php
/* @var $this PortfolioSecsController */
/* @var $model PortfolioSecs */

$this->breadcrumbs=array(
	'Portfolio Secs'=>array('index'),
	$model->portfolio_sec_id=>array('view','id'=>$model->portfolio_sec_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PortfolioSecs', 'url'=>array('index')),
	array('label'=>'Create PortfolioSecs', 'url'=>array('create')),
	array('label'=>'View PortfolioSecs', 'url'=>array('view', 'id'=>$model->portfolio_sec_id)),
	array('label'=>'Manage PortfolioSecs', 'url'=>array('admin')),
);
?>

<h1>Update PortfolioSecs <?php echo $model->portfolio_sec_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>