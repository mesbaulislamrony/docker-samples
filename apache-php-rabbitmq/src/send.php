<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

define("RABBITMQ_HOST", "172.19.0.3");
define("RABBITMQ_PORT", 5672);
define("RABBITMQ_USERNAME", "username");
define("RABBITMQ_PASSWORD", "password");
define("RABBITMQ_QUEUE_NAME", "pizzaTime");

$connection = new AMQPStreamConnection(RABBITMQ_HOST, RABBITMQ_PORT, RABBITMQ_USERNAME, RABBITMQ_PASSWORD);
$channel = $connection->channel();

$channel->queue_declare(
    $queue = RABBITMQ_QUEUE_NAME,
    $passive = false,
    $durable = true,
    $exclusive = false,
    $auto_delete = false,
    $nowait = false,
    $arguments = null,
    $ticket = null
);

$msg = new AMQPMessage('Hello World! ' . rand(100,999));
$channel->basic_publish($msg, '', RABBITMQ_QUEUE_NAME);
echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();