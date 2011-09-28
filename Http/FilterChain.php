<?php

/**
 * A filter chain can be used on the current Http_Request
 * and Http_Response.  The filter chain can be used for
 * pre-processing or post-processing of a request and response.
 */
class Http_FilterChain {

    private $filters = array();

    /**
     * Adds a filter to the end of the chain.
     *
     * @param Http_Filter $filter a request filter
     */
    public function addFilter(Http_Filter $filter) {
        $this->filters[] = $filter;
    }

    /**
     * Starts the execution of the filter chain.<br>
     * WARNING: A filter can exit the chain at any time by throwing
     * an exception.
     *
     * @param Http_Request the current request
     * @param Http_Response the current response
     */
    public function doFilter(
        Http_Request $request, Http_Response $response) {
        $filter = array_shift($this->filters);
        if (!$filter) {
            return; // End of chain
        }
        $filter->doFilter($request, $response, $this);
    }
}