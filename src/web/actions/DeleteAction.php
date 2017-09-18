<?php

namespace common\ddd\web\actions;

use common\ddd\base\Action;
use common\widgets\Alert;
use Yii;

class DeleteAction extends Action {
	
	public $serviceMethod = 'deleteById';
	
	public function run($id) {
		$method = $this->serviceMethod;
		$this->service->$method($id);
		Yii::$app->notify->flash->send(['main', 'delete_success'], Alert::TYPE_SUCCESS);
		return $this->redirect($this->baseUrl);
	}
}
