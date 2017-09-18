<?php

namespace common\ddd\rest;

use common\traits\controller\ServiceTrait;
use common\traits\controller\AccessTrait;
use yii\rest\Controller as YiiController;

class Controller extends YiiController {

	use ServiceTrait;
	use AccessTrait;
	
	public function behaviors() {
		$behaviors = parent::behaviors();
		unset($behaviors['rateLimiter']);
		return $behaviors;
	}
	
	public function format() {
		return [];
	}

	public function init() {
		parent::init();
		$this->initService();
		$this->initFormat();
	}
	
	private function initFormat() {
		$format = $this->format();
		if(empty($format)) {
			return;
		}
		$this->serializer = [
			'class' => Serializer::className(),
			'format' => $format,
		];
	}

}
