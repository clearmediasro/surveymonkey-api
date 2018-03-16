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
* Survey API Functions
*
* @see https://developer.surveymonkey.com/api/v3/#surveys-pages-and-questions
*/
trait RollupsTrait
{
  
	/**
	* getSurvey - Get rollups on a survey
	*
	* @param int $surveyId - See survey ID to use
	* @param bool $includePages - Include page details or not
	*
	* @return @see Client::sendRequest
	*/
	public function getSurveyRollups($surveyId)
	{
		return $this->sendRequest(
			$this->createRequest('GET', sprintf('surveys/%d/rollups', $surveyId))
		);
	}
 
}