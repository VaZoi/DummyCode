<?php
include('db.php');
include('index_functions.php');

if (isset($_GET['table'])) {
    $selectedTable = $_GET['table'];
    echo "<h3>$selectedTable Data</h3>";
    displayTable($selectedTable);
} else {
    echo "Table parameter not provided.";
}

