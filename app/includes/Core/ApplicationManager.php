<?php
namespace Application\Core;

class ApplicationManager {
    public function processHttpRequest() {
        echo '<pre>';
        var_dump(HttpRequest::getCurrentRequest());
        echo '</pre>';
    }
}