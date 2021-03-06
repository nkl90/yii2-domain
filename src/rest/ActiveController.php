<?php

namespace yii2lab\domain\rest;

use Yii;

class ActiveController extends Controller {
	
	public $usePagination = true;
	
	public function actions() {
		return [
			'index' => [
				'class' => 'yii2lab\domain\rest\IndexAction',
				'serviceMethod' => !empty($this->usePagination) ? 'getDataProvider' : 'findAll',
			],
			'create' => [
				'class' => 'yii2lab\domain\rest\CreateAction',
			],
			'view' => [
				'class' => 'yii2lab\domain\rest\ViewAction',
			],
			'update' => [
				'class' => 'yii2lab\domain\rest\UpdateAction',
			],
			'delete' => [
				'class' => 'yii2lab\domain\rest\DeleteAction',
			],
		];
	}
	
	protected function verbs() {
		return [
			'index' => ['GET', 'HEAD'],
			'view' => ['GET', 'HEAD'],
			'create' => ['POST'],
			'update' => ['PUT', 'PATCH'],
			'delete' => ['DELETE'],
			'options' => ['OPTIONS'],
		];
	}
	
	public function actionOptions() {
		if(Yii::$app->getRequest()->getMethod() !== 'OPTIONS') {
			Yii::$app->getResponse()->setStatusCode(405);
		}
		//Yii::$app->getResponse()->getHeaders()->set('Allow',['DELETE']);
	}
}
