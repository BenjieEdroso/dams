<?php
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "dams");
define("APPROOT", dirname(dirname(__FILE__)));
define("URLROOT", "http://localhost/DAMS");
define("SITENAME", "DAMS");
$keyFile = fopen(APPROOT . "/config/dams_secret.txt", "r");
define("SECRET_KEY", fread($keyFile, filesize(APPROOT . "/config/dams_secret.txt") ));
