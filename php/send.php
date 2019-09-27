<?php

require './QueryBuilder/QueryBuilder.php';

QueryBuilder::getInstance()->addComment($_POST);

header("Location:http://level1.local/index.php");exit;


