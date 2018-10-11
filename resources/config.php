<?php
    $config = array(
        "db" => array(
            "db1" => array(
                "dbname" => "database1",
                "username" => "dbUser",
                "password" => "pa$$",
                "host" => "localhost"
            ),
            "db2" => array(
                "dbname" => "database2",
                "username" => "dbUser",
                "password" => "pa$$",
                "host" => "localhost"
            )
        ),
        "urls" => array(
            "baseUrl" => "localhost:8080"
        ),
        "paths" => array(
            "resources" => "../resources",
            "images" => array(
                "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
                "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
            )
        )
    );
    
    // Constants
    defined("LIBRARY_PATH")
        or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
        
    defined("TEMPLATES_PATH")
        or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
    
    // Errors
    ini_set("error_reporting", "true");
    error_reporting(E_ALL|E_STRCT);
    
?>