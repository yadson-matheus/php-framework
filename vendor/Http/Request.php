<?php 
    namespace Http;

    class Request {
        private $baseUrl;

        private $uri;

        private $data;

        private $type;

        public function __construct(/*string*/ $url) {
            $this->baseUrl = $url;
            $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $this->data = $_REQUEST;
            $this->type = $_SERVER['REQUEST_METHOD'];
        }
    }