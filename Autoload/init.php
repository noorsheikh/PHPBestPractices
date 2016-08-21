<?php

// This function will autoload all of the Classes inside the Classes directory.
function __autoload($class_name) {
	include "Classes/" . $class_name . ".php";
}

?>