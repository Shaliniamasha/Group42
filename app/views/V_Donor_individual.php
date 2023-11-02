<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Donor Individual Details</h1>
    
    <table>
        <tr>
            <th>Email</th>
            <th>Username</th>
            <th>Signup Date</th>
        </tr>
        
        <?php
        // Replace 'your_database_info_here' with your actual database credentials
        $dbHost = 'Team';
        $dbName = 'give4good';
        $dbUser = 'admin';
        $dbPass = 'give4good';

        try {
            $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT email, username, signup_date FROM donor_individuals";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['username']}</td>";
                echo "<td>{$row['signup_date']}</td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $pdo = null;
        ?>
    </table>
</body>
</html>
