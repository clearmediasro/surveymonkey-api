<?php
/*
* This file is part of the surveymonkey-api package.
*
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*
*/

namespace Spliced\SurveyMonkey\Api;

/**
* Common API Functions
*/
trait CommonTrait
{
	/**
	* isResourceAvailable
	*
	* @param string $uri - URI to endpoint to query
	* @return see Client::sendRequest
	*/
	public function isResourceAvailable($uri)
	{
		return $this->sendRequest(
			$this->createRequest('HEAD', $uri)
		);
	}

	/**
	* isResourceAvailable
	*
	* @param string $uri - URI to endpoint to query
	* @return see Client::sendRequest
	*/
	public function getResourceOptions($uri)
	{
		return $this->sendRequest(
			$this->createRequest('OPTIONS', $uri)
		);
	}

}