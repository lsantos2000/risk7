<?php
/* @var $this PortfolioSecsController */
/* @var $model PortfolioSecs */

$this->breadcrumbs=array(
	'Portfolio Secs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PortfolioSecs', 'url'=>array('index')),
	array('label'=>'Create PortfolioSecs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#portfolio-secs-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Portfolio Secs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'portfolio-secs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'portfolio_sec_id',
		'portfolio_id',
		'starting_ts',
		'security_id',
		'investment_volume',
		'investment_rate_in',
		/*
		'investment_rate_out',
		'ending_ts',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
