<?php
//Connecting to Redis server on localhost 
$redis = new Redis(); 
$redis->connect('172.21.0.2', 6379); 
echo "Connection to server sucessfully"; 
//set the data in redis string 
$redis->set("tutorial-name", "Redis tutorial"); 
// Get the stored data and print it 
echo "Stored string in redis:: " . $redis->get("tutorial-name"); 