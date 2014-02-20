<?php
/* @var $this SecuritiesController */
/* @var $model Securities */

$this->breadcrumbs=array(
	'Securities'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Securities', 'url'=>array('index')),
	array('label'=>'Create Securities', 'url'=>array('create')),
	array('label'=>'Update Securities', 'url'=>array('update', 'id'=>$model->security_id)),
	array('label'=>'Delete Securities', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->security_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Securities', 'url'=>array('admin')),
);
?>

<h1>View Securities #<?php echo $model->security_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'security_id',
		'name',
		'security_type_id',
		'security_status_cd',
		'currency_cd',
		'country_cd',
		'region_id',
		'exchange_id',
		'ticker_cd',
		'user_id',
		'group_id',
		'cr_timestamp',
		'up_timestamp',
	),
)); ?>
