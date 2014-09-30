<?php
namespace JonjoMcKay\ApiProblem;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ApiProblemResponse
 * @package JonjoMcKay\ApiProblem
 */
class ApiProblemResponse extends JsonResponse
{

    /**
     * @param ApiProblem $apiProblem
     */
    public function __construct(ApiProblem $apiProblem)
	{
		parent::__construct($apiProblem->toArray(), $apiProblem->status);
	}
}