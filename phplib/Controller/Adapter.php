<?php

/**
 * Implementation of an EC_Controller that you can extend from
 * to avoid writing a method signature out when a method is not
 * supported by a particular page.
 */
class Controller_Adpater implements Controller {

    /**
     * {@inheritDoc}
     */
    public function doGet(
        Http_Request $request, Http_Response $response) {

        $this->throwUp('GET');
    }

    /**
     * {@inheritDoc}
     */
    public function doPost(
        Http_Request $request, Http_Response $response) {

        $this->throwUp('POST');
    }

    /**
     * {@inheritDoc}
     */
    public function doPut(
        Http_Request $request, Http_Response $response) {

        $this->throwUp('PUT');
    }

    /**
     * {@inheritDoc}
     */
    public function doDelete(
        Http_Request $request, Http_Response $response) {

        $this->throwUp('DELETE');
    }

    private function throwUp($method) {
        // TODO: Throw a proper exception
        throw new Exception("Invalid request method: $method");
    }
}
