<?php 
$host="localhost";
$port=5432;
$dbName="IFounds";
$password="postgres";

$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbName", "postgres", "$password");

?>