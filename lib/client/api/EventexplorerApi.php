<?php
/**
 * EventexplorerApi
 * PHP version 5
 *
 * @category Class
 * @package  Rakam
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rakam API Documentation
 *
 * An analytics platform API that lets you create your own analytics services.
 *
 * OpenAPI spec version: 0.5
 * Contact: contact@rakam.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace client.api;

use \Rakam\Configuration;
use \Rakam\ApiClient;
use \Rakam\ApiException;
use \Rakam\ObjectSerializer;

/**
 * EventexplorerApi Class Doc Comment
 *
 * @category Class
 * @package  Rakam
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventexplorerApi
{

    /**
     * API Client
     *
     * @var \Rakam\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Rakam\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Rakam\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://app.rakam.io/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Rakam\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Rakam\ApiClient $apiClient set the API client
     *
     * @return EventexplorerApi
     */
    public function setApiClient(\Rakam\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation analyzeEvents
     *
     * Perform simple query on event data
     *
     * @param \client.model\AnalyzeRequest $analyze_request  (required)
     * @return \client.model\QueryResult
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function analyzeEvents($analyze_request)
    {
        list($response) = $this->analyzeEventsWithHttpInfo($analyze_request);
        return $response;
    }

    /**
     * Operation analyzeEventsWithHttpInfo
     *
     * Perform simple query on event data
     *
     * @param \client.model\AnalyzeRequest $analyze_request  (required)
     * @return Array of \client.model\QueryResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function analyzeEventsWithHttpInfo($analyze_request)
    {
        // verify the required parameter 'analyze_request' is set
        if ($analyze_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $analyze_request when calling analyzeEvents');
        }
        // parse inputs
        $resourcePath = "/event-explorer/analyze";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($analyze_request)) {
            $_tempBody = $analyze_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('read_key');
        if (strlen($apiKey) !== 0) {
            $headerParams['read_key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\client.model\QueryResult',
                '/event-explorer/analyze'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\client.model\QueryResult', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\QueryResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\ErrorMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createPrecomputedTable
     *
     * Create Pre-computed table
     *
     * @param \client.model\CreatePrecomputedTable $create_precomputed_table  (required)
     * @return \client.model\PrecalculatedTable
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function createPrecomputedTable($create_precomputed_table)
    {
        list($response) = $this->createPrecomputedTableWithHttpInfo($create_precomputed_table);
        return $response;
    }

    /**
     * Operation createPrecomputedTableWithHttpInfo
     *
     * Create Pre-computed table
     *
     * @param \client.model\CreatePrecomputedTable $create_precomputed_table  (required)
     * @return Array of \client.model\PrecalculatedTable, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function createPrecomputedTableWithHttpInfo($create_precomputed_table)
    {
        // verify the required parameter 'create_precomputed_table' is set
        if ($create_precomputed_table === null) {
            throw new \InvalidArgumentException('Missing the required parameter $create_precomputed_table when calling createPrecomputedTable');
        }
        // parse inputs
        $resourcePath = "/event-explorer/pre_calculate";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($create_precomputed_table)) {
            $_tempBody = $create_precomputed_table;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('master_key');
        if (strlen($apiKey) !== 0) {
            $headerParams['master_key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\client.model\PrecalculatedTable',
                '/event-explorer/pre_calculate'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\client.model\PrecalculatedTable', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\PrecalculatedTable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\ErrorMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getEventStatistics
     *
     * Event statistics
     *
     * @param \client.model\EventExplorerGetEventStatistics $event_explorer_get_event_statistics  (required)
     * @return \client.model\QueryResult
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function getEventStatistics($event_explorer_get_event_statistics)
    {
        list($response) = $this->getEventStatisticsWithHttpInfo($event_explorer_get_event_statistics);
        return $response;
    }

    /**
     * Operation getEventStatisticsWithHttpInfo
     *
     * Event statistics
     *
     * @param \client.model\EventExplorerGetEventStatistics $event_explorer_get_event_statistics  (required)
     * @return Array of \client.model\QueryResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function getEventStatisticsWithHttpInfo($event_explorer_get_event_statistics)
    {
        // verify the required parameter 'event_explorer_get_event_statistics' is set
        if ($event_explorer_get_event_statistics === null) {
            throw new \InvalidArgumentException('Missing the required parameter $event_explorer_get_event_statistics when calling getEventStatistics');
        }
        // parse inputs
        $resourcePath = "/event-explorer/statistics";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($event_explorer_get_event_statistics)) {
            $_tempBody = $event_explorer_get_event_statistics;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('read_key');
        if (strlen($apiKey) !== 0) {
            $headerParams['read_key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\client.model\QueryResult',
                '/event-explorer/statistics'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\client.model\QueryResult', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\QueryResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\ErrorMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getExtraDimensions
     *
     * Event statistics
     *
     * @return map[string,string[]]
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function getExtraDimensions()
    {
        list($response) = $this->getExtraDimensionsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getExtraDimensionsWithHttpInfo
     *
     * Event statistics
     *
     * @return Array of map[string,string[]], HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function getExtraDimensionsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/event-explorer/extra_dimensions";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('read_key');
        if (strlen($apiKey) !== 0) {
            $headerParams['read_key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'map[string,string[]]',
                '/event-explorer/extra_dimensions'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'map[string,string[]]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'map[string,string[]]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\ErrorMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
