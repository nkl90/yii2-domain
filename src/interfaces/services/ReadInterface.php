<?php

namespace yii2lab\domain\interfaces\services;

use yii2lab\domain\data\Query;

interface ReadInterface {
	
	/**
	 * @param $id
	 *
	 * @return boolean
	 */
	public function isExistsById($id);

	/**
	 * @param $condition array
	 *
	 * @return boolean
	 */
	public function isExists($condition);

	/**
	 * @param Query|null $query
	 *
	 * @return \yii2lab\domain\BaseEntity
	 * @throws \yii\web\NotFoundHttpException
	 */
	public function one(Query $query = null);

	/**
	 * @param            $id
	 * @param Query|null $query
	 *
	 * @return \yii2lab\domain\BaseEntity
	 * @throws \yii\web\NotFoundHttpException
	 */
	public function oneById($id, Query $query = null);

	/**
	 * @param Query|null $query
	 *
	 * @return array|null
	 */
	public function all(Query $query = null);

	/**
	 * @param Query|null $query
	 *
	 * @return integer
	 */
	public function count(Query $query = null);
}