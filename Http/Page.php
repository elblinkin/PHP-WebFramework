<?php

/**
 * Represents a Page that can be served upon request.
 */
class Http_Page {

    private $request;
    private $response;
    private $requestFilterChain;
    private $responseFilterChain;

    /**
     * @param Http_FilterChain $requestFilterChain chain of filters to
     * process before servicing the request
     * @param Http_FilterChain $responseFilterChain chain of filters to
     * process after servicing the request
     * @param Controller $controller controller to invoke process 
     * specific request with
     */
    public function __construct(
        Http_FilterChain $requestFilterChain,
        Http_FilterChain $responseFilterChain,
        Controller $controller) {

        $this->requestFilterChain = $requestFilterChain;
        $this->responseFilterChain = $responseFilterChain;
        $this->controller = $controller;
    }

    /**
     * Services the current request by filling in the current response.
     *
     * @param Http_Request $request the current HTTP request
     * @param Http_Response $response the current HTTP response
     */
    public function service(
        Http_Request $request, Http_Response $response) {

        try {
            $this->requestFilterChain->doFilter($request, $response);

            $method = $request->getMethod();
            switch ($method) {
                case 'GET':
                    $this->controller->doGet($request, $response);
                    break;
                case 'POST':
                    $this->controller->doPost($request, $response);
                    break;
                case 'PUT':
                    $this->controller->doPut($request, $response);
                    break;
                case 'DELETE':
                    $this->controller->doDelete($request, $response);
                    break;
                default:
                    // TODO: Throw a proper exception
                    throw new Exception("Invalid request method: $method");
            }

            $this->responseFilterChain->doFilter($request, $response);

        } catch (Http_Error $e) {
            $e->flush($response);
        }

        $response->flush();
    }
}
