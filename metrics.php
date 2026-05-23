<?php
header('Content-Type: text/plain; version=0.0.4');

require_once _DIR_ . '/vendor/autoload';

use Prometheus\CollectorRegistry;
use Prometheus\Storage\InMemory;


$storage = new InMemory();
$registry = new CollectorRegistry($storage);


$contador = $registry->getOrRegisterCounter(
    'scheduling', 
    'consultas_agendadas_total', 
    'Total acumulado de consultas medicas agendadas'
);


$contador->incBy(rand(1, 10));


$renderer = new Prometheus\RenderTextFormat();
echo $renderer->render($registry->getMetricFamilySamples());