<?php

/**
 * This filter could perform
 * pre-processing of a request or post-processing of a response
 * depending upon which filter chain this filter is part of.
 */
interface Http_Filter {

    /**
     * Invokes this particular filter on the provided request and
     * response.  The end of this method should call:<br>
     * <pre>
     * $filterChain->doFilter($request, $response, $filterChain);
     * </pre>
     * unless it is intended to discontinue execution of the
     * filter chain, but continue with the remainder of the
     * request processing.
     *
     * @param Http_Request $request the current Http request
     * @param Http_Response $response the current Http response
     * @param Http_FilterChain $filterChaing the calling filter chain
     */
    public function doFilter(
        Http_Request $request,
        Http_Response $response,
        Http_FilterChain $filterChain);
}