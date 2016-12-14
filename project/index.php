<?php
echo 'test';

$db = mysqli_connect('mysql', 'root', 'toor', 'lifeofcto') or die('Error');
$query = mysqli_query($db, 'show databases');
$results = mysqli_fetch_array($query);

echo '<pre>'; var_dump($results); echo '</pre>';

$redis = new Redis();
$redis->connect('redis', 6379);
echo "Connection to server sucessfully";
echo "Server is running: ".$redis->ping();