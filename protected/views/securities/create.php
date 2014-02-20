<?php
/* @var $this SecuritiesController */
/* @var $model Securities */

$this->breadcrumbs=array(
	'Securities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Securities', 'url'=>array('index')),
	array('label'=>'Manage Securities', 'url'=>array('admin')),
);
?>

<h1>Create Securities</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>