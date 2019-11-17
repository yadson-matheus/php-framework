<?php 
    require_once '../configs/bootstrap.php';

    use Http\Server;
    use Application\Application;

    $server = new Server(new Application());

    $server->run();
    