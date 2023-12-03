<?php

use Transportes\Core\Router;

Router::add('/', 'HomeController', 'index');
Router::add('/login', 'LoginController','login');
Routter::add('/cadastro', 'LoginController', 'criarConta');