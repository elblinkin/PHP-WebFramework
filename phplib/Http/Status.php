<?php

/**
 * Constants for HTTP status codes and messages.
 * TODO Maybe replace all static methods with __callStatic once on 5.3
 */
class Http_Status {

    private $code;
    private $message;

    private function __construct(int $code, string $message) {
        $this->code = $code;
        $this->message = $message;
    }

    /**
     * @return int HTTP status code
     */
    public function getCode() {
        return $code;
    }

    /**
     * @return string HTTP status message
     */
    public function getMessage() {
        return $message;
    }

    /**
     * Indicates that the client can continue.
     */
    static function SC_CONTINUE() {
        return new Http_Status(100, 'Continue');
    }

    /**
     * The server is switching protocols according to Upgrade header.
     */
    static function SC_SWITCHING_PROTOCOLS() {
        return new Http_Status(101, 'Switching Protocols');
    }

    /**
     * The request succeeded normally.
     */
    static function SC_OK() {
        return new Http_Status(200, 'OK');
    }

    /**
     * The request succeeded and created a new resource on the server.
     */
    static function SC_CREATED() {
        return new Http_Status(201, 'Created');
    }

    /**
     * Request was accepted for processing, but not completed.
     */
    static function SC_ACCEPTED() {
        return new Http_Status(202, 'Accepted');
    }

    /**
     * Indicates that the meta information presented by the client did not
     * originate from the server.
     */
    static function SC_NON_AUTHORITATIVE_INFORMATION() {
        return new Http_Status(203, 'Non-Authoritative Information');
    } 
    
    /**
     * Indicates that the agent SHOULD reset the document view which caused 
     * the request to be sent.
     */
    static function SC_RESET_CONTENT() {
        return new Http_Status(205, 'Reset Content');
    }

    /**
     * Indicates that the server has fulfilled the partial GET request for 
     * the resource.
     */
    static function SC_PARTIAL_CONTENT() {
        return new Http_Status(206, 'Partial Content');
    }

    /**
     * Indicates that the request resource corresponds to any one of a 
     * set of representations, each with its own specific location.
     */
    static function SC_MULTIPLE_CHOICES() {
        return new Http_Status(300, 'Multiple Choices');
    }

    /**
     * Indicates that the resource has permanently moved to a new location, 
     * and the future references should use the new URI with their requests.
     */
    static function SC_MOVED_PERMANENTLY() {
        return new Http_Status(301, 'Moved Permanently');
    }

    /**
     * Indicates that the resource resides temporarily under a different 
     * URI.  Since the redirection might be altered on occasion, the client 
     * should continue to use the Request-URI for future requests.
     */
    static function SC_FOUND() {
        return new Http_Status(302, 'Found');
    }

    /**
     * Indicates that the response to the request can be found under a 
     * different URI.
     */
    static function SC_SEE_OTHER() {
        return new Http_Status(303, 'See Other');
    }

    /**
     * Indicates that a conditional GET operation found that the resource 
     * was available and not modified.
     */
    static function SC_NOT_MODIFIED() {
        return new Http_Status(304, 'Not Modified');
    }

    /**
     * Indicates that the requested resource MUST be accessed through the 
     * proxy given by the Location field.
     */
    static function SC_USE_PROXY() {
        return new Http_Status(305, 'Use Proxy');
    }

    /**
     * Indicates that the requested resource resides temporarily under a 
     * different URI.
     */
    static function SC_TEMPORARY_REDIRECT() {
        return new Http_Status(307, 'Temporary Redirect');
    }

    /**
     * The request could not be understood by the server due to malformed 
     * syntax. 
     */
    static function SC_BAD_REQUEST() {
        return new Http_Status(400, 'Bad Request');
    }

    /**
     * The request requires user authentication.
     */
    static function SC_UNAUTHORIZED() {
        return new Http_Status(401, 'Unauthorized');
    }

    /**
     * This code is reserved for future use.
     */
    static function SC_PAYMENT_REQUIRED() {
        return new Http_Status(402, 'Payment Required');
    }

    /**
     * The server understood the request, but is refusing to fulfill it. 
     * Authorization will not help and the request SHOULD NOT be repeated.
     */
    static function SC_FORBIDDEN() {
        return new Http_Status(403, 'Forbidden');
    }

    /**
     * The server has not found anything matching the Request-URI. No 
     * indication is given of whether the condition is temporary or 
     * permanent.
     */
    static function SC_NOT_FOUND() {
        return new Http_Status(404, 'Not Found');
    }

    /**
     * The method specified in the Request-Line is not allowed for the 
     * resource identified by the Request-URI. The response MUST include 
     * an Allow header containing a list of valid methods for the requested 
     * resource.
     */
    static function SC_METHOD_NOT_ALLOWED() {
        return new Http_Status(405, 'Method Not Allowed');
    }

    static function SC_NOT_ACCEPTABLE() {
        return new Http_Status(406, 'Not Acceptable');
    }

    static function SC_PROXY_AUTHENTICATION_REQUIRED() {
        return new Http_Status(407, 'Proxy Authentication Required');
    }

    static function SC_REQUEST_TIMEOUT() {
        return new Http_Status(408, 'Request Timeout');
    }

    static function SC_CONFLICT() {
        return new Http_Status(409, 'Conflict');
    }

    static function SC_GONE() {
        return new Http_Status(410, 'Gone');
    }

    static function SC_LENGTH_REQUIRED() {
        return new Http_Status(411, 'Length Required');
    }

    static function SC_PRECONDITION_FAILED() {
        return new Http_Status(412, 'Precondition Failed');
    }

    static function SC_REQUEST_ENTITY_TOO_LARGE() {
        return new Http_Status(413, 'Request Entity Too Large');
    }

    static function SC_REQUEST_URI_TOO_LONG() {
        return new Http_Status(414, 'Request-URI Too Long');
    }

    static function SC_UNSUPPORTED_MEDIA_TYPE() {
        return new Http_Status(415, 'Unsupported Media Type');
    }

    static function SC_REQUESTED_RANGE_NOT_SATISFIABLE() {
        return new Http_Status(416, 'Requested Range Not Satisfiable');
    }

    static function SC_EXPECTATION_FAILED() {
        return new Http_Status(417, 'Expectation Failed');
    }
}
