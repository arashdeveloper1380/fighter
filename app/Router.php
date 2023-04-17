<?php

$router = new \core\Router();

$router->add('/series' , [ 'uses' => 'SeriesController@index' ] );
$router->add('/series/{slug}' , 'SeriesController@serie');
$router->add('/series/{slug}/episode/{id}' , 'SeriesController@episode');

return $router;
