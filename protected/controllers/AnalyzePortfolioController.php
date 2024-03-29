<?php

class AnalyzePortfolioController extends Controller
{
	public function actionAddBenchmark()
	{
		$this->render('addBenchmark');
	}

	public function actionAnalyze()
	{
		$this->render('analyze');
	}

	public function actionCreate()
	{
		$this->render('create');
	}

	public function actionDelete()
	{
		$this->render('delete');
	}

	public function actionDeleteBenchmark()
	{
		$this->render('deleteBenchmark');
	}

	public function actionExport()
	{
		$this->render('export');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionList()
	{
		$this->render('list');
	}

	public function actionListBenchmark()
	{
		$this->render('listBenchmark');
	}

	public function actionReload()
	{
		$this->render('reload');
	}

	public function actionSave()
	{
		$this->render('save');
	}

	public function actionUpdate()
	{
		$this->render('update');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}