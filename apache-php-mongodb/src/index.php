<?php

echo extension_loaded("mongodb") ? "Extention loaded\n" : "Extention not loaded";

$manager = new MongoDB\Driver\Manager("mongodb://root:password@mongo:27017");
// // Output of the executeQuery will be object of MongoDB\Driver\Cursor class
$query = new MongoDB\Driver\Query([]);
// // Convert cursor to Array and print result
$cursor = $manager->executeQuery('admin.system.version', $query);
echo "<pre>";
print_r($cursor->toArray());