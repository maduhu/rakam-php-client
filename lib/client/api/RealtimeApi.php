<?php
/**
 * RealtimeApi
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
 * RealtimeApi Class Doc Comment
 *
 * @category Class
 * @package  Rakam
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RealtimeApi
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
     * @return RealtimeApi
     */
    public function setApiClient(\Rakam\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createTable
     *
     * Create report
     *
     * @param \client.model\RealTimeReport $real_time_report  (required)
     * @return \client.model\SuccessMessage
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function createTable($real_time_report)
    {
        list($response) = $this->createTableWithHttpInfo($real_time_report);
        return $response;
    }

    /**
     * Operation createTableWithHttpInfo
     *
     * Create report
     *
     * @param \client.model\RealTimeReport $real_time_report  (required)
     * @return Array of \client.model\SuccessMessage, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function createTableWithHttpInfo($real_time_report)
    {
        // verify the required parameter 'real_time_report' is set
        if ($real_time_report === null) {
            throw new \InvalidArgumentException('Missing the required parameter $real_time_report when calling createTable');
        }
        // parse inputs
        $resourcePath = "/realtime/create";
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
        if (isset($real_time_report)) {
            $_tempBody = $real_time_report;
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
                '\client.model\SuccessMessage',
                '/realtime/create'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\client.model\SuccessMessage', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\SuccessMessage', $e->getResponseHeaders());
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
     * Operation deleteTable
     *
     * Delete report
     *
     * @param \client.model\RealtimeDeleteTable $realtime_delete_table  (required)
     * @return \client.model\SuccessMessage
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function deleteTable($realtime_delete_table)
    {
        list($response) = $this->deleteTableWithHttpInfo($realtime_delete_table);
        return $response;
    }

    /**
     * Operation deleteTableWithHttpInfo
     *
     * Delete report
     *
     * @param \client.model\RealtimeDeleteTable $realtime_delete_table  (required)
     * @return Array of \client.model\SuccessMessage, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function deleteTableWithHttpInfo($realtime_delete_table)
    {
        // verify the required parameter 'realtime_delete_table' is set
        if ($realtime_delete_table === null) {
            throw new \InvalidArgumentException('Missing the required parameter $realtime_delete_table when calling deleteTable');
        }
        // parse inputs
        $resourcePath = "/realtime/delete";
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
        if (isset($realtime_delete_table)) {
            $_tempBody = $realtime_delete_table;
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
                '\client.model\SuccessMessage',
                '/realtime/delete'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\client.model\SuccessMessage', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\SuccessMessage', $e->getResponseHeaders());
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
     * Operation listTables
     *
     * List queries
     *
     * @return \client.model\ContinuousQuery[]
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function listTables()
    {
        list($response) = $this->listTablesWithHttpInfo();
        return $response;
    }

    /**
     * Operation listTablesWithHttpInfo
     *
     * List queries
     *
     * @return Array of \client.model\ContinuousQuery[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function listTablesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/realtime/list";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\client.model\ContinuousQuery[]',
                '/realtime/list'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\client.model\ContinuousQuery[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\ContinuousQuery[]', $e->getResponseHeaders());
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
     * Operation queryTable
     *
     * Get report
     *
     * @param \client.model\RealtimeQueryTable $realtime_query_table  (required)
     * @return \client.model\RealTimeQueryResult
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function queryTable($realtime_query_table)
    {
        list($response) = $this->queryTableWithHttpInfo($realtime_query_table);
        return $response;
    }

    /**
     * Operation queryTableWithHttpInfo
     *
     * Get report
     *
     * @param \client.model\RealtimeQueryTable $realtime_query_table  (required)
     * @return Array of \client.model\RealTimeQueryResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function queryTableWithHttpInfo($realtime_query_table)
    {
        // verify the required parameter 'realtime_query_table' is set
        if ($realtime_query_table === null) {
            throw new \InvalidArgumentException('Missing the required parameter $realtime_query_table when calling queryTable');
        }
        // parse inputs
        $resourcePath = "/realtime/get";
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
        if (isset($realtime_query_table)) {
            $_tempBody = $realtime_query_table;
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
                '\client.model\RealTimeQueryResult',
                '/realtime/get'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\client.model\RealTimeQueryResult', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\RealTimeQueryResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\ErrorMessage', $e->getResponseHeaders());
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