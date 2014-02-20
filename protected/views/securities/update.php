<?php
/* @var $this SecuritiesController */
/* @var $model Securities */

$this->breadcrumbs=array(
	'Securities'=>array('index'),
	$model->name=>array('view','id'=>$model->security_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Securities', 'url'=>array('index')),
	array('label'=>'Create Securities', 'url'=>array('create')),
	array('label'=>'View Securities', 'url'=>array('view', 'id'=>$model->security_id)),
	array('label'=>'Manage Securities', 'url'=>array('admin')),
);
?>

<h1>Update Securities <?php echo $model->security_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>