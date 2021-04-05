<?php

require './QueryBuilder/QueryBuilder.php';
QueryBuilder::getInstance()->addComment($_POST);

header("Location:http://${$_SERVER['SERVER_NAME']}");exit();


