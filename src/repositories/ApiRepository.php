<?php

namespace yii2lab\domain\repositories;

use yii\base\InvalidConfigException;
use yii2lab\domain\entities\RequestEntity;
use yii2lab\misc\enums\HttpMethodEnum;

class ApiRepository extends BaseApiRepository {
	
	public $baseUrl;
	
	public function getBaseUrl() {
		if(empty($this->baseUrl)) {
			throw new InvalidConfigException('Not setted baseUrl');
		}
		return $this->baseUrl;
	}
	
	public function get($uri, $data = [], $headers = [], $options = []) {
		$request = new RequestEntity();
		$request->method = HttpMethodEnum::GET;
		$request->uri = $uri;
		$request->data = $data;
		$request->headers = $headers;
		$request->options = $options;
		$response = $this->send($request);
		return $response;
	}
	
	public function post($uri, $data = [], $headers = [], $options = []) {
		$request = new RequestEntity();
		$request->method = HttpMethodEnum::POST;
		$request->uri = $uri;
		$request->data = $data;
		$request->headers = $headers;
		$request->options = $options;
		$response = $this->send($request);
		return $response;
	}
	
	public function put($uri, $data = [], $headers = [], $options = []) {
		$request = new RequestEntity();
		$request->method = HttpMethodEnum::PUT;
		$request->uri = $uri;
		$request->data = $data;
		$request->headers = $headers;
		$request->options = $options;
		$response = $this->send($request);
		return $response;
	}
	
	public function del($uri, $data = [], $headers = [], $options = []) {
		$request = new RequestEntity();
		$request->method = HttpMethodEnum::DELETE;
		$request->uri = $uri;
		$request->data = $data;
		$request->headers = $headers;
		$request->options = $options;
		$response = $this->send($request);
		return $response;
	}
	
}