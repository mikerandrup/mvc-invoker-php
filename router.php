<?php
namespace MvcEngine\Router {

    use \MvcEngine\Controllers as Controllers;

    print "Hello from the router.";

    print "You are visiting the ".$_GET[route]." route";

    require_once("MvcEngine/mvcengine.php");

    require_once("MvcEngine/Controllers/ExampleController.php");
    $myController = new Controllers\ExampleController();

    print $myController->ProvideResponseBody();
}
?>