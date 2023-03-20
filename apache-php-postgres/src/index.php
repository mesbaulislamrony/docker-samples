<?php
$host        = "host = 172.28.1.1";
$port        = "port = 5432";
$dbname      = "dbname = laravel";
$credentials = "user = username password=password";

$db = pg_connect( "$host $port $dbname $credentials"  );
if(!$db) {
   echo "Error : Unable to open database\n";
} else {
   echo "Opened database successfully\n";
}