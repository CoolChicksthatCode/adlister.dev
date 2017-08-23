<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    itemName VARCHAR(1000) NOT NULL,
    price FLOAT(10,2) NOT NULL,
    description VARCHAR(2500) NOT NULL,
    sellerName VARCHAR(500),
    username VARCHAR(500),
    userId INT NOT NULL,
    -- image VARCHAR(500),
    PRIMARY KEY (id)
)';

$dbc->exec($query);