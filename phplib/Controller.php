<?php

/**
 * Interface for a controller.
 */
interface Controller {

    /**
     * Handles an HTTP GET request.
     *
     * @param Http_Request $request the current HTTP request
     * @param Http_Response $response the current HTTP response
     */
    function doGet(Http_Request $request, Http_Response $response);

    /**
     * Handles an HTTP POST request.
     *
     * @param Http_Request $request the current HTTP request
     * @param Http_Response $response the current HTTP response
     */
    function doPost(Http_Request $request, Http_Response $response);

    /**
     * Handles an HTTP PUT request.
     *
     * @param Http_Request $request the current HTTP request
     * @param Http_Response $response the current HTTP response
     */
    function doPut(Http_Request $request, Http_Response $response);

    /**
     * Handles an HTTP DELETE request.
     *
     * @param Http_Request $request the current HTTP request
     * @param Http_Response $response the current HTTP response
     */
    function doDelete(Http_Request $request, Http_Response $response);
}
