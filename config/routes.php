<?php

declare(strict_types=1);

use Slim\Http\Response;
// 發現使用Slim\Http\Request常常會報錯，所以使用官方的Request當作請求
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;
use Slim\App;

return function(App $app) {
  $app->group("/api", function (RouteCollectorProxy $app) {
    $app->get("/home[/]", function(Request $req, Response $res, array $args) :Response { 
      return $res->withJson("GET HOME", 200, JSON_UNESCAPED_UNICODE);
    });
 });
};