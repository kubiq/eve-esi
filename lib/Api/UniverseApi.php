<?php
/**
 * UniverseApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.3.1.dev2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * UniverseApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UniverseApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://esi.tech.ccp.is/latest');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return UniverseApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getUniverseStationsStationId
     *
     * Get station information
     *
     * @param int $station_id An Eve station ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\GetUniverseStationsStationIdOk
     */
    public function getUniverseStationsStationId($station_id, $datasource = null)
    {
        list($response) = $this->getUniverseStationsStationIdWithHttpInfo($station_id, $datasource);
        return $response;
    }

    /**
     * Operation getUniverseStationsStationIdWithHttpInfo
     *
     * Get station information
     *
     * @param int $station_id An Eve station ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\GetUniverseStationsStationIdOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniverseStationsStationIdWithHttpInfo($station_id, $datasource = null)
    {
        // verify the required parameter 'station_id' is set
        if ($station_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $station_id when calling getUniverseStationsStationId');
        }
        // parse inputs
        $resourcePath = "/universe/stations/{station_id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($station_id !== null) {
            $resourcePath = str_replace(
                "{" . "station_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($station_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetUniverseStationsStationIdOk',
                '/universe/stations/{station_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetUniverseStationsStationIdOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseStationsStationIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseStationsStationIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUniverseStructures
     *
     * List all public structures
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return int[]
     */
    public function getUniverseStructures($datasource = null)
    {
        list($response) = $this->getUniverseStructuresWithHttpInfo($datasource);
        return $response;
    }

    /**
     * Operation getUniverseStructuresWithHttpInfo
     *
     * List all public structures
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of int[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniverseStructuresWithHttpInfo($datasource = null)
    {
        // parse inputs
        $resourcePath = "/universe/structures/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'int[]',
                '/universe/structures/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'int[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseStructuresInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUniverseStructuresStructureId
     *
     * Get structure information
     *
     * @param int $structure_id An Eve structure ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\GetUniverseStructuresStructureIdOk
     */
    public function getUniverseStructuresStructureId($structure_id, $datasource = null)
    {
        list($response) = $this->getUniverseStructuresStructureIdWithHttpInfo($structure_id, $datasource);
        return $response;
    }

    /**
     * Operation getUniverseStructuresStructureIdWithHttpInfo
     *
     * Get structure information
     *
     * @param int $structure_id An Eve structure ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\GetUniverseStructuresStructureIdOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniverseStructuresStructureIdWithHttpInfo($structure_id, $datasource = null)
    {
        // verify the required parameter 'structure_id' is set
        if ($structure_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $structure_id when calling getUniverseStructuresStructureId');
        }
        // parse inputs
        $resourcePath = "/universe/structures/{structure_id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($structure_id !== null) {
            $resourcePath = str_replace(
                "{" . "structure_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($structure_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetUniverseStructuresStructureIdOk',
                '/universe/structures/{structure_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetUniverseStructuresStructureIdOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseStructuresStructureIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseStructuresStructureIdForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseStructuresStructureIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseStructuresStructureIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUniverseSystemsSystemId
     *
     * Get solar system information
     *
     * @param int $system_id An Eve solar system ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\GetUniverseSystemsSystemIdOk
     */
    public function getUniverseSystemsSystemId($system_id, $datasource = null)
    {
        list($response) = $this->getUniverseSystemsSystemIdWithHttpInfo($system_id, $datasource);
        return $response;
    }

    /**
     * Operation getUniverseSystemsSystemIdWithHttpInfo
     *
     * Get solar system information
     *
     * @param int $system_id An Eve solar system ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\GetUniverseSystemsSystemIdOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniverseSystemsSystemIdWithHttpInfo($system_id, $datasource = null)
    {
        // verify the required parameter 'system_id' is set
        if ($system_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $system_id when calling getUniverseSystemsSystemId');
        }
        // parse inputs
        $resourcePath = "/universe/systems/{system_id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($system_id !== null) {
            $resourcePath = str_replace(
                "{" . "system_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($system_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetUniverseSystemsSystemIdOk',
                '/universe/systems/{system_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetUniverseSystemsSystemIdOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseSystemsSystemIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseSystemsSystemIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseSystemsSystemIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUniverseTypesTypeId
     *
     * Get type information
     *
     * @param int $type_id An Eve item type ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\GetUniverseTypesTypeIdOk
     */
    public function getUniverseTypesTypeId($type_id, $datasource = null)
    {
        list($response) = $this->getUniverseTypesTypeIdWithHttpInfo($type_id, $datasource);
        return $response;
    }

    /**
     * Operation getUniverseTypesTypeIdWithHttpInfo
     *
     * Get type information
     *
     * @param int $type_id An Eve item type ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\GetUniverseTypesTypeIdOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniverseTypesTypeIdWithHttpInfo($type_id, $datasource = null)
    {
        // verify the required parameter 'type_id' is set
        if ($type_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type_id when calling getUniverseTypesTypeId');
        }
        // parse inputs
        $resourcePath = "/universe/types/{type_id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($type_id !== null) {
            $resourcePath = str_replace(
                "{" . "type_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($type_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetUniverseTypesTypeIdOk',
                '/universe/types/{type_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetUniverseTypesTypeIdOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseTypesTypeIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseTypesTypeIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseTypesTypeIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postUniverseNames
     *
     * Get names and categories for a set of ID's
     *
     * @param \Swagger\Client\Model\PostUniverseNamesIds $ids The ids to resolve (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PostUniverseNames200Ok[]
     */
    public function postUniverseNames($ids, $datasource = null)
    {
        list($response) = $this->postUniverseNamesWithHttpInfo($ids, $datasource);
        return $response;
    }

    /**
     * Operation postUniverseNamesWithHttpInfo
     *
     * Get names and categories for a set of ID's
     *
     * @param \Swagger\Client\Model\PostUniverseNamesIds $ids The ids to resolve (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PostUniverseNames200Ok[], HTTP status code, HTTP response headers (array of strings)
     */
    public function postUniverseNamesWithHttpInfo($ids, $datasource = null)
    {
        // verify the required parameter 'ids' is set
        if ($ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ids when calling postUniverseNames');
        }
        // parse inputs
        $resourcePath = "/universe/names/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($ids)) {
            $_tempBody = $ids;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\PostUniverseNames200Ok[]',
                '/universe/names/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PostUniverseNames200Ok[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PostUniverseNames200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PostUniverseNamesNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PostUniverseNamesInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}