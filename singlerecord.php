<html>
<head>
    <title>Get a single record from a table example code</title>
</head>
<body>
    <table>
        <tr>
            <th>Number</th>
            <th>Last Name</th>
            <th>First Name</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "saleco");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $query = "SELECT * FROM tblcustomer WHERE cusCode=10010";
        $result = mysqli_query($conn, $query) or die("Unable to run the query");
        $row = mysqli_fetch_row($result);
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
