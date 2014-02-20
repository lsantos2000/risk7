<?php
/* @var $this PortfolioSecsController */
/* @var $model PortfolioSecs */

$this->breadcrumbs=array(
	'Portfolio Secs'=>array('index'),
	$model->portfolio_sec_id,
);

$this->menu=array(
	array('label'=>'List PortfolioSecs', 'url'=>array('index')),
	array('label'=>'Create PortfolioSecs', 'url'=>array('create')),
	array('label'=>'Update PortfolioSecs', 'url'=>array('update', 'id'=>$model->portfolio_sec_id)),
	array('label'=>'Delete PortfolioSecs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->portfolio_sec_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PortfolioSecs', 'url'=>array('admin')),
);
?>

<h1>View PortfolioSecs #<?php echo $model->portfolio_sec_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'portfolio_sec_id',
		'portfolio_id',
		'starting_ts',
		'security_id',
		'investment_volume',
		'investment_rate_in',
		'investment_rate_out',
		'ending_ts',
	),
)); ?>
