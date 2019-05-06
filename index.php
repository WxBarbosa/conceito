<?php 

// Usa um autoload
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/View.php';
require 'libs/Model.php';

// Usa middlewares
require 'libs/Session.php';
require 'libs/Database.php';

// Usa configurações
require 'config/database.php';
require 'config/path.php';

$app = new Bootstrap();

