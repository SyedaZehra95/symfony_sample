<?php namespace Revel\Api;

use Exception;
use Psr\Http\Message\ResponseInterface;

class Response {

	/** @var ResponseInterface */
	private $_response;

	/** @var mixed */
	private $_body;

	/**
	 * Response constructor.
	 *
	 * @param ResponseInterface $response The response generated by Guzzle that this instance wraps.
	 */
	public function __construct(ResponseInterface $response) {
		$this->_response = $response;
		$this->_body = $response->getBody()->getContents();
	}

	/**
	 * The raw Guzzle response.
	 *
	 * @return ResponseInterface
	 */
	public function raw() {
		return $this->_response;
	}

	/**
	 * Returns the status code associated with this response.
	 *
	 * @return int
	 */
	public function status() {
		return $this->_response->getStatusCode();
	}

	/**
	 * Returns the JSON-decoded data from the body of this response.
	 *
	 * @return mixed
	 */
	public function data() {
		try {
			return json_decode($this->_body);
		} catch (Exception $exception) {
			return null;
		}
	}

	/**
	 * @return mixed
	 */
	public function meta() {
		try {
			return $this->data()->meta;
		} catch (Exception $exception) {
			return [];
		}
	}

	/**
	 * @return array
	 */
	public function objects() {
		try {
			return $this->data()->objects;
		} catch (Exception $exception) {
			return [];
		}
	}

}