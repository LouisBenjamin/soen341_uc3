<?php
    $dsn   = 'mysql:dbname=tato;unix_socket=/cloudsql/tato-231220:northamerica-northeast1:bestteam2019';
    $user ='test';
    $pass='tatouc3';

    try{
    	$pdo = new pdo($dsn, $user, $pass);
    }catch(PDOException $e){
    	echo 'Connection error!' .$e-> getMessage();
    }

  ?>  