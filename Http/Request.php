<?php

/**
 * Generic representation of an HTTP request.
 */
class Http_Request {

    private $method;

    public function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return string the HTTP method.
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * Use this to override the request method.
     * @param string $method the HTTP method
     */
    public function setMethod(string $method) {
        $this->method = $method;
    }

    /**
     * Gets a parameter from the request.
     *
     * @param string $name the name of the parameter
     * @param string $default the default value if the parameter
     * was not specified in the request
     * @return the string representation of the parameter
     */
    public function getParameter(string $name, string $default=NULL) {
        EC_Preconditions::notNullOrEmpty($name);
        $collection = ($this->getMethod() == 'GET')
            ? $_GET
            : $_POST;

        if (isset($collection[$name])) {
            return $collection[$name];
        }

        return $default;    
    }
}
