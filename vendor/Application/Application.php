<?php
    namespace Application;

    use Http\Request;

    class Application {
        public function start(Request $request) {
            echo '<pre>';
            var_dump($request);
            echo '</pre>';
        }
    }