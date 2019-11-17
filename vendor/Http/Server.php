<?php 
    namespace Http;
    
    use Application\Application;
    use Http\Request;

	class Server {
        private $protocol;

        private $host;

        private $port;

        private $application;

        public function __construct(Application $application) {
            $protocol = $_SERVER['SERVER_PROTOCOL'];

            $this->protocol = (strpos($protocol, 'HTTP') !== false) ? 'http' : 'https';
            $this->host = $_SERVER['SERVER_NAME'];
            $this->port = $_SERVER['SERVER_PORT'];
            $this->application = $application;
        }

        public function run() {
            $request = new Request($this->getBaseUrl());

            $this->application->start($request);
        }

        private function getBaseUrl() {
            return $this->protocol.'://'.$this->host;
        }
	}