<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task manager</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        require_once 'config.php';

        
        try {
            $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
            
        } catch (PDOException $pe) {
            die("Could not connect to the database $dbname :" . $pe->getMessage());
        }




    ?>
</body>
</html>