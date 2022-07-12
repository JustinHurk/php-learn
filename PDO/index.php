<?php

require 'Task.php';
require 'functions.php';
require 'database/connection.php';

$pdo = Connection::make();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';