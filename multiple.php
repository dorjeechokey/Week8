<html>
<head>
    <title>Get Multiple Records from a Table</title>
</head>
<body>
    <h1>Customer List</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Number</th>
            <th>Last Name</th>
            <th>First Name</th>
        </tr>
        <?php
        // Establish a connection to MySQL database
        $conn = mysqli_connect("localhost", "root", "", "saleco");
        
        // Check if the connection is successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // SQL query to fetch all customer records
        $query = "SELECT * FROM tblcustomer";
        $result = mysqli_query($conn, $query);

        // Check if the query returned any results
        if (mysqli_num_rows($result) > 0) {
            // Loop through each row in the result and print in table
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['Number'] . "</td>";
                echo "<td>" . $row['LastName'] . "</td>";
                echo "<td>" . $row['FirstName'] . "</td>";
                echo "</tr>";
            }
        } else {
            // If no records are found, display a message
            echo "<tr><td colspan='3'>No records found.</td></tr>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
