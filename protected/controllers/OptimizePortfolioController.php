<?php

class OptimizePortfolioController extends Controller
{
	public function actionCreate()
	{
		$this->render('create');
	}

	public function actionGetRiskProfile()
	{
		$this->render('getRiskProfile');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionSelect()
	{
		$this->render('select');
	}

	public function actionSelectPortfolio()
	{
		$this->render('selectPortfolio');
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