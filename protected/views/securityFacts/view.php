<?php
/* @var $this SecurityFactsController */
/* @var $model SecurityFacts */

$this->breadcrumbs=array(
	'Security Facts'=>array('index'),
	$model->security_fact_id,
);

$this->menu=array(
	array('label'=>'List SecurityFacts', 'url'=>array('index')),
	array('label'=>'Create SecurityFacts', 'url'=>array('create')),
	array('label'=>'Update SecurityFacts', 'url'=>array('update', 'id'=>$model->security_fact_id)),
	array('label'=>'Delete SecurityFacts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->security_fact_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SecurityFacts', 'url'=>array('admin')),
);
?>

<h1>View SecurityFacts #<?php echo $model->security_fact_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'security_fact_id',
		'security_id',
		'duration_cd',
		'fact_source_id',
		'fact_type_id',
		'date_range',
		'closing_value',
		'opening_value',
		'high_value',
		'low_value',
		'volume',
		'other_facts',
		'user_id',
		'group_id',
		'cr_timestamp',
		'up_timestamp',
	),
)); ?>
