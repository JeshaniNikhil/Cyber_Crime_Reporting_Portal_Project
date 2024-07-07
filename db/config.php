<?php
$dsn = 'mysql:host=localhost;dbname=cyber_crime_reporting_portal';
$username_db = 'root';
$password_db = '';
try {
  $pdo = new PDO($dsn, $username_db, $password_db);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('Database connection failed: ' . $e->getMessage());
}
?>