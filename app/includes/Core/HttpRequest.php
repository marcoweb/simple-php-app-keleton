<?php
namespace Application\Core;

class HttpRequest {
    private $requestUri = '';
    private $requestParameters = [];
    private $requestMethod = '';

    public function getRequestURI() : string {
        return $this->requestURI;
    }

    public function getRequestParameters() : array {
        return $this->requestParameters;
    }

    public function getRequestMethod(): string {
        return $this->requestMethod;
    }

    static public function getCurrentRequest() : HttpRequest {
        return new HttpRequest();
    }

    public function __construct() {
        $this->requestUri = $_SERVER['REQUEST_URI'];
        $this->requestParameters = [];
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
    }
}