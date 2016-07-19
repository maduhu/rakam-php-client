<?php
/**
 * RetentionApi
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
 * RetentionApi Class Doc Comment
 *
 * @category Class
 * @package  Rakam
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RetentionApi
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
     * @return RetentionApi
     */
    public function setApiClient(\Rakam\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation analyzeRetention
     *
     * Execute query
     *
     * @param \client.model\RetentionQuery $retention_query  (required)
     * @return \client.model\QueryResult
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function analyzeRetention($retention_query)
    {
        list($response) = $this->analyzeRetentionWithHttpInfo($retention_query);
        return $response;
    }

    /**
     * Operation analyzeRetentionWithHttpInfo
     *
     * Execute query
     *
     * @param \client.model\RetentionQuery $retention_query  (required)
     * @return Array of \client.model\QueryResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Rakam\ApiException on non-2xx response
     */
    public function analyzeRetentionWithHttpInfo($retention_query)
    {
        // verify the required parameter 'retention_query' is set
        if ($retention_query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $retention_query when calling analyzeRetention');
        }
        // parse inputs
        $resourcePath = "/retention/analyze";
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
        if (isset($retention_query)) {
            $_tempBody = $retention_query;
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
                '/retention/analyze'
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

}
