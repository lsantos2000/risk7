<?php
/* @var $this SecurityFactsController */
/* @var $model SecurityFacts */

$this->breadcrumbs=array(
	'Security Facts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SecurityFacts', 'url'=>array('index')),
	array('label'=>'Manage SecurityFacts', 'url'=>array('admin')),
);
?>

<h1>Create SecurityFacts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>