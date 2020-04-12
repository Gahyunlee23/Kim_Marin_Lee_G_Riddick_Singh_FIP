<?php

function getAll($tbl) {
    $pdo = Database::getInstance()->getConnection();

    $queryAll = 'SELECT * FROM '.$tbl;
    $results = $pdo->query($queryAll);

    if($results) {
        return $results;
    } else {
        return 'There was a problem accessing this info';
    }
};

function getSingleContent($tbl, $col, $id) {
    $pdo = Database::getInstance()->getConnection();

    $queryAll = 'SELECT * FROM '. $tbl .' WHERE '.$col.' = '.$id;
    $results = $pdo->query($queryAll);

    if($results) {
        return $results;
    } else {
        return 'There was a problem accessing this info';
    }

}