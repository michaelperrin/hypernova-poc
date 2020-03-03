<?php

require __DIR__ . '/vendor/autoload.php';

use \WF\Hypernova\Renderer;

$renderer = new Renderer('http://localhost:3030/batch');

$renderer->addJob('myViewId', ['name' => 'MyComponent.js', 'data' => ['some' => ['props']]]);

$response = $renderer->render();

var_dump($response);

echo $response->results['myViewId']->html;
