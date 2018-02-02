<?php
require 'vendor/autoload.php';

use Crafter\Composer\Item;
use Crafter\Composer\Container;

error_reporting(E_ALL);
ini_set('display_errors', 1);
$container = new Container();
$container->add("Adam");
$container->add("Grzesiek");
$container->add("Maciek");
$container->add("Rafał");
$container->add('Dupa');
$container->reverse();

foreach ($container as $item) {
    echo $item->getData();
}
dump($container);

