<?php
include('db.php');
include('index_functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Admin Dashboard</h2>

    <button onclick="loadTable('locations')">Load Location Data</button>
    <button onclick="loadTable('customers')">Load Customers Data</button>
    <button onclick="loadTable('reservations')">Load Reservations Data</button>
    <button onclick="loadTable('rooms')">Load Rooms Data</button>
    <button onclick="loadTable('staff')">Load Staff Data</button>

    <div id="tableContainer"></div>

    <script>
        function loadTable(table) {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("tableContainer").innerHTML = ""; // Clear existing content
                    document.getElementById("tableContainer").innerHTML = this.responseText;
                }
            };

            xhttp.open("GET", "load_data.php?table=" + table, true);
            xhttp.send();
        }
    </script>
</body>
</html>

