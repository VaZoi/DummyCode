<?php
function displayTable($table) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM $table");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        echo "<table border='1'><tr>";

        // Display column headers
        $row = reset($result);
        foreach ($row as $key => $value) {
            echo "<th>$key</th>";
        }

        echo "</tr>";

        // Display data rows
        foreach ($result as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }
}

