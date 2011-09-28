<?php

abstract class Http_Error extends Exception {

    /**
     * {@inheritDoc}
     */
    public function __construct($message, $code='0') {
        parent::__construct($message, $code);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString() {
        return __CLASS__ . ":[{$this->code}]: {$this->message}\n";
    }

    /**
     * Writes error information to the response object.
     * The page will later call flush on the response.
     *
     * @param Http_Response $response the current HTTP response
     */
    abstract function flush(Http_Response $response);
}
