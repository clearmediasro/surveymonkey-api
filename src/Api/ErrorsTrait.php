<?php
/*
* This file is part of the surveymonkey-api package.
*
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*
*/

namespace ClearMedia\SurveyMonkey\Api;

/**
* Webhook API Functions
*
* @see https://developer.surveymonkey.com/api/v3/#errors
*/
trait ErrorsTrait
{
	/**
	* getErrors
	*
	* @param array $filters - Available filters: page, per_page
	*
	* @return @see Client::sendRequest
	*/
	public function getErrors(array $filters = [])
	{
		return $this->sendRequest(
			$this->createRequest('GET', 'errors', [ 
				'query' => $filters 
			])
		);
	}

	/**
	* getError
	*
	* @param int $errorId
	*
	* @return @see Client::sendRequest
	*/
	public function getError($errorId)
	{
		return $this->sendRequest(
			$this->createRequest('GET', sprintf('errors/%d', $errorId))
		);
	}

}
