<?php
/* @var $this SecurityFactsController */
/* @var $model SecurityFacts */

$this->breadcrumbs=array(
	'Security Facts'=>array('index'),
	$model->security_fact_id=>array('view','id'=>$model->security_fact_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SecurityFacts', 'url'=>array('index')),
	array('label'=>'Create SecurityFacts', 'url'=>array('create')),
	array('label'=>'View SecurityFacts', 'url'=>array('view', 'id'=>$model->security_fact_id)),
	array('label'=>'Manage SecurityFacts', 'url'=>array('admin')),
);
?>

<h1>Update SecurityFacts <?php echo $model->security_fact_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>