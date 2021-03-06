<?php
/**
 * ContinuousqueryApi
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
 * ContinuousqueryApi Class Doc Comment
 *
 * @category Class
 * @package  Rakam
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContinuousqueryApi
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
     * @return ContinuousqueryApi
     */
    public function setApiClient(\Rakam\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createQuery
     *
     * Create stream
     *
     * @param \client.model\ContinuousQuery $continuous_query  (required)
     * @return \client.model\SuccessMessage
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function createQuery($continuous_query)
    {
        list($response) = $this->createQueryWithHttpInfo($continuous_query);
        return $response;
    }

    /**
     * Operation createQueryWithHttpInfo
     *
     * Create stream
     *
     * @param \client.model\ContinuousQuery $continuous_query  (required)
     * @return Array of \client.model\SuccessMessage, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function createQueryWithHttpInfo($continuous_query)
    {
        // verify the required parameter 'continuous_query' is set
        if ($continuous_query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $continuous_query when calling createQuery');
        }
        // parse inputs
        $resourcePath = "/continuous-query/create";
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
        if (isset($continuous_query)) {
            $_tempBody = $continuous_query;
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
                '/continuous-query/create'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\client.model\SuccessMessage', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\SuccessMessage', $e->getResponseHeaders());
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

    /**
     * Operation deleteQuery
     *
     * Delete stream
     *
     * @param \client.model\ContinuousQueryDeleteQuery $continuous_query_delete_query  (required)
     * @return \client.model\SuccessMessage
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function deleteQuery($continuous_query_delete_query)
    {
        list($response) = $this->deleteQueryWithHttpInfo($continuous_query_delete_query);
        return $response;
    }

    /**
     * Operation deleteQueryWithHttpInfo
     *
     * Delete stream
     *
     * @param \client.model\ContinuousQueryDeleteQuery $continuous_query_delete_query  (required)
     * @return Array of \client.model\SuccessMessage, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function deleteQueryWithHttpInfo($continuous_query_delete_query)
    {
        // verify the required parameter 'continuous_query_delete_query' is set
        if ($continuous_query_delete_query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $continuous_query_delete_query when calling deleteQuery');
        }
        // parse inputs
        $resourcePath = "/continuous-query/delete";
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
        if (isset($continuous_query_delete_query)) {
            $_tempBody = $continuous_query_delete_query;
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
                '/continuous-query/delete'
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
     * Operation getQuery
     *
     * Get continuous query
     *
     * @param \client.model\ContinuousQueryGetQuery $continuous_query_get_query  (required)
     * @return \client.model\ContinuousQuery
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function getQuery($continuous_query_get_query)
    {
        list($response) = $this->getQueryWithHttpInfo($continuous_query_get_query);
        return $response;
    }

    /**
     * Operation getQueryWithHttpInfo
     *
     * Get continuous query
     *
     * @param \client.model\ContinuousQueryGetQuery $continuous_query_get_query  (required)
     * @return Array of \client.model\ContinuousQuery, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function getQueryWithHttpInfo($continuous_query_get_query)
    {
        // verify the required parameter 'continuous_query_get_query' is set
        if ($continuous_query_get_query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $continuous_query_get_query when calling getQuery');
        }
        // parse inputs
        $resourcePath = "/continuous-query/get";
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
        if (isset($continuous_query_get_query)) {
            $_tempBody = $continuous_query_get_query;
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
                '\client.model\ContinuousQuery',
                '/continuous-query/get'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\client.model\ContinuousQuery', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\ContinuousQuery', $e->getResponseHeaders());
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
     * Operation getSchemaOfQuery
     *
     * Get query schema
     *
     * @param \client.model\ContinuousQueryGetSchemaOfQuery $continuous_query_get_schema_of_query  (required)
     * @return \client.model\Collection[]
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function getSchemaOfQuery($continuous_query_get_schema_of_query)
    {
        list($response) = $this->getSchemaOfQueryWithHttpInfo($continuous_query_get_schema_of_query);
        return $response;
    }

    /**
     * Operation getSchemaOfQueryWithHttpInfo
     *
     * Get query schema
     *
     * @param \client.model\ContinuousQueryGetSchemaOfQuery $continuous_query_get_schema_of_query  (required)
     * @return Array of \client.model\Collection[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function getSchemaOfQueryWithHttpInfo($continuous_query_get_schema_of_query)
    {
        // verify the required parameter 'continuous_query_get_schema_of_query' is set
        if ($continuous_query_get_schema_of_query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $continuous_query_get_schema_of_query when calling getSchemaOfQuery');
        }
        // parse inputs
        $resourcePath = "/continuous-query/schema";
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
        if (isset($continuous_query_get_schema_of_query)) {
            $_tempBody = $continuous_query_get_schema_of_query;
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
                '\client.model\Collection[]',
                '/continuous-query/schema'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\client.model\Collection[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\client.model\Collection[]', $e->getResponseHeaders());
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
     * Operation listQueries
     *
     * List queries
     *
     * @return \client.model\ContinuousQuery[]
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function listQueries()
    {
        list($response) = $this->listQueriesWithHttpInfo();
        return $response;
    }

    /**
     * Operation listQueriesWithHttpInfo
     *
     * List queries
     *
     * @return Array of \client.model\ContinuousQuery[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function listQueriesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/continuous-query/list";
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
                '/continuous-query/list'
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
     * Operation testQuery
     *
     * Test continuous query
     *
     * @param \client.model\ContinuousQueryTestQuery $continuous_query_test_query  (required)
     * @return bool
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function testQuery($continuous_query_test_query)
    {
        list($response) = $this->testQueryWithHttpInfo($continuous_query_test_query);
        return $response;
    }

    /**
     * Operation testQueryWithHttpInfo
     *
     * Test continuous query
     *
     * @param \client.model\ContinuousQueryTestQuery $continuous_query_test_query  (required)
     * @return Array of bool, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function testQueryWithHttpInfo($continuous_query_test_query)
    {
        // verify the required parameter 'continuous_query_test_query' is set
        if ($continuous_query_test_query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $continuous_query_test_query when calling testQuery');
        }
        // parse inputs
        $resourcePath = "/continuous-query/test";
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
        if (isset($continuous_query_test_query)) {
            $_tempBody = $continuous_query_test_query;
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
                'bool',
                '/continuous-query/test'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
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
