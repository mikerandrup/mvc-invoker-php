<?php

print "Hello from the router.";

require_once("MvcEngine/mvcengine.php");

print "Hello from the router.";

print new MvcEngine\Controllers\ExampleController()->ProvideResponseBody();

?>