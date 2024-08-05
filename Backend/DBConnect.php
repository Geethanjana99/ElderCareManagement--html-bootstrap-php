<?php

$hostname = 'lecturescheduling-lecture-scheduling-sys.d.aivencloud.com';
$port = 24221;
$username = 'avnadmin';
$password = 'AVNS_Qt9o2_UyDOQ3seab3Qe';
$database = 'eldercare';


$dsn = "mysql:host=$hostname;port=$port;dbname=$database;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>
